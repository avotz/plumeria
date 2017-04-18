<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package plumeria
 */

?>

	

	<footer class="footer" role="contentinfo">
		<div class="inner">
			<div class="inner-wrapper">
				<?php wp_nav_menu( array(
	             'theme_location' => 'primary',
	             'menu_id' => 'footer-menu',
	             'container'       => 'nav',
	            'container_class' => 'footer-menu',
	            'container_id'    => '',
	            'menu_class'      => 'footer-menu-ul',
	              ) 
	          ); 
	          ?>
	          	<hr>
				<div class="copyright">
	               <div class="plumeria">
	               		Copyright &copy; 2017<?php echo (date('Y') == '2017') ? '' : ' - '.date('Y'); ?> Plumeria rentals
	               </div>
	               <div class="avotz">
	               		By <a href="http://www.avotz.com" class="avotz" target="_blank"><i class="icon-avotz"></i></a>
	               </div>
	            </div>
			</div><!-- .site-info -->
		</div>
		
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
