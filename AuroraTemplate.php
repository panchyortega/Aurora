<?php
/**
 * Template file for skin Aurora.
 *
 * @file
 * @ingroup Skins
 */

class AuroraTemplate extends BaseTemplate {

    /**
     * Outputs the entire contents of the page.
     */
    public function execute() {
        // Outputs the HTML structure for the skin
        $this->html( 'headelement' );
        ?>
        <div id="page">
            <header id="top-header">
                <nav id="top-nav">
                    <!-- Barra de navegación -->
                    <ul>
                        <li><a href="/">Inicio</a></li>
                        <li><a href="/about">Acerca de</a></li>
                        <li><a href="/contact">Contacto</a></li>
                    </ul>
                </nav>
            </header>

            <div id="content-wrapper">
                <!-- Barra lateral -->
                <aside id="sidebar">
                    <?php $this->renderNavigation( array( 'TOC' ) ); ?>
                </aside>

                <!-- Contenido principal -->
                <main id="main-content">
                    <h1><?php $this->html( 'title' ); ?></h1>
                    <?php $this->html( 'bodytext' ); ?>
                </main>
            </div>

            <footer id="footer">
                <p>&copy; 2024 Casiopea Wiki - Todos los derechos reservados.</p>
            </footer>
        </div>

        <?php
        $this->printTrail();
        echo Html::closeElement( 'body' );
        echo Html::closeElement( 'html' );
    }
}
