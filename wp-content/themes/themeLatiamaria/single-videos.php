<?php
get_header();
?>
    <div class="container">
    <?php if (have_posts()) : ?>
        <div class="wrap-single-video">
        <?php while (have_posts()) : the_post(); ?>
                <figure id="canvasvideo">
                <h1 class="entry-title"><?php the_title();?></h1>
                <iframe width="853" height="480" src="//www.youtube.com/embed/<?php the_field('yotube_id');?>?rel=0&amp;autoplay=1" frameborder="0" allowfullscreen=""></iframe>
                
                </figure>
                <div class="entry-content">
                    <?php the_content();?>
                </div>
        <?php endwhile; ?>
    <?php endif; ?>                                     
      </div>
    </div>

<?php get_footer();?>