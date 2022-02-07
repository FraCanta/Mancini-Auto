<?php


function mancini_auto_support() {
	add_theme_support('title-tag');
}

add_action('after_setup_theme', 'mancini_auto_support');

function mancini_auto_menus(){

	$location = array(
		'primary' => "Desktop Primary Menu"
	);

	register_nav_menus($location);

}

add_action('init', 'mancini_auto_menus');


 function mancini_auto_styles(){
   $version = wp_get_theme()->get('Version');
   wp_enqueue_style('mancini_auto-style', get_template_directory_uri() ."/style.css", array('mancini_auto-bootstrap'), $version, 'all');
   wp_enqueue_style('mancini_auto-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), '5.1.3', 'all');
   wp_enqueue_style('mancini_auto-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css", array(), '5.15.4', 'all');

 }

 add_action('wp_enqueue_scripts', 'mancini_auto_styles' );


 function mancini_auto_scripts(){

	 wp_enqueue_script('mancini_auto-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js', array(), '2.10.2', true);
	 wp_enqueue_script('mancini_auto-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array(), '5.1.3', true);
	 wp_enqueue_script('mancini_auto-js', get_template_directory_uri()."/assets/js/main.js", array(), '1.0', true);

 }

 add_action('wp_enqueue_scripts', 'mancini_auto_scripts');

?>
