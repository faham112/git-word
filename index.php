<?php get_header(); ?>

    <div class="container">
        <div class="content">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="entry-meta">
                            Posted on <?php the_time('F jS, Y'); ?> by <?php the_author(); ?>
                        </div>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                    <?php
                endwhile;
            else :
                ?>
                <p>No posts found.</p>
                <?php
            endif;
            ?>
        </div>
    </div>

<?php get_footer(); ?>
