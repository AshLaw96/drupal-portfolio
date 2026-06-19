<?php

namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an Endorsements / Testimonials Block.
 *
 * @Block(
 *   id = "hello_world_testimonials",
 *   admin_label = @Translation("LinkedIn Testimonials Showcase Component"),
 *   category = @Translation("Custom Portfolio")
 * )
 */
class TestimonialsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $endorsements = [
      [
        'context' => 'React Advent Calendar Review',
        'text' => 'It\'s AMAXING Ashley - thank you for supporting SVP 👏👏👏',
        'author' => 'Sheena Eastwood',
        'role' => 'Head of Community Support Projects',
        'initials' => 'SE',
      ],
      [
        'context' => 'Full Stack Software Development Diploma Achievement',
        'text' => 'Well done, Ashley! What an achievement!',
        'author' => 'Jaime Hyland',
        'role' => 'Full-Stack Developer peer via LinkedIn',
        'initials' => 'JH',
      ],
      [
        'context' => 'Python portfolio project review',
        'text' => 'Great project, well done Ashley Lawrence 👏',
        'author' => 'Matt Rudge',
        'role' => 'Senior Product Developer',
        'initials' => 'MR',
      ],
      [
        'context' => 'First portfolio project review',
        'text' => 'your commitment to excellence and continuous improvement in web development is truly commendable.',
        'author' => 'Oleksandr Khudoteplyi',
        'role' => 'Tech Company Co-Founder and COO',
        'initials' => 'OK',
      ],
      [
        'context' => 'Hackathon first badge Achievement',
        'text' => 'Amazing work team Axis of Access - such a great concept & incredible execution',
        'author' => 'Megan Lawrence',
        'role' => 'Marketing and Communications Expert',
        'initials' => 'ML',
      ],
    ];

    return [
      '#theme' => 'testimonials',
      '#endorsements' => $endorsements,
    ];
  }

}
