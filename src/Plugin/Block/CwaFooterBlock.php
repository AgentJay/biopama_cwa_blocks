<?php

/**
 * @file
 */
namespace Drupal\biopama_cwa_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;

/**
 * Creates a CWA Footer Block
 * @Block(
 * id = "block_cwa_footer",
 * admin_label = @Translation("CWA Footer block"),
 * )
 */
class CwaFooterBlock extends BlockBase implements BlockPluginInterface{

    /**
     * {@inheritdoc}
     */
    public function build() {
        return array (
			'#theme' => 'cwa_footer',
        );
    }

}