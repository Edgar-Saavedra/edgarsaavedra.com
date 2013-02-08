
<?php get_header(); the_post(); ?>

<div class="blog_main_content_bg">
<h2 class="single_title"><?php the_title(); ?></h2>

<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

		<div <?php post_class() ?> id"post-<?php the_ID(); ?>">

			<div class="">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>
				<?php edit_post_link('Edit this entry','','.'); ?>

			</div>
		</div>
</div>
<?php get_footer(); ?>
