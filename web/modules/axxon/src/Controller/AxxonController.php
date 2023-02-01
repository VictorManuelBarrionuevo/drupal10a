<?php

namespace Drupal\axxon\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for axxon routes.
 */
class AxxonController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $config = \Drupal::config('axxon.settings');
    return [
      '#theme' => 'axxon_example',
      '#variable1' => $config->get('text'),
      '#variable2' => $config->get('integer'),
    ];
  }

}
