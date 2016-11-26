<?php

namespace Drupal\user_config_form\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'contentFilter' block.
 *
 * @Block(
 *  id = "content_filter",
 *  admin_label = @Translation("Content filter"),
 * )
 */
class contentFilter extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
         'selecteaza_orasul' => $this->t('Selecteaza orasul'),
         'filtreaza_dupa_data' => $this->t('Filtreaza dupa data'),
         'marja_a_numarului_de_zile_de_la_' => $this->t('Marja a zilelor'),
        ] + parent::defaultConfiguration();

 }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['filtreaza_dupa_data'] = [
      '#type' => 'date',
      '#title' => $this->t('Filtreaza dupa data'),
      '#description' => $this->t(''),
      '#default_value' => $this->configuration['filtreaza_dupa_data'],
      '#weight' => '0',
    ];

    $build['marja_a_numarului_de_zile_de_la_'] = [
      '#type' => 'range',
      '#title' => $this->t('Marja +/- a numarului de zile de la data selectata'),
      '#description' => $this->t(''),
      '#default_value' => 0,
      '#weight' => '0',
      '#min' => 0,
      '#max' => 14,
      '#step' => 1,
    ];

     $build['label'] = [
	'#type' => 'label',
	'#title' => $this->configuration['marja_a_numarului_de_zile_de_la_']. 'zile',
	];
    
    $build['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Filtreaza'),
     );

    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['selecteaza_orasul'] = $form_state->getValue('selecteaza_orasul');
    $this->configuration['filtreaza_dupa_data'] = $form_state->getValue('filtreaza_dupa_data');
    $this->configuration['marja_a_numarului_de_zile_de_la_'] = $form_state->getValue('marja_a_numarului_de_zile_de_la_');
  }

}
