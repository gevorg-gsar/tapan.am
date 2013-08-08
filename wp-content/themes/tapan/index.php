<?php get_header(); ?>

    <div class="content">

        <div class="content_left">
            <?php get_sidebar(); ?>
        </div>

        <div class="content_right">

            <p class="posts_title"> Last news </p>

            <?php while ( have_posts() ) : the_post(); ?>
                <div class="post">
                    <p class="post_icon"> <?php the_post_thumbnail(); ?> </p>

                    <p class="post_date"> <?php the_date('d-m-Y'); ?> </p>

                    <p class="post_title">  <a href="<?php the_permalink(); ?>">  <?php the_title(); ?>  </a>  </p>

                    <p> <?php the_excerpt(); ?> </p>

                    <p class="post_more"> <a href="<?php the_permalink(); ?>">  more  </a> </p>

                </div>
            <?php endwhile; ?>
        </div>

        <div class="div_clear"></div>

    </div>

<?php get_footer(); ?>