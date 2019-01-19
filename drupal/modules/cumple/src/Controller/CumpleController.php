<?php
/**
 * @file
 * Contains \Drupal\cumple\Controller\CumpleController.
 */
 
namespace Drupal\cumple\Controller;
 
use Drupal\Core\Controller\ControllerBase;
 
class CumpleController extends ControllerBase {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('es tu cumpleaños'),
    );
  }
}