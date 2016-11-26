<?php

namespace Drupal\user_config_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class UserConfigForm.
 *
 * @package Drupal\user_config_form\Form
 */
class UserConfigForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'user_config_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['nume_utilizator'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Nume utilizator'),
      '#description' => $this->t('Numele pe care alți utilizatori îl citesc'),
      '#maxlength' => 80,
      '#size' => 64,
    ];
    $form['email_cont'] = [
      '#type' => 'email',
      '#title' => $this->t('Email cont'),
      '#description' => $this->t('Email-ul de contact'),
    ];
    $form['numar_r_de_telefon_op_ional'] = [
      '#type' => 'tel',
      '#title' => $this->t('Numarăr de telefon (opțional)'),
    ];
    $form['poza_de_profil'] = [
      '#type' => 'file',
      '#title' => $this->t('Poză de profil'),
    ];
    $form['parola_curent_n_cazul_n_care_se_'] = [
      '#type' => 'password',
      '#title' => $this->t('Parola curentă ( În cazul în care se dorește schimbarea parolei )'),
      '#maxlength' => 100,
      '#size' => 100,
    ];
    $form['parola_nou'] = [
      '#type' => 'password_confirm',
      '#title' => $this->t('Parola nouă'),
      '#maxlength' => 64,
      '#size' => 64,
    ];
    $form['doresc_s_primesc_mail_uri_noi_c_'] = [
      '#type' => 'radio',
      '#title' => $this->t('Doresc să primesc mail-uri noi când se postează un anunț de tipul &quot;gaăsit&quot; de la mine din oraș'),
    ];
    $form['ora'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Oraș'),
      '#maxlength' => 100,
      '#size' => 100,
    ];
    $form['actualizeaz_profil'] = [
      '#type' => 'submit',
      '#title' => $this->t('Actualizează profil'),
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
