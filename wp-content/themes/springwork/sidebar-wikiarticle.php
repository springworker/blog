<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-sm-12 col-lg-4" role="complementary">
	<section id="search-5" class="widget widget_search">
		<form role="search" method="get" class="search-form" action="https://springwork.de/blog/wiki">
    		<label>
        		<input type="search" class="search-field form-control" placeholder="Wiki Artikel suchen …" value="" name="s" title="Suchen for:">
    		</label>
    		<input type="hidden" name="post_type" value="wikiarticle" />
    		<input type="submit" class="search-submit btn btn-default" value="Suchen">
		</form>
	</section>


	<section id="recent-posts-3" class="widget widget_recent_entries">
		<h3 class="widget-title">Wiki Artikel</h3>
			<ul class="nav flex-column">

	<?php

	//First Query for Posts matching term1
	$args = array(
	    'post_type' => 'wikiarticle',
	    'orderby' => 'date',
	    'order' => 'DESC',
	    'posts_per_page' => '10'
	);

	$query = new WP_Query( $args );



	while ($query->have_posts()) {
	    $query->the_post();
	    echo '<li class="nav-item"><a class="nav-link" href="';
	    the_permalink();
	    echo '" title="';
	    the_title_attribute();
	    echo '">';
	    the_title();
	    echo '</a></li>';
	}

	wp_reset_query();

	?>

		
	</ul>
	</section>

	<?php //dynamic_sidebar( 'sidebar-wiki' ); ?>
</aside><!-- #secondary -->
