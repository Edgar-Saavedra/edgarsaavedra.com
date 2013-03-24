<?php
/*
Template Name: Print And Design
*/
 get_header(); ?>
<!--main Content begin-->
<div class="main_content"> 
	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Print Gallery')) :?>
	<?php endif; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<div class="entry">
			<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
			</div>
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		</div>
		
		<?php // comments_template(); ?>
<?php endwhile; endif; ?>
</div>

<!--main content end-->

<?php get_footer(); ?>