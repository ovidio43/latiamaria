<?php
get_header();
?>
    <div class="container">
    <?php if (have_posts()) : ?>
        <div class="wrap-single-video">
        <?php while (have_posts()) : the_post(); ?>
                <h1 class="entry-title"><?php the_title();?></h1>
                <div class="entry-content">
                    <?php the_content();?>
                </div>
        <?php endwhile; ?>
    <?php endif; ?>                                     
      </div>
    </div>

<?php get_footer();?>