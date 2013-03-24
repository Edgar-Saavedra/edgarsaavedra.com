
<?php get_header(); the_post(); ?>

<div class="blog_main_content_bg">
<h2 class="single_title"><?php the_title(); ?></h2>

<?php //include (TEMPLATEPATH . '/inc/meta.php' ); ?>
<div  class="blog_main_content"<?php post_class() ?> id"post-<?php the_ID(); ?>">
			<div class="">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				<?php the_tags( 'Tags: ', ', ', ''); ?>
				<br>
				<br>
				<?php edit_post_link('Edit this entry','','.'); ?>
			</div>
</div>

<div class="blog_sidebar">
<?php 
 // Custom widget Area Start
 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog Sidebar Widgets') ) : ?>
<?php endif;
// Custom widget Area End
?>
</div>

</div>
<?php get_footer(); ?>
