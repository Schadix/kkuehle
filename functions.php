<?php
if ( ! isset( $content_width ) )
	$content_width = 530;

register_sidebar(array(
	'name' => __( 'Sidebar Widget Area' ),
	'id' => 'sidebar-widget-area',
	'description' => __( 'The sidebar widget area' ),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h3>',
	'after_title' => '</h3>',        
));

register_sidebar( array(
	'name' => __( 'Footer Widget Area' ),
	'id' => 'footer-widget-area',
	'description' => __( 'The footer widget area' ),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => '',
));


add_editor_style();
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');

set_post_thumbnail_size( 110, 110, true ); // Default size

?>