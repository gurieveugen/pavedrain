<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

  	<div id="footer-container">
  		
  		<div id="footer">
  		
  			<div class="footer-menu">
				  <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false ) ); ?>
				</div>
  		
  			<span class="copyright">&copy; Copyright 2009 B&amp;M’s Pave n Drain</span>

  		
  		</div>
  		
  	</div>
	<?php wp_footer(); ?>
</body>
</html>