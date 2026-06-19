<?php

namespace Drupal\hello_world\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Defines a configuration form for the hello_world module settings.
 */
class SettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'hello_world_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['hello_world.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    // Load existing saved configuration values (fallback to defaults if empty).
    $config = $this->config('hello_world.settings');

    $form['card_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Card Headline Title'),
      '#default_value' => $config->get('card_title') ?? 'Hello World!',
      '#description' => $this->t('Enter the main heading to display on the Tailwind component.'),
      '#required' => TRUE,
    ];

    $form['custom_message'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Card Sub-text Body'),
      '#default_value' => $config->get('custom_message') ?? 'This component is powered by a clean Twig template!',
      '#description' => $this->t('Enter the dynamic body copy to show beneath the title.'),
      '#required' => TRUE,
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    /* Save the submitted form values back into the immutable
     * configuration storage.
     */
    $this->config('hello_world.settings')
      ->set('card_title', $form_state->getValue('card_title'))
      ->set('custom_message', $form_state->getValue('custom_message'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}
