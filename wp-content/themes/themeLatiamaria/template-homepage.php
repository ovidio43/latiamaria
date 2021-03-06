<?php
/*
* template name: home page
*/
get_header();
?>
    <div class="container">
      <div class="wrap-video" style="background-color: #fff; text-align:center;">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <?php the_content();?>
            <?php endwhile;  wp_reset_query(); ?>
        <?php endif; ?>         
      </div>      
    </div>
    <div class="container">

    <?php 
$args = array(
'post_type'      => 'videos',
'posts_per_page' => 5
);
    query_posts($args); ?>
    <?php if (have_posts()) : ?>
        <div class="wrap-video">
        <h1 style="text-align:center;">Videos recientes</h1>
        <?php while (have_posts()) : the_post(); ?>
            <div class="item-video">
                <div class="item">
                  <a href="<?php the_permalink();?>"><img src="http://img.youtube.com/vi/<?php the_field('youtube_id');?>/0.jpg" class="thumbnail"></a> 
                  <div class="video-title"><?php the_title();?></div> 
                  <i><?php the_excerpt();?></i>
                </div>
            </div>
        <?php endwhile;  wp_reset_query(); ?>
        <div class="paging-navigation"><span class="nav-previous"><a href="/videos/page/2/">Ver más Vidéos</a></span> </div>
    <?php endif; ?>                                     
      </div>
      <div class="wrap-products">
      <?php if ( is_active_sidebar( 'main_sidebar' ) ) : ?>
          <?php dynamic_sidebar( 'main_sidebar' ); ?>
          <div class="paging-navigation"><span class="nav-previous"><a href="/shop/">Ver más Productos</a></span> </div>
      <?php endif; ?>
      </div>
    </div>
<?php get_footer();?>