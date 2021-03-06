<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/screen.css" type="text/css" media="screen">
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.3.2.min.js" type="text/javascript" charset="utf-8"></script>
 	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle.all.min.js" type="text/javascript" charset="utf-8"></script>
 	<script src="<?php echo get_template_directory_uri(); ?>/js/presentation.js" type="text/javascript" charset="utf-8"></script>
 	
 	<!-- SIFR 436 -->
 	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sifr.css" type="text/css" media="screen">
 	<script src="<?php echo get_template_directory_uri(); ?>/js/sifr.js" type="text/javascript" charset="utf-8"></script>
 	<script src="<?php echo get_template_directory_uri(); ?>/js/sifr-config.js" type="text/javascript" charset="utf-8"></script>
 	<script src="<?php echo get_template_directory_uri(); ?>/js/sifr-debug.js" type="text/javascript" charset="utf-8"></script>
	
	<!-- THICKBOX-->
 	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/thickbox.css" type="text/css" media="screen">
 	
  
  <!--[if lt IE 8]>
  	<script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE8.js" type="text/javascript"></script>
  <![endif]-->
	<?php wp_head(); ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/thickbox.js" type="text/javascript" charset="utf-8"></script>
</head>

<body <?php body_class(); ?>>
	<div id="header-container">	
  		
  		<div id="header">
  		
  			<div id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/core/logo.gif" alt="B&amp;M's Pave N Drain: Paving &amp; Draining Services in Perth" /></a></div>
  			<div id="quote">Make it happen with B&amp;M's. Call us today </div>
  			<div id="navigation">
  				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false ) ); ?>
  			</div>
  			
  		</div>
  		
  	</div>
		

