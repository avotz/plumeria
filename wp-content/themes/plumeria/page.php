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
			<?php

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				/*if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;*/

			endwhile; // End of the loop.
			?>
			</div>
		</div><!-- #main -->
	</div><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
