
		<aside>

		
		<div class="post_box">

			<h4>Latest Post</h4>
			
			<?php query_posts("posts_per_page=5"); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> class="post1-<?php the_ID(); ?>">
			<div class="post1"
				<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>

				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
			</div>
		</div>

<?php endwhile; ?>

<?php else : ?>


<?php endif; ?>

			

		
		
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>

		    <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
		
		<?php endif; ?>
		</div> <!-- END Latest Posts -->

	</aside>
</div>

	