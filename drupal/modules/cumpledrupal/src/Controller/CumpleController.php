<?php
/**
 * @file
 * Contains \Drupal\cumpledrupal\Controller\CumpleController.
 */
 
namespace Drupal\cumpledrupal\Controller;
 
use Drupal\Core\Controller\ControllerBase;
 
class CumpleController extends ControllerBase {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hoy no es tu cumpleaños, faltan 364 dias'),
    );
  }
}