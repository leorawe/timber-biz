<?php
/**
 * Timber Biz based on Timber starter-theme
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


	/**
	 * Register widget area.
	 *
	 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
	 */
	
	function timber_biz_widgets_init() {
		register_sidebar( array(
			'name'          => __( 'Timber Biz Sidebar', 'timber_biz' ),
			'id'            => 'sidebar-1',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
		register_sidebar( array(
			'name'          => __( 'Timber Biz Footer Widgets', 'timber_biz' ),
			'id'            => 'footer-widgets',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}

	add_action( 'widgets_init', 'timber_biz_widgets_init' );

	add_theme_support( 'customize-selective-refresh-widgets' ); 

new StarterSite();
