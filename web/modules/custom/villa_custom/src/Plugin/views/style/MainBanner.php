<?php

namespace Drupal\villa_custom\Plugin\views\style;

use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * Main Banner style plugin.
 *
 * @ViewsStyle(
 * id = "villa_custom_main_banner",
 * title = @Translation("Main Banner"),
 * help = @Translation("Style plugin for the VillaAgency main slider."),
 * theme = "views_style_villa_custom_main_banner",
 * display_types = {"normal"}
 * )
 */
final class MainBanner extends StylePluginBase {

  /**
   * {@inheritdoc}
   */
  protected $usesRowPlugin = TRUE;

  /**
   * {@inheritdoc}
   */
  protected $usesRowClass = TRUE;

}