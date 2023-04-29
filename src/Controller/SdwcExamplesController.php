<?php

namespace Drupal\sdwc_examples\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for sdwc_examples routes.
 */
class SdwcExamplesController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'component',
      '#component' => 'sdwc_examples:hello-component',
    ];

    return $build;
  }

}
