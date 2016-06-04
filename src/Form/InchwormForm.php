<?php

namespace Drupal\inchworm\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class InchwormForm extends FormBase {
  public function getFormId() {
    // Unique ID of the form.
    return 'inchworm_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    // Create a $form API array.
    $form['first_number'] = array(
      '#type' => 'number',
      '#title' => $this->t('Pick a number, any number.')
    );
    $form['second_number'] = array(
      '#type' => 'number',
      '#title' => $this->t('Pick a number, another number.')
    );
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => 'Do Maths',
    );
    return $form;
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {
    // Validate submitted form data.
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Handle submitted form data.
  }
}