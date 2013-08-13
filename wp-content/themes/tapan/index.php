<?php define('WP_USE_THEMES', false);
get_header(); ?>

<div class="content">
    <div class="content_left">
        <?php get_sidebar(); ?>
    </div>
    <div class="content_right">
        <p class="posts_title"> Last news </p>

<!--        --><?php
//        $post = wp_get_recent_posts('1');
//        $post_id = $post['0']['ID'];
//        ?>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!--            --><?php //if (get_the_ID() == $post_id): ?>
<!--                <div class="view_post">-->
<!--                    <p class="post_title">  --><?php //the_title(); ?><!--  </p>-->
<!---->
<!--                    <p class="post_date"> --><?php //the_time('d.m.Y'); ?><!-- </p>-->
<!---->
<!--                    <p> --><?php //the_content(); ?><!-- </p>-->
<!--                </div>-->
<!--            --><?php //else: ?>
                <div class="post">
                    <p class="post_icon"> <?php the_post_thumbnail(); ?> </p>

                    <p class="post_date"> <?php the_time('d.m.Y'); ?> </p>

                    <p class="post_title">
                        <a href="<?php echo the_permalink()/* . "?id=" . get_the_ID()*/; ?>">  <?php the_title(); ?>  </a>
                    </p>

                    <p> <?php the_excerpt(); ?> </p>

                    <p class="post_more"><a href="<?php echo the_permalink()/* . "?id=" . get_the_ID()*/; ?>"> more </a></p>

                </div>
<!--            --><?php //endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>

        <?php
        if( function_exists('wp_paginate') ){
            wp_paginate();
        }
        ?>

    </div>

    <div class="div_clear"></div>

</div>


<?php get_footer(); ?>
