<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package plumeria
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
	 	<div class="header-btn-menu">
		   
		 </div>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo"><img src="<?php echo get_template_directory_uri();  ?>/img/logo.png" alt="Plumeria Rentals" />
			<span>Plumeria Rentals</span>
		</a>
	</header>
	<button id="btn-menu" class="nav-btn-menu">
	     <i class="fa fa-bars"></i>
	 </button>
	<div class="nav-container">
		 <?php wp_nav_menu( array(
             'theme_location' => 'primary',
             'menu_id' => 'primary-menu',
             'container'       => 'nav',
            'container_class' => 'nav-menu',
            'container_id'    => '',
            'menu_class'      => 'nav-menu-ul',
              ) 
          ); 
          ?>
		<aside class="nav-aside">
			<ul class="social">
				<li><a href="https://www.facebook.com/plumeriarentals" class="social-item" target="_blank"><i class="icon-facebook"></i></a></li>
				<li><a href="https://twitter.com/PlumeriaRentals" class="social-item" target="_blank"><i class="icon-twitter"></i></a></li>
				<li><a href="https://www.youtube.com/channel/UC0BnW5TF27-xNwc_K3gDBbA" class="social-item" target="_blank"><i class="fa fa-youtube"></i></a></li>
				<!-- <li><a href="#" class="social-item" target="_blank"><i class="fa fa-google-plus"></i></a></li> -->
				<li><a href="https://www.instagram.com/plumeriarentals/" class="social-item" target="_blank"><i class="fa fa-instagram"></i></a></li>
				<!-- <li><a href="#" class="social-item" target="_blank"><i class="fa fa-tripadvisor"></i></a></li> -->
			</ul>
			<div class="copy">
				<span>&copy; <?php echo date('Y'); ?></span>
			</div>
		</aside>
	</div>
	