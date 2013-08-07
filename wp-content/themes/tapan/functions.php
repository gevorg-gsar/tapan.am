<?php
 function silver_widgets_init() {
  // Area 1, located at the top of the sidebar.
  register_sidebar( array(
    'name' =>  'SibeBar',
    'id' => 'sidebar',
    'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
  }
 add_action( 'widgets_init', 'silver_widgets_init' ); 
 
 
function custom_excerpt_length( $length ) {
	return 70;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function custom_excerpt_more( $post ) {
	global $post_url;
	return '... <a href="'.get_permalink($post->ID).'" class="more-link" >Lire la suite &raquo;</a>';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );
 