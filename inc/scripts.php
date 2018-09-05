<?php
function bhn_mobile_scripts() {
	wp_enqueue_style( 'bhn-mobile-style', get_stylesheet_directory_uri() . '/assets/css/mobile-styles.css', null,  filemtime( get_stylesheet_directory().'/assets/css/mobile-styles.css' ), 'screen'  );
	
	//Scripts
	wp_enqueue_script( 'bhn-mobile-script', get_stylesheet_directory_uri() . '/assets/js/mobile-functions-min.js', array( 'jquery-slim' ), filemtime( get_stylesheet_directory().'/assets/js/mobile-functions-min.js' ), true );
}
add_action( 'wp_enqueue_scripts', 'bhn_mobile_scripts' );	
?>