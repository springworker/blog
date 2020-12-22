<?php
/**
 * Template Name: Wiki Overview
 */

get_header();
?>
    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="container">
                <?php
                while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/content', 'notitle' );
                endwhile; // End of the loop.
                ?>


                <?php $loop = new WP_Query( array( 'post_type' => 'wikiarticle', 'posts_per_page' => 10 ) );

                while ( $loop->have_posts() ) : $loop->the_post();

                    the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>




            </div>
        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
