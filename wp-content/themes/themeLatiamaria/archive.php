<?php
get_header();
?>
    <div class="container">
    <?php query_posts('post_type=videos'); ?>
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
    <?php endif; ?>                                     
      </div>
    </div>

<?php get_footer();?>