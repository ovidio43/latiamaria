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
if ( ! function_exists( 'twentythirteen_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_paging_nav() {
  global $wp_query;

  // Don't print empty markup if there's only one page.
  if ( $wp_query->max_num_pages < 2 )
    return;
  ?>
  <nav class="navigation paging-navigation" role="navigation">
    <div class="nav-links">
      <?php if ( get_next_posts_link() ) : ?>
      <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Atras', 'twentythirteen' ) ); ?></div>
      <?php endif; ?>

      <?php if ( get_previous_posts_link() ) : ?>
      <div class="nav-next"><?php previous_posts_link( __( 'siguiente <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?></div>
      <?php endif; ?>

    </div><!-- .nav-links -->
  </nav><!-- .navigation -->
  <?php
}
endif;