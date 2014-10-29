<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

  	<div id="banner-container" class="clearfix">
  		
  		<div id="banner">
  		
  		
  		
  			<div id="image-cycle">
  			
  				<a id="previous-button">Previous</a>
  				
  				<div id="cycle">
  				
  					<div id="images">
  						<img src="<?php echo get_template_directory_uri(); ?>/images/cycle/02.jpg" alt="Limestone Paving and Walls" width="400" height="300" />
  						<img src="<?php echo get_template_directory_uri(); ?>/images/cycle/03.jpg" alt="Outdoor Paving" width="400" height="300" />
  						<img src="<?php echo get_template_directory_uri(); ?>/images/cycle/04.jpg" alt="Drainage" width="400" height="300" />
  						<img src="<?php echo get_template_directory_uri(); ?>/images/cycle/05.jpg" alt="Soakwells" width="400" height="300" />
						<img src="<?php echo get_template_directory_uri(); ?>/images/cycle/06.jpg" alt="Garden Paving and Retaining Walls" width="400" height="300" />
  					</div>
  				
  				</div>
  				
  				<a id="next-button">Next</a>
  				
  				<div id="frame"></div>
  				
  			</div>
  			
  			<div id="ctas" class="clearfix">
  			
  				<h2>A WA family-owned business operating for over 20 years...</h2>
  			
  				<div id="pave">
  				
  					<h3>Pave</h3>
            <ul>
              <li>Every aspect of brick paving</li>
              <li>We fix sinking or subsiding paving</li>
              <li>Small retaining and garden walls</li>
              <li>Innovative, high quality work</li>
              <li>Large and small jobs</li>
            </ul>
  					<a class="button" href="/paving/">paving</a>      
  				
  				</div>
  				
  				<div id="drain">
  				
  					<h3>Drain</h3>
            <ul>
              <li>Drainage and flooding solutions</li>
              <li>New installation or repairs</li>
              <li>Soakwells</li>
              <li>Vertically leaching cylinders</li>
              <li>Spoon drains / channel drains</li>
              <li>10 year warranty</li>
            </ul>
  					<a class="button" href="/drainage-and-soakwells/">drainage &amp; soakwells</a>
  				
  				</div>
  			
  			</div>
  		
  		</div>
  		
  	</div>
  	
  	<div id="content-container">
  		
  		<div id="content" class="clearfix">
  		
  			<div id="column1">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>  			
  				<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
			<?php endwhile; ?>  			
  			</div>
  			
  			<?php get_sidebar(); ?>
  			  			
  		</div>
  		
  	</div>

<?php get_footer(); ?>