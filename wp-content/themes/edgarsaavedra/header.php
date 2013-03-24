<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         echo 'Home - '; bloginfo('name');  bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/kerning.js"></script>
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link href='http://fonts.googleapis.com/css?family=Sintony' rel='stylesheet' type='text/css'>
	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>
<style>
.heading1 {
	-letter-kern: 1px 1px 2px 2px 2px
                  1px 2px 2px 2px 2px
                  2px 2px 2px ;
      /* fallback if JS fails to load */
    font-weight: 200;

    font-weight: if-font(
        'Helvetica Neue': 500
    );
}
#menu-header_menu{
	
      /* fallback if JS fails to load */
    font-weight: 200;

    font-weight: if-font(
        'Helvetica Neue': 200
    );
}

}

</style>
<body <?php body_class(); ?>>
		
	<div id="container">
		<!--div id="to_top"><a href="#header"> <img src="<?php bloginfo('template_directory'); ?>/img/to_top.png"/>
		<br/> Back To Top</a></div-->
		
	
<!--start header section-->		
			<div id="header">
				<div id="headercontent">
				<ul>
					<a><li><?php wp_nav_menu(array('menu' => 'main nav menu')) ?></li></a>
					
				</ul>
				<a href="<?php echo get_option('home'); ?>"><h1 class="heading1" id="little-lean ">Edgar Saavedra</h1></a></div>
			</div>
			<div id="wrapper">
<!--end header-->
	