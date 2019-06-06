<?php get_header() ?>

<div class="wrapper">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="post">
                <div class="post-title">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                </div>

                <div class="post-excerpt">
                    <?php the_content(); ?>

                </div>
             
            </div>

        <?php endwhile; ?>

    <?php else : ?>

        <p>No posts found. :(</p>

    <?php endif; ?>
</div>

<?php get_footer(); ?>