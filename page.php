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
  		
  			<h1><?php the_title(); ?></h1>
  		
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