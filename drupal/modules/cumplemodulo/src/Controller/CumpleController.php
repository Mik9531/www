<?php
/**
 * @file
 * Contains \Drupal\cumple\Controller\CumpleController.
 */
 
namespace Drupal\cumplemodulo\Controller;
 
use Drupal\Core\Controller\ControllerBase;
 
class CumpleController extends ControllerBase {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hoy no es tu cumpleaños. Quedan 364 días'),
    );
  }
}