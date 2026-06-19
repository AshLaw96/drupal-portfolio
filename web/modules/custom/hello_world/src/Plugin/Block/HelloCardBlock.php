<?php

namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Config\ConfigFactoryInterface;

/**
 * Provides a 'Hello World Tailwind Card' Block.
 *
 * @Block(
 * id = "hello_world_card_block",
 * admin_label = @Translation("Hello World Tailwind Card"),
 * category = @Translation("Custom Components")
 * )
 */
class HelloCardBlock extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * The config factory service.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * Constructs a new HelloCardBlock instance.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, ConfigFactoryInterface $config_factory) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->configFactory = $config_factory;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('config.factory')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    // Pull the real-time saved settings from your Admin Settings Form.
    $config = $this->configFactory->get('hello_world.settings');
    $title = $config->get('card_title') ?? 'Building digital experiences.';
    $message = $config->get('custom_message') ?? '';

    // Clean up our token fallback since blocks don't read the URL string.
    $final_title = str_replace('@username', 'Passionate Developer', $title);

    // Render our existing Twig template wrapper.
    return [
      '#theme' => 'hello_card',
      '#name' => $final_title,
      '#message' => $message,
      '#attached' => [
        'library' => [
          'hello_world/tailwind_style',
        ],
      ],
    ];
  }

}
