<?php

namespace Drupal\Tests\riddle_marketplace\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\Core\Config\Config;
use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\riddle_marketplace\RiddleFeedService;

/**
 * Provides automated tests for the riddle_marketplace module.
 *
 * And RiddleFeedService class.
 *
 * @group riddle_marketplace
 */
class RiddleFeedServiceTest extends UnitTestCase {

  /**
   * Cache Service Mock.
   */
  protected $cacheServiceMock;

  /**
   * Config Factory Mock -> provides base configuration required for Testing.
   */
  protected $configFactoryMock;

  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "RiddleFeedService's controller functionality",
      'description' => 'Test Unit for module riddle_marketplace and service RiddleFeedService.',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();

    $this->cacheServiceMock = $this->getMock('Drupal\Core\Cache\CacheBackendInterface');
    $this->setUpConfigFactoryMock();

    $container = new ContainerBuilder();
    $container->set(
      'cache.riddle_feed',
      $this->getMock('\Drupal\Core\Cache\CacheBackendInterface')
    );

    \Drupal::setContainer($container);
  }

  /**
   * Setup Config relevant for proper functioning of tests.
   */
  protected function setUpConfigFactoryMock() {
    $this->configFactoryMock = $this->getMock('\Drupal\Core\Config\ConfigFactoryInterface');

    $storage = $this->getMock('Drupal\Core\Config\StorageInterface');
    $event_dispatcher = $this->getMock('Symfony\Component\EventDispatcher\EventDispatcherInterface');
    $typed_config = $this->getMock('Drupal\Core\Config\TypedConfigManagerInterface');
    $config = new Config('riddle_marketplace', $storage, $event_dispatcher, $typed_config);
    $config->set('riddle_marketplace.empty_title_prefix', 'Riddle ');

    $this->configFactoryMock->expects($this->once())
      ->method('get')
      ->willReturn($config);
  }

  /**
   * Execute private/protected method.
   *
   * @param object $object
   *   Object used for execution of restricted method.
   * @param string $methodName
   *   Name of method that should be executed.
   * @param array $parameters
   *   List of params that should be passed to method.
   *
   * @return mixed
   *   Return result of method execution.
   */
  public function executeMethod(&$object, $methodName, array $parameters = array()) {
    $reflection = new \ReflectionClass(get_class($object));
    $method = $reflection->getMethod($methodName);
    $method->setAccessible(TRUE);

    return $method->invokeArgs($object, $parameters);
  }

  /**
   * Set value for private/protected parameter.
   *
   * @param object $object
   *   Object used to set parameter value on it.
   * @param string $name
   *   Name of restricted parameter.
   * @param mixed $value
   *   New value for parameter.
   */
  public function setProperty(&$object, $name, $value) {
    $reflection = new \ReflectionClass(get_class($object));
    $property = $reflection->getProperty($name);
    $property->setAccessible(TRUE);

    $property->setValue($object, $value);
  }

  /**
   * Tests basic processRiddleResponse method functionality.
   *
   * @param array $riddleResponse
   *   Test case of Riddle API response.
   * @param array $expected
   *   Expected result of processRiddleResponse execution.
   *
   * @dataProvider processRiddleResponseDataProvider
   */
  public function testProcessRiddleResponse($riddleResponse, $expected) {
    $feedService = new RiddleFeedService($this->cacheServiceMock, $this->configFactoryMock);

    $feed = $this->executeMethod(
      $feedService,
      'processRiddleResponse',
      array($riddleResponse)
    );

    $this->assertEquals($expected, $feed);
  }

  /**
   * Data provider for processRiddleResponse method related tests.
   *
   * @return array
   *   Return test cases for testProcessRiddleResponse.
   */
  public function processRiddleResponseDataProvider() {
    $riddleFeed = array(
      array(
        'data' => array(
          'title' => '',
        ),
        'uid' => '1',
      ),
      array(
        'data' => array(
          'title' => 'Defined Title',
        ),
        'uid' => '2',
      ),
      array(
        'data' => array(
          'title' => 'No UID Title',
        ),
        'uid' => '',
      ),
    );

    $expectedResult = array(
      array(
        'title' => 'Riddle 1',
        'uid' => '1',
      ),
      array(
        'title' => 'Defined Title',
        'uid' => '2',
      ),
    );

    return array(
      array(array(), array()),
      array($riddleFeed, $expectedResult),
    );
  }

}
