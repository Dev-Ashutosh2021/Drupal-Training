<?php

namespace Drupal\basic_page\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class RegistrationForm extends FormBase
{

  public function getFormId()
  {
    return 'employee_registration_form';
  }


  // Build form
  public function buildForm(array $form, FormStateInterface $form_state)
  {
    $form['employee_name'] = array(
      '#type' => 'textfield',
      '#title' => t('Enter Full Name:'),
      '#required' => TRUE,
    );
    $form['employee_id'] = array(
      '#type' => 'textfield',
      '#title' => t('Enter Employee ID:'),
      '#required' => TRUE,
    );
    $form['employee_email'] = array(
      '#type' => 'email',
      '#title' => t('Enter Email ID:'),
      '#required' => TRUE,
    );
    $form['employee_phone'] = array(
      '#type' => 'tel',
      '#title' => t('Enter Contact Number:'),
    );
    $form['employee_dob'] = array(
      '#type' => 'date',
      '#title' => t('Enter Date of Birth:'),
      '#required' => TRUE,
    );
    $form['employee_gender'] = array(
      '#type' => 'select',
      '#title' => t('Select Gender:'),
      '#options' => array(
        'Male' => t('Male'),
        'Female' => t('Female'),
        'Other' => t('Other'),
      ),
    );
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Register'),
      '#button_type' => 'primary',
    );
    return $form;
  }


  //Validation
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if(strlen($form_state->getValue('employee_id')) < 8) {
      $form_state->setErrorByName('employee_id', $this->t('Please enter a valid Employee ID'));
    }
    if(strlen($form_state->getValue('employee_phone')) < 10) {
      $form_state->setErrorByName('employee_phone', $this->t('Please enter a valid Contact Number'));
    }
  }
  

  //Form submit
  public function submitForm(array &$form, FormStateInterface $form_state) {

    $values = $form_state->getValues();
  
    $connection = \Drupal::database();
    $query = $connection->insert('employee_registration')
      ->fields([
        'employee_name' => $values['employee_name'],
        'employee_id' => $values['employee_id'],
        'employee_email' => $values['employee_email'],
        'employee_phone' => $values['employee_phone'],
        'employee_dob' => $values['employee_dob'],
        'employee_gender' => $values['employee_gender'],
      ]);
    $query->execute();
  
    // Display a success message.
    \Drupal::messenger()->addMessage($this->t('Employee Registration Done!'));
  
  }

}
