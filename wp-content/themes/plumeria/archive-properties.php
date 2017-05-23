<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package plumeria
 */

get_header(); ?>

	<div class="main">
		<div  class="inner" >
			<section class="banner banner-page">
				<div class="owl-carousel ">
			  	
			  	  <div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner1.jpg');">
			  	  		<div class="inner">
				  	  		<div class="item-info">
				  	  			<span >Properties</span>
				  	  			
				  	  			
				  	  		</div>
				  	  		
				  	  		
				  	  	</div>
			  	  </div>
			  	 
			  	
			  	  	  
				</div>
			</section>
		<?php
		if ( have_posts() ) : ?>

			 
			<div class="inner">
				<div class="properties-container">
				<?php
				/* Start the Loop */
				 $left_or_right = 'right'; 
				while ( have_posts() ) : the_post(); ?>

					<div class="properties-item">
						<div class="properties-item-img-container">
							 <?php if ( has_post_thumbnail() ) :

	                              $id = get_post_thumbnail_id($post->ID);
	                              $thumb_url = wp_get_attachment_image_src($id,'property-thumb', true);
	                              ?>
	                              
	                           
	                            <div class="properties-item-img layer lazy" data-depth="1.00" data-src="<?php echo $thumb_url[0] ?>" data-ibg-bg="<?php echo $thumb_url[0] ?>">	</div>
	                          <?php endif; ?>
							
						</div>
						<div class="properties-item-info <?php echo $left_or_right; ?>">
							<h3><?php the_title(); ?></h3>
							<?php $terms = wp_get_post_terms( $post->ID, 'type');?>
							<h6><?php echo $terms[0]->name ?></h6>
							<hr>
							<?php the_excerpt() ?>
							<a href="<?php the_permalink(); ?>" class="btn">Read more</a>
						</div>
					</div>
	                   
	                  
	                  
	                <?php
	                 $left_or_right = ('right'==$left_or_right) ? 'left' : 'right';  ?>

				<?php endwhile;

				 the_posts_pagination( array( 'mid_size' => 2 ) ); 

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
				</div>
			</div>
		</div><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
