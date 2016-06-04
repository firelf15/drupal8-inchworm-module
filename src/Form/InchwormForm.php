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
      '#type' => 'textfield',
      '#title' => $this->t('Pick a number, any number.')
    );
    $form['second_number'] = array(
      '#type' => 'textfield',
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
    if (!is_numeric($form_state->getValue('first_number'))) {
      $form_state->setErrorByName('first_number', $this->t("Something has gone horribly wrong with your number picking or my code writing. I hope it's you. Please try again with your first number."));
    }
    if (!is_numeric($form_state->getValue('second_number'))) {
      $form_state->setErrorByName('second_number', $this->t("Something has gone awry. It's not me. It's you. I hope. Please try again with your second number."));
    }
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Display result.
    $one = $form_state->getValue('first_number');
    $two = $form_state->getValue('second_number');
    drupal_set_message($one + $two);
  }
}