#!/usr/bin/env bash
set -x

# Install Drupal Umami
ddev composer install
ddev drush si demo_umami -y
