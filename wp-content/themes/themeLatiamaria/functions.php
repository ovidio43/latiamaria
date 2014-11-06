<?php
require_once(get_template_directory() . '/lib/post-type.php');
add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
	'primary'   => __( 'Primary nav', 'latiaMaria' ),
    'social'   => __( 'Social nav', 'latiaMaria' )
) );
function custom_widgets_init() {
  register_sidebar (array(
  'name' => __( 'main sidebar', 'latiaMaria' ),
  'id' => 'main_sidebar',
  'before_widget' => '<div>',
  'after_widget' => '</div>',
  'before_title' => '',
  'after_title' => '',
  ));      
}
add_action( 'init', 'custom_widgets_init' );