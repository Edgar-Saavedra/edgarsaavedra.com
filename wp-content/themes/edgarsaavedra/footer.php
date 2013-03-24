
	
<!--start footer-->
			<div class="footercontainer">

				<div id="footerbio"><img src= "<?php bloginfo('template_directory'); ?>/img/profilephoto.png" /> 
					<div id="footerbiotext"><h3>Edgar Saavedra</h3>
					<span id="bioparagraph">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer')) :?>
				<?php endif; ?>
				 </span></div> 
				 <div id="footercontact">
				 	<?php 
					 // Custom widget Area Start
					 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Contact') ) : ?>
					<?php endif;
					// Custom widget Area End
					?>
					</div>
					<div id="footerSocial">
					<?php 
					 // Custom widget Area Start
					 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Social Media') ) : ?>
					<?php endif;
					// Custom widget Area End
					?>
					</div>

				
				<div id="footerwhite">
					<img src="<?php bloginfo('template_directory'); ?>/img/logo-01-01.png" border="0"/>
					<span id="copyright" >    copyright &copy; Edgar Saaavedra 2012</span>
				</div>
				
			</div>
<!--end footer-->
		
			</div>
<!--edn wrapper-->	
		</div>
<!--end container-->

<?php wp_footer(); ?>

	<!-- Don't forget analytics -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
</body>

</html>