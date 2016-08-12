<?php
function cals_2016_scripts() {	
	wp_enqueue_style( 'cals_2016-mainstyles', get_stylesheet_directory_uri().'/dist/styles/master.min.css' );
	
}

add_action( 'wp_enqueue_scripts', 'cals_2016_scripts' );
