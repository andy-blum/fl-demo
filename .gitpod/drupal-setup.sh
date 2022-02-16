#!/usr/bin/env bash
set -x

# Install Drupal Umami
ddev composer install
ddev drush si -y --account-pass=admin --site-name="FLDC-demo"

# Set foomami as default theme
ddev drush then -y foomami
ddev drush config-set -y system.theme default foomami

# Claro admin theme
ddev drush then -y claro
ddev drush config-set -y system.theme admin claro
