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

    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello, World!'),
    ];
  }

}
