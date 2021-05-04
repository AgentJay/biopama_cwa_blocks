<?php

/**
 * @file
 */
namespace Drupal\biopama_cwa_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;

/**
 * Creates a CWA Header Block
 * @Block(
 * id = "cwa_caribbean_header",
 * admin_label = @Translation("CWA Header block"),
 * )
 */
class CwaHeaderBlock extends BlockBase implements BlockPluginInterface{

    /**
     * {@inheritdoc}
     */
    public function build() {
        return array (
			'#theme' => 'cwa_header',
        );
    }

}