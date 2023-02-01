<?php

namespace Drupal\axxon\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure axxon settings for this site.
 */
class SettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'axxon_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['axxon.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['text'] = [
      '#type' => 'text_format',
      '#title' => $this->t('Text field'),
      '#default_value' => $this->config('axxon.settings')->get('text'),
    ];

    $form['integer'] = [
      '#type' => 'number',
      '#title' => $this->t('Integer field'),
      '#default_value' => $this->config('axxon.settings')->get('integer'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('axxon.settings')->set('text', $form_state->getValue('text')['value'])->save();
    $this->config('axxon.settings')->set('integer', $form_state->getValue('integer'))->save();
    parent::submitForm($form, $form_state);
  }
}
