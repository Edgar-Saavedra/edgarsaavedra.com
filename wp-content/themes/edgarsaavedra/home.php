
	
<?php get_header(); ?>



<!--div class="home_post_header">
	<div class="hover1">
	<a href="edgarsaavedra.com/blog"><img src="<?php bloginfo('template_directory'); ?>/img/home_break1.png" /></a>
	</div>
	<div class="hover2">
	<a href="#footerbio"><img src="<?php bloginfo('template_directory'); ?>/img/home_break2.png"></a>
	</div>
	<div class="hover3">
	<a href="#print"><img src="<?php bloginfo('template_directory'); ?>/img/home_break3.png"></a>
	</div>
	<div class="hover4">
	<a href="#design"><img src="<?php bloginfo('template_directory'); ?>/img/home_break4.png"></a>
	</div>
</div-->

<div class='main_content'>
<?php 
 // Custom widget Area Start

 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('My Custom Widget Area - 1') ) : ?>
<?php endif;
// Custom widget Area End
?>
	
</div> 


<?php get_footer(); ?>

