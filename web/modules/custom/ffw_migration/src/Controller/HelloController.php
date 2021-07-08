<?php

namespace Drupal\ffw_migration\Controller;

/**
 * Returns custom content for routes.
 */
class HelloController {

  /**
   * The content render.
   *
   * @return array
   *   Returns the message.
   */
  public function content(): array {
    // Returns the custom string.
    return [
      '#type' => 'markup',
      '#markup' => t('Hello, world!!!!'),
    ];
  }

}
