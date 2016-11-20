<?php

namespace Drupal\nexx_integration;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Entity\Query\QueryFactory;
use Drupal\Core\Logger\LoggerChannelFactory;
use Drupal\Component\Serialization\Json;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

/**
 * Class NexxNotification.
 *
 * @package Drupal\nexx_integration
 */
class NexxNotification implements NexxNotificationInterface {

  /**
   * The entity storage object for taxonomy terms.
   *
   * @var \Drupal\Core\Entity\EntityStorageInterface
   */
  protected $termStorage;

  /**
   * The entity query object for taxonomy terms.
   *
   * @var \Drupal\Core\Entity\Query\QueryInterface
   */
  protected $nodeQuery;

  /**
   * The config factory service.
   *
   * @var \Drupal\Core\Config\ImmutableConfig
   */
  protected $config;

  /**
   * The config factory service.
   *
   * @var \Psr\Log\LoggerInterface
   */
  protected $logger;

  /**
   * The HTTP client.
   *
   * @var \GuzzleHttp\Client
   */
  protected $httpClient;

  /**
   * Notify nexxOMNIA video CMS.
   *
   * Notify when channel or actor terms have been updated,
   * or when a video has been created.
   *
   * @param EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param QueryFactory $query
   *   The entity query object for taxonomy terms.
   * @param ConfigFactoryInterface $config_factory
   *   The config factory service.
   * @param LoggerChannelFactory $logger
   *   The config factory service.
   * @param Client $http_client
   *   The HTTP client.
   */
  public function __construct(
    EntityTypeManagerInterface $entity_type_manager,
    QueryFactory $query,
    ConfigFactoryInterface $config_factory,
    LoggerChannelFactory $logger,
    Client $http_client
  ) {
    $this->termStorage = $entity_type_manager->getStorage('taxonomy_term');
    $this->nodeQuery = $query->get('node');
    $this->config = $config_factory->get('nexx_integration.settings');
    $this->logger = $logger->get('nexx_integration');
    $this->httpClient = $http_client;
  }

  /**
   * {@inheritdoc}
   */
  public function insert($streamtype, $reference_number, $values) {
    if ($streamtype === 'video') {
      throw new \InvalidArgumentException(sprintf('Streamtype cannot be "%s" in insert operation.', $streamtype));
    }
    $response = $this->notificateNexx($streamtype, $reference_number, 'insert', $values);
    $this->logger->info("insert @type. Reference number: @reference, values: @values", array(
      '@type' => $streamtype,
      '@reference' => $reference_number,
      '@values' => print_r($values, TRUE),
    )
    );
    return $response;
  }

  /**
   * {@inheritdoc}
   */
  public function update($streamtype, $reference_number, $values) {
    $response = $this->notificateNexx($streamtype, $reference_number, 'update', $values);
    $this->logger->info("update @type. Reference number: @reference, values: @values", array(
      '@type' => $streamtype,
      '@reference' => $reference_number,
      '@values' => print_r($values, TRUE),
    )
    );
    return $response;
  }

  /**
   * {@inheritdoc}
   */
  public function delete($streamtype, $reference_number, $values) {
    if ($streamtype === 'video') {
      throw new \InvalidArgumentException(sprintf('Streamtype cannot be "%s" in delete operation.', $streamtype));
    }
    $response = $this->notificateNexx($streamtype, $reference_number, 'delete', $values);
    $this->logger->info("delete @type. Reference number: @reference", array(
      '@type' => $streamtype,
      '@reference' => $reference_number,
    )
    );

    return $response;
  }

  /**
   * Send a crud notification to nexx.
   *
   * @param string $streamtype
   *   The data type to update. Possible values are:
   *   - "actor"
   *   - "channel"
   *   - "tag"
   *   - "video".
   * @param string $reference_number
   *   Reference id. In case of streamtype video, this is the nexx ID in all
   *   other cases, this is the corresponding drupal id.
   * @param string $command
   *   CRUD operation. Possible values are:
   *   - "insert"
   *   - "update"
   *   - "delete".
   * @param string[] $values
   *   The values to be set.
   *
   * @return string[] $response_data
   *   Decoded response.
   */
  protected function notificateNexx(
    $streamtype,
    $reference_number,
    $command,
    $values = []
  ) {
    $api_url = $this->config->get('nexx_api_url');
    $api_authkey = $this->config->get('nexx_api_authkey');

    $response_data = [];
    $data = [
      'streamtype' => $streamtype,
      'command' => $command,
      'refnr' => $reference_number,
      'authkey' => $api_authkey,
    ];

    if (isset($values)) {
      $data += $values;
    }

    try {
      $options = array(
        'form_params' => $data,
      );
      /*
      $this->logger->debug("Send http request to @url with option: @options",
      [
      '@url' => $api_url,
      '@options' => print_r($options, TRUE),
      ]);
       */
      $response = $this->httpClient->request('POST', $api_url, $options);
      $response_data = Json::decode($response->getBody()->getContents());

      if ($response_data['state'] !== 'ok') {
        $this->logger->error("Omnia request failed: @error", array(
          '@error' => $response_data['info'],
        )
        );
      }
      else {
        $this->logger->info("Successful notification. Streamtype '@streamtype', command '@command', refnr '@refnr', values '@values' options @options", array(
          '@streamtype' => $streamtype,
          '@command' => $command,
          '@refnr' => $reference_number,
          '@values' => print_r($values, TRUE),
          '@options' => print_r($options, TRUE),
        )
        );
      }
    }
    catch (RequestException $e) {
      $this->logger->error("HTTP request failed: @error", array(
        '@error' => $e->getMessage(),
      )
      );
    }
    return $response_data;
  }

}
