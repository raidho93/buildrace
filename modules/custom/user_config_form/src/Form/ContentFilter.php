<?php

namespace Drupal\user_config_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ContentFilter.
 *
 * @package Drupal\user_config_form\Form
 */
class ContentFilter extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'content_filter';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['datelist'] = [
      '#type' => 'datelist',
      '#title' => $this->t('datelist'),
    ];
    $form['datelist2'] = [
      '#type' => 'datelist',
      '#title' => $this->t('datelist2'),
    ];
    $form['date'] = [
      '#type' => 'date',
      '#title' => $this->t('date'),
    ];
    $form['number'] = [
      '#type' => 'number',
      '#title' => $this->t('number'),
    ];
    $form['range'] = [
      '#type' => 'range',
      '#title' => $this->t('range'),
    ];
    $form['select'] = [
      '#type' => 'select',
      '#title' => $this->t('select'),
      '#options' => array('ana' => $this->t('ana'), 'mere' => $this->t('mere'), 'pere' => $this->t('pere'), 'gigi' => $this->t('gigi'), 'altex' => $this->t('altex')),
      '#size' => 5,
    ];
    $form['dropdown'] = [
      '#type' => 'dropdown',
      '#title' => $this->t('dropdown'),
    ];
    $form['fieldset'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('fieldset'),
    ];
    $form['fieldset']['checkboxes'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t('checkboxes'),
      '#options' => array('1' => $this->t('1'), '2' => $this->t('2'), '3' => $this->t('3'), '4' => $this->t('4'), '5' => $this->t('5')),
    ];
    $form['fieldset']['apasa'] = [
      '#type' => 'button',
      '#title' => $this->t('apasa'),
      '#description' => $this->t('laa'),
    ];

    $form['submit'] = [
        '#type' => 'submit',
        '#value' => t('Submit'),
    ];

    return $form;
  }

  /**
    * {@inheritdoc}
    */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Display result.
    foreach ($form_state->getValues() as $key => $value) {
        drupal_set_message($key . ': ' . $value);
    }

  }

}
