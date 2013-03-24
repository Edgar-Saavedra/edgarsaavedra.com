 
<?php
/*
Template Name: Blog Home Page
*/

get_header(); ?>
<div class="blog_main_content_bg">
	
<div class='blog_main_content'>

<!--start printmaking section-->

<div class='post_aside'> 
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">
			
			<h2><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
			</div>
			<br>
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		</div>
		
		<?php // comments_template(); ?>
<?php endwhile; endif; ?>
</div>
 <!-- END main-content -->
 </div>
<div class="post_box_area">
<?php 
 // Custom widget Area Start

 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog Sidebar Widgets') ) : ?>
<?php endif;
// Custom widget Area End
?>
</div>
<?php get_footer(); ?>

