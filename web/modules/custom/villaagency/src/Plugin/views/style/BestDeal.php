<?php

declare(strict_types=1);

namespace Drupal\villaagency\Plugin\views\style;

use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\views\Attribute\ViewsStyle;
use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * Best Deal style plugin.
 */
#[ViewsStyle(
  id: 'best_deal',
  title: new TranslatableMarkup('Best Deal'),
  help: new TranslatableMarkup('@todo Add help text here.'),
  theme: 'views_style_best_deal',
  display_types: ['normal'],
)]
final class BestDeal extends StylePluginBase {

  /**
   * {@inheritdoc}
   */
  protected $usesRowPlugin = TRUE;

  /**
   * {@inheritdoc}
   */
  protected $usesRowClass = TRUE;

}
