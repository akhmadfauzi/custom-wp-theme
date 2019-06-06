    <?php get_header() ?>

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
                    <div class="post-excerpt">
                        <?php the_excerpt(); ?>

                    </div>
                    <div class="post-utility">
                        <?php wp_link_pages(); ?>
                        <?php edit_post_link(); ?>
                    </div>
                </div>

            <?php endwhile; ?>

            <div class="pagination">
                <?php
                if (get_next_posts_link()) {
                    next_posts_link();
                }
                ?>
                <?php
                if (get_previous_posts_link()) {
                    previous_posts_link();
                }
                ?>
            </div>


        <?php else : ?>

            <p>No posts found. :(</p>

        <?php endif; ?>
    </div>

    <?php get_footer(); ?>