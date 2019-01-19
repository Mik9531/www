<?php
/**
 * @file
 * Contains \Drupal\cumpledrupal\Plugin\Block\CumpleBlock.
 */
 
namespace Drupal\cumpledrupal\Plugin\Block;
use Drupal\Core\Block\BlockBase;
 
/**
 * Provides a 'Cumple' Block
 *
 * @Block(
 *   id = "cumple_block",
 *   admin_label = @Translation("Cumple"),
 * )
 */
class CumpleBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t('Hoy no es tu cumpleaños'),
    );
  }
 
}