<?php

use \Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_alter().
 */
function foomami_form_system_theme_settings_alter(&$form, FormStateInterface $form_state) {

  // Attach our the foomami theme-settings library
  $form['#attached']['library'][] = 'foomami/theme_settings';

  // Create a collapsible details element that wraps our settings.
  $form['foomami_settings'] = [
    '#type' => 'details',
    '#title' => t('Foomami Specific Settings'),
    '#open' => true,
  ];

  // Create a text input field
  $form['foomami_settings']['primary_color'] = [
    '#type' => 'textfield',
    '#maxlength' => 7,
    '#size' => 10,
    '#title' => t('Primary Color'),
    '#description' => t("Enter color in full hexadecimal format (#abc123).<br/>
      Derivatives will be formed from this color."),
    '#default_value' => theme_get_setting('primary_color'),
    '#attributes' => [
      'pattern' => '^#[a-fA-F0-9]{6}',
    ],
    '#wrapper_attributes' => [
      'data-drupal-selector' => 'foomami-color-picker',
    ],
  ];
}
