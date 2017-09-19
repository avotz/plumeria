<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package plumeria
    Template Name: Page Contact 
     
 */

get_header(); ?>
	
	
	<div class="main">
		<div class="inner">
			<section class="banner banner-page">
				<div class="owl-carousel ">
			  	 <?php if ( has_post_thumbnail() ) :

			  	 	$id = get_post_thumbnail_id($post->ID);
			  	 	$thumb_url = wp_get_attachment_image_src($id,'full', true);
			  	 	?>
			    	
					 <div class="item" style="background-image: url('<?php echo $thumb_url[0] ?>');">
			  	  		<div class="inner">
				  	  		<div class="item-info">
				  	  			<span ><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></span>
				  	  			
				  	  			
				  	  		</div>
				  	  		
				  	  		
				  	  	</div>
			  	  	</div>
					
				<?php else : ?>
			  	  <div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner1.jpg');">
			  	  		<div class="inner">
				  	  		<div class="item-info">
				  	  			<span ><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></span>
				  	  			
				  	  			
				  	  		</div>
				  	  		
				  	  		
				  	  	</div>
			  	  </div>
			  	 
			  	<?php endif; ?>
			  	  	  
				</div>
			</section>
			<div class="inner-wrapper">
				<div class="contact-container">	
					<?php

					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						/*if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;*/

					endwhile; // End of the loop.
					?>
				
					<div class="contact-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15689.76302526861!2d-85.694911!3d10.544641!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5bc2a3db1f37cdad!2sPlumeria+Rentals!5e0!3m2!1ses-419!2s!4v1505835824034" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					 <div class="num">
					  US: (+506) 8867-0268 <br>
						  (+506)  8329-8484  
					 </div>
					</div>
				</div>
			</div>
		</div><!-- #main -->
	</div><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
