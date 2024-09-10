<?php
/**
 * Skin file for skin Aurora.
 *
 * @file
 * @ingroup Skins
 */

class SkinAurora extends SkinTemplate {
    public $skinname = 'aurora';
    public $stylename = 'aurora';
    public $template = 'AuroraTemplate'; // El archivo de template que utilizará
    public $useHeadElement = true;

    /**
     * Initialize output page and set up skin-specific parameters.
     * @param OutputPage $out
     */
    public function initPage( OutputPage $out ) {
        parent::initPage( $out );
        // Aquí puedes cargar recursos adicionales
        $out->addModuleStyles( 'skins.aurora.styles' ); // Agrega el CSS principal
    }

    /**
     * Prepare the QuickTemplate.
     * @param array $tpl
     */
    public function setupTemplate( $tpl ) {
        return new AuroraTemplate();
    }
}
