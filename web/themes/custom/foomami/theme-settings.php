<?php

use \Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_alter().
 */
function foomami_form_system_theme_settings_alter(&$form, FormStateInterface $form_state) {

  // Create a collapsible details element that wraps our settings.
  $form['foomami_settings'] = [
    '#type' => 'details',
    '#title' => t('Foomami Specific Settings'),
    '#open' => true,
  ];
}
