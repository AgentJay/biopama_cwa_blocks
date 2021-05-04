<?php
namespace Drupal\biopama_cwa_blocks\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the biopama_klc_ecoregion module.
 */
class CwaHomepageController extends ControllerBase {
  public function content() {
    $element = array(
	  '#theme' => 'cwa_homepage',
    );
    return $element;
  }
}