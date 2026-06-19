<?php

namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Tech Tracker' Block.
 *
 * @Block(
 *   id = "hello_world_tech_tracker",
 *   admin_label = @Translation("Tech Stack Tracker Component"),
 *   category = @Translation("Custom Portfolio")
 * )
 */
class TechTrackerBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // Categorized skills payload directly mapped from your full CV.
    $categories = [
      'frontend' => [
        'title' => 'Frontend & Design',
        'items' => [
          [
            'name' => 'React & JavaScript',
            'desc' => 'Component architecture, state management and ES6+ dynamic interactivity.',
            'icon' => '<path d="M3 3v18h18V3H3zm13.5 14c0 1-.8 1.5-2 1.5s-2-.7-2-1.5h1.7c0 .4.2.6.4.6s.4-.2.4-.6v-4h1.5v4zm2.7 0c0 1-.8 1.5-2 1.5s-2-.7-2-1.5h1.7c0 .4.2.6.4.6s.4-.2.4-.6v-.7H16V14h1.5v.7h1.7V14h1.5v3z"/>',
          ],
          [
            'name' => 'TypeScript',
            'desc' => 'Strict type safety, robust application structuring and scalable codebases.',
            'icon' => '<path d="M3 3v18h18V3H3zm11.2 14.2h-1.6v-5.4H11v-1.3h3.5v6.7zm4.3-1.6c0 1.1-.9 1.6-2.1 1.6-1.1 0-2-.5-2-1.6h1.5c0 .4.2.6.5.6.3 0 .5-.2.5-.6v-.6h-1v-1.1h1v-.6c0-.4-.2-.6-.5-.6-.3 0-.5.2-.5.6h-1.5c0-1.1.9-1.6 2.1-1.6 1.1 0 2.1.5 2.1 1.6v2.3z"/>',
          ],
          [
            'name' => 'Tailwind CSS',
            'desc' => 'Utility-first styling, rapid UI prototyping and responsive layouts.',
            'icon' => '<path d="M12 6.5c-2.3 0-3.9 1.2-4.7 3.5 1-.6 2.1-.8 3.3-.4.7.2 1.2.7 1.7 1.2.9.9 2 2 4.3 2 2.3 0 3.9-1.2 4.7-3.5-1 .6-2.1.8-3.3.4-.7-.2-1.2-.7-1.7-1.2-.9-.9-2-2-4.3-2zM4.3 14c-2.3 0-3.9 1.2-4.7 3.5 1-.6 2.1-.8 3.3-.4.7.2 1.2.7 1.7 1.2.9.9 2 2 4.3 2 2.3 0 3.9-1.2 4.7-3.5-1 .6-2.1.8-3.3.4-.7-.2-1.2-.7-1.7-1.2-.9-.9-2-2-4.3-2z"/>',
          ],
          [
            'name' => 'HTML5, CSS3 & SEO',
            'desc' => 'Semantic architecture, modern layouts, accessibility and high search visibility.',
            'icon' => '<path d="M5 2l1.3 16.3L12 22l5.7-3.7L19 2H5zm11.3 6H8.9l.2 2.2h7.1l-.5 5.3-3.7 2.4-3.7-2.4-.2-2.7h2.2l.1 1.3 1.6 1.1 1.6-1.1.2-2H8.4L7.8 6h10.8l-.3 2z"/>',
          ],
        ],
      ],
      'backend' => [
        'title' => 'Backend & Databases',
        'items' => [
          [
            'name' => 'Python & Django',
            'desc' => 'Scalable enterprise MVC engines, robust routing and advanced secure ORMs.',
            'icon' => '<path d="M12 2A10 10 0 002 12a10 10 0 0010 10 10 10 0 0010-10A10 10 0 0012 2zm-1.8 1.6c.6 0 1 .4 1 1v2.2h2.5c1.4 0 2.5 1.1 2.5 2.5v1.3c0 .6-.4 1-1 1h-5c-.6 0-1-.4-1-1V7.7H7.7c-.6 0-1-.4-1-1v-2c0-1.2 1-2.1 2.2-2.1h1.3zm3.6 13.6c0 1.2-1 2.2-2.2 2.2H10c-.6 0-1-.4-1-1v-2.2H6.5c-1.4 0-2.5-1.1-2.5-2.5V12c0-.6.4-1 1-1h5c.6 0 1 .4 1 1v2.5h2.5c.6 0 1 .4 1 1v2.1z"/>',
          ],
          [
            'name' => 'Drupal 10+ & PHP',
            'desc' => 'Custom modules, hooks, database token abstraction and custom plugins.',
            'icon' => '<path d="M12 2s-8 5.3-8 11.5c0 4.7 3.6 8.5 8 8.5s8-3.8 8-8.5C20 7.3 12 2 12 2zm0 15c-1.7 0-3-1.3-3-3s2.3-5 3-5 3 3.3 3 5-1.3 3-3 3z"/>',
          ],
          [
            'name' => 'Node.js',
            'desc' => 'High-concurrency server environments, package integrations and backend tooling.',
            'icon' => '<path d="M12 2L2 6.5v11L12 22l10-4.5v-11L12 2zm0 3.3l6.5 2.9-2.5 1.1L9.5 6.4 12 5.3zm-7.5 3l6.5-2.9v5.9l-6.5 2.9V8.3zm7.5 10.4l-6.5-2.9v-2.3l6.5 2.9v2.3zm8.5-4.5l-6.5 2.9v-2.3l6.5-2.9v2.3zm0-3.6l-6.5 2.9V7.7l6.5-2.9v3.6z"/>',
          ],
          [
            'name' => 'REST APIs & Postgres',
            'desc' => 'Django REST Framework, JSON handling, strict relational tables and secure Auth.',
            'icon' => '<path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm3.6 13.2h-1.3v-2.3H9.7v2.3H8.4V8.8h1.3v2.9h4.6V8.8h1.3v6.4z"/>',
          ],
        ],
      ],
      'tools' => [
        'title' => 'DevOps & Tooling',
        'items' => [
          [
            'name' => 'Git & GitHub Workflow',
            'desc' => 'Atomic branching, team repositories, conflict debugging and version histories.',
            'icon' => '<path d="M12 2A10 10 0 003 12c0 4.4 2.9 8.2 6.8 9.5.5.1.7-.2.7-.5V19c-2.8.6-3.4-1.4-3.4-1.4-.5-1.2-1.1-1.5-1.1-1.5-.9-.6.1-.6.1-.6 1 .1 1.5 1 1.5 1 .9 1.5 2.3 1 2.9.8.1-.6.4-1 .6-1.3-2.2-.3-4.6-1.1-4.6-5 0-1.1.4-2 1-2.7-.1-.3-.4-1.3.1-2.7 0 0 .9-.3 2.8 1a10 10 0 015.3 0c1.9-1.3 2.8-1 2.8-1 .5 1.4.2 2.4.1 2.7.6.7 1 1.6 1 2.7 0 3.8-2.3 4.6-4.6 4.9.4.3.7.9.7 1.9v2.8c0 .3.2.6.7.5A10 10 0 0022 12A10 10 0 0012 2z"/>',
          ],
          [
            'name' => 'DDEV, Docker & Composer',
            'desc' => 'Containerised isolated local stacks and advanced system dependency maps.',
            'icon' => '<path d="M13.9 11h2.4c.1 0 .2-.1.2-.2V8.4c0-.1-.1-.2-.2-.2h-2.4c-.1 0-.2.1-.2.2v2.4c0 .1.1.2.2.2zM11 11h2.4c.1 0 .2-.1.2-.2V8.4c0-.1-.1-.2-.2-.2H11c-.1 0-.2.1-.2.2v2.4c0 .1.1.2.2.2zM8.1 11h2.4c.1 0 .2-.1.2-.2V8.4c0-.1-.1-.2-.2-.2H8.1c-.1 0-.2.1-.2.2v2.4c0 .1.1.2.2.2zm5.8-2.9h2.4c.1 0 .2-.1.2-.2V5.5c0-.1-.1-.2-.2-.2h-2.4c-.1 0-.2.1-.2.2v2.4c0 .1.1.2.2.2zM2 12.3v1c0 3.6 3.7 6.5 8.2 6.5s8.2-2.9 8.2-6.5v-1H2zm19.8-1.7c-.3-1-1.1-1.8-2.1-2l-.5-.1v1c0 1 .4 1.9 1 2.6l.4.4.4-.4c.5-.7.8-1.5.8-2.5z"/>',
          ],
          [
            'name' => 'AWS, Heroku & Render',
            'desc' => 'Cloud environments, asset pipelines, serverless logic and production deployments.',
            'icon' => '<path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM19 18H6c-2.21 0-4-1.79-4-4 0-2.05 1.53-3.76 3.56-3.97l1.07-.11.5-.95C8.08 7.14 9.94 6 12 6c2.62 0 4.88 1.86 5.39 4.43l.3 1.5 1.53.11c1.56.1 2.78 1.41 2.78 2.96 0 1.65-1.35 3-3 3z"/>',
          ],
          [
            'name' => 'Agile, Trello & Testing',
            'desc' => 'Sprints, task board tracking, multi-browser debugging and quality testing.',
            'icon' => '<path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/>',
          ],
        ],
      ],
    ];

    // Put SVG wrappers directly into flat HTML strings for Twig loop safety.
    foreach ($categories as $key => $category) {
      foreach ($category['items'] as $item_key => $item) {
        if (!empty($item['icon'])) {
          $full_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-full h-full block">' . $item['icon'] . '</svg>';
          $categories[$key]['items'][$item_key]['icon'] = $full_svg;
        }
      }
    }

    return [
      '#theme' => 'tech_tracker',
      '#headline' => 'My Technical Ecosystem',
      '#categories' => $categories,
    ];
  }

}
