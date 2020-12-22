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
                    //get_template_part( 'template-parts/content', 'notitle' );
                endwhile; // End of the loop.
                ?>

                <h1>sddsd</h1>

                <?php

$args = array(
   'name' => 'wikiarticle'
);

$output = 'objects'; // names or objects

$post_types = get_post_types( $args, $output );

foreach ( $post_types  as $post_type ) {

   echo '<p>' . $post_type->name . '</p>';
}

?>
            </div>
        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
