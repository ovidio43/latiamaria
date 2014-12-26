<?php
get_header();
?>
    <div class="container">

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts('post_type=videos&posts_per_page=10&caller_get_posts=1&paged='. $paged ); ?>     
    <?php if (have_posts()) : ?>
        <div class="wrap-video">
        <?php while (have_posts()) : the_post(); ?>
            <div class="item-video">
                <div class="item">
                  <a href="<?php the_permalink();?>"><img src="http://img.youtube.com/vi/<?php the_field('youtube_id');?>/0.jpg" class="thumbnail"></a> 
                  <div class="video-title"><?php the_title();?></div> 
                  <i><?php the_excerpt();?></i>
                </div>
            </div>
        <?php endwhile; ?>
        <?php twentythirteen_paging_nav();?>
    <?php endif; ?>                                     
      </div>
    </div>

<?php get_footer();?>