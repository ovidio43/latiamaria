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
  'before_widget' => '<div class="list-product">',
  'after_widget' => '</div>',
  'before_title' => '<h1>',
  'after_title' => '</h1>',
  ));      
}
add_action( 'init', 'custom_widgets_init' );
function custom_wp_title($title, $sep) {
    global $paged, $page;
    if (is_feed())
        return $title;
    $title .= get_bloginfo('name');
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && ( is_home() || is_front_page() ))
        $title = "$title $sep $site_description";
    if ($paged >= 2 || $page >= 2)
        $title = "$title $sep " . sprintf(__('Page %s', 'moe.'), max($paged, $page));
    return $title;
}

add_filter('wp_title', 'custom_wp_title', 10, 2);