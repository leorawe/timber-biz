<?php
/**
 * Timber starter-theme
 * https://github.com/timber/starter-theme
 */

// Load Composer dependencies.
require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/src/StarterSite.php';

Timber\Timber::init();

// Sets the directories (inside your theme) to find .twig files.
Timber::$dirname = [ 'templates', 'views' ];

/**
 * Enqueue a script
 */
function timber_biz_enqueue_scripts() {
	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), true );
}
add_action( 'wp_enqueue_scripts', 'timber_biz_enqueue_scripts' );

new StarterSite();
