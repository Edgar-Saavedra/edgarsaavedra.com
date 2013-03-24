<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
  //get page content
    
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Blog Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
	
	if (function_exists('register_nav_menus')) {
		register_nav_menus(
			array(
				'main_nav' => 'Main Navigation Menu'
			)
		);
	}
//custome widget area


  //front page main gallery widget
	if ( function_exists('register_sidebar') ){
    register_sidebar( array(
   'name' => __( 'My Custom Widget Area - 1'),
   'id' => 'mycustomwidgetarea',
   'description' => __( 'An optional widget area for your site ', 'twentyeleven' ),
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget' => "</aside>",
   'before_title' => '<h3 class="widget-title">',
   'after_title' => '</h3>',
   ) );}
    
    //print page main gallery widget
if (function_exists('register_sidebar')) {
register_sidebar(array(
'name'=>'Print Gallery',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
//'before_title' => '<h4 class="widgettitle">',
//'after_title' => '</h4>',
));}
 

// activate widget area
if (function_exists('register_sidebar')) {
register_sidebar(array(
'name'=>'Footer',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
//'before_title' => '<h4 class="widgettitle">',
//'after_title' => '</h4>',
));}

if (function_exists('register_sidebar')) {
register_sidebar(array(
'name'=>'Footer Contact',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
//'before_title' => '<h4 class="widgettitle">',
//'after_title' => '</h4>',
));}

if (function_exists('register_sidebar')) {
register_sidebar(array(
'name'=>'Footer Social Media',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
//'before_title' => '<h4 class="widgettitle">',
//'after_title' => '</h4>',
));}
?>