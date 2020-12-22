<?php 
add_action( 'wp_enqueue_scripts', 'springwork_enqueue_styles' );
function springwork_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}


function springwork_customize_register( $wp_customize ) {
	// Add control for logo uploader
	$wp_customize->add_setting( 'wp_bootstrap_starter_claim', array(
	    //'default' => __( '', 'wp-bootstrap-starter' ),
	    'sanitize_callback' => 'esc_url',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wp_bootstrap_starter_claim', array(
	    'label'    => __( 'Upload Claim (replaces text)', 'wp-bootstrap-starter' ),
	    'section'  => 'title_tagline',
	    'settings' => 'wp_bootstrap_starter_claim',
	) ) );

}
add_action( 'customize_register', 'springwork_customize_register' );



function wp_bootstrap_starter_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	$posted_on = sprintf(
		esc_html_x( '%s', 'post date', 'wp-bootstrap-starter' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		esc_html_x( 'by %s', 'post author', 'wp-bootstrap-starter' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><!-- | <span class="byline"> ' . $byline . '</span>-->'; // WPCS: XSS OK.

    if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
        echo ' | <span class="comments-link"><i class="fa fa-comments" aria-hidden="true"></i> ';
        /* translators: %s: post title */
        comments_popup_link( sprintf( wp_kses( __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'wp-bootstrap-starter' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
        echo '</span>';
    }

}

 ?>