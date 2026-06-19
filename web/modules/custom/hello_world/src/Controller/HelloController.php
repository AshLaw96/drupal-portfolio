<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines HelloController class with Tailwind CSS utility styling via Twig.
 */
class HelloController extends ControllerBase {

  /**
   * Returns a template-rendered Tailwind component block.
   */
  public function viewPage($name) {
    // Fetch the values from the module configuration store.
    $config = $this->config('hello_world.settings');
    $headline = $config->get('card_title') ?? 'Hi, I\'m @username';
    $body_text = $config->get('custom_message');

    // Replace token placeholders with the actual dynamic URL name string.
    $final_headline = str_replace('@username', ucfirst($name), $headline);

    return [
      '#theme' => 'hello_card',
      '#name' => $final_headline,
      '#message' => $body_text,
      '#attached' => [
        'library' => [
          'hello_world/tailwind_style',
        ],
      ],
    ];
  }

}
