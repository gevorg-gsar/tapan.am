<?php define('WP_USE_THEMES', false); get_header(); ?>

    <div class="content">
        <div class="content_left">
            <?php get_sidebar(); ?>
        </div>
        <div class="content_right">
<!--            <p class="posts_title"> Last news </p>-->
<!---->
<!--            --><?php
//            if( isset($_GET['id']) ){
//                $post_id = $_GET['id'];
//            }
//            ?>
<!---->
<!--            --><?php //query_posts('showposts=3'); ?>
<!--            --><?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!--                --><?php //if ( get_the_ID() == $post_id ): ?>
<!--                    <div class="view_post">-->
<!--                        <p class="post_title">  --><?php //the_title(); ?><!--  </p>-->
<!---->
<!--                        <p class="post_date"> --><?php //the_time('d.m.Y'); ?><!-- </p>-->
<!---->
<!--                        <p> --><?php //the_content(); ?><!-- </p>-->
<!--                    </div>-->
<!--                --><?php //endif; ?>
<!--            --><?php //endwhile; ?>
<!--            --><?php //endif; ?>
<!---->
<!--            --><?php //query_posts('showposts=3'); ?>
<!--            --><?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!--                --><?php //if ( get_the_ID() != $post_id ): ?>
<!--                    <div class="post">-->
<!--                        <p class="post_icon"> --><?php //the_post_thumbnail(); ?><!-- </p>-->
<!---->
<!--                        <p class="post_date"> --><?php //the_time('d.m.Y'); ?><!-- </p>-->
<!---->
<!--                        <p class="post_title">  <a href="--><?php //echo the_permalink()."?id=".get_the_ID(); ?><!--">  --><?php //the_title(); ?><!--  </a>  </p>-->
<!---->
<!--                        <p> --><?php //the_excerpt(); ?><!-- </p>-->
<!---->
<!--                        <p class="post_more"> <a href="--><?php //echo the_permalink()."?id=".get_the_ID(); ?><!--">  more  </a> </p>-->
<!---->
<!--                    </div>-->
<!--                --><?php //endif; ?>
<!--            --><?php //endwhile; ?>
<!--            --><?php //endif; ?>
            <?php if ( have_posts()) : the_post() ?>
                <div class="view_post">
                    <p class="post_title">
                        <a href="<?php echo the_permalink(); ?>">  <?php the_title(); ?>  </a>
                    </p>

                    <p class=""> <?php the_content(  ); ?> </p>

                    <p class="post_date"> <?php the_time('d.m.Y'); ?> </p>

                </div>
            <?php endif; ?>
        </div>

        <div class="div_clear"></div>

    </div>

<?php get_footer(); ?>