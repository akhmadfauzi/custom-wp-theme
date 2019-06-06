<?php
get_header();
?>
<div class="wrapper">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post">
                <div class="post-title">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                </div>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="featured-image">
                        <?php the_post_thumbnail(); ?>
                    </div>

                <?php endif; ?>
                <div class="post-content">
                    <?php the_content(); ?>

                </div>
                <div class="post-utility" style="clear:both;">
                    <?php wp_link_pages(); ?>
                    <?php edit_post_link(); ?>
                </div>
            </div>



        <?php endwhile;
else : ?>
        <?php _e('Sorry, no pages matched your criteria.', 'textdomain'); ?>
    <?php endif; ?>

</div>