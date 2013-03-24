
<?php
/*
Template Name: Printmaking
*/

get_header(); ?>
<div class="blog_main_content_bg">
	
<div class='blog_main_content'>
<?php 
 // Custom widget Area Start

 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('My Custom Widget Area - 1') ) : ?>
<?php endif;
// Custom widget Area End
?><!--start printmaking section-->

<div class='post_aside'> </div>
		
		
 <!-- END main-content -->
 </div>


<?php get_footer(); ?>

