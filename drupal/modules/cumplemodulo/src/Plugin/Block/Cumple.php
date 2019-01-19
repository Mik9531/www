<?php
/**
 * @file
 * Contains \Drupal\cumplemodulo\Plugin\Block\Cumple.
 */
 
namespace Drupal\cumplemodulo\Plugin\Block;
use Drupal\Core\Block\BlockBase;
 
/**
 * Provides a 'Cumple' Block
 *
 * @Block(
 *   id = "cumple",
 *   admin_label = @Translation("cumple"),
 * )
 */
class Cumple extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t('Hoy no es tu cumpleaños'),
    );
  }
 
}