<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package plumeria
 */

get_header(); ?>
	<div class="main">
		<div class="inner <?php echo ( get_post_type( $post ) == 'properties' ) ? 'properties' : '' ?>">
			<section class="banner <?php echo ( get_post_type( $post ) == 'properties' ) ? 'banner-property' : 'banner-page' ?>">
				<div class="owl-carousel ">

				<?php $images = rwmb_meta( 'rw_gallery_thumb', 'type=image&size=property-thumb' ); 
	             if ( $images ) : ?>
	             
	             	 
	               
	                     <?php foreach ( $images as $image ){?>

	                     		<div class="item" style="background-image: url('<?php echo $image['url'] ?>');"></div>
	                         
	                      <?php } ?>

	           
				<?php else : ?>
			  	  <div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner1.jpg');">
			  	  		
			  	  </div>
			  	 
			  	<?php endif; ?>
			  	  	  
				</div>
			</section>
			<header class="entry-header">
				<div class="inner-wrapper">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</div>
			</header>
			<div class="inner-wrapper">
			<?php

			
				while ( have_posts() ) : the_post();

					
					if ( get_post_type( $post ) == 'properties' ) : 
						 get_template_part( 'template-parts/content', 'property' ); 
					else:
						get_template_part( 'template-parts/content', get_post_format() );
						
						/*the_post_navigation();*/
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						
						get_sidebar();

					endif;


					

					// If comments are open or we have at least one comment, load up the comment template.
					
				endwhile; // End of the loop.
				
			?>
			</div>
			<div class="property-contact">
				<div class="inner-wrapper">
					<div class="property-contact-container">
						<div class="column">
							<h2>Register your interest</h2> 
							
							
						</div>
						<div class="column about">
								
							<img src="<?php echo get_template_directory_uri();  ?>/img/user-200x200.png" alt="user">
							<h6>Lorem ipsum dolor sit amet</h6>
							<p>P: <a href="tel:2222-2222">2222-2222</a></p>
							<p>E: <a href="mailto:info@plumeria.com">info@plumeria.com</a></p>
							<br>
							<p>
							<img src="<?php echo get_template_directory_uri();  ?>/img/user-200x200.png" alt="user">
							</p>
							<h6>Lorem ipsum dolor sit amet</h6>
							<p>P: <a href="tel:2222-2222">2222-2222</a></p>
							<p>E: <a href="mailto:info@plumeria.com">info@plumeria.com</a></p>
						</div>
						<div class="column">
							 <h3>Fill out your details</h3>
							 <?php echo do_shortcode('[contact-form-7 id="25" title="Contact form"]') ?>
						</div>
					</div>
				</div>
			</div>
			<div class="related">
				<div class="related-title">
					<div class="inner-wrapper">
						<h2>Other Properties</h2>
					</div>
				
				</div>
				
				<section id="properties" class="properties">
					<div class="inner">
						<div class="properties-container">
							 <?php
			                    $args = array(
			                      'post_type' => 'properties',
			                      'order' => 'ASC',
			                      'orderby' => 'rand',
			                      'post__not_in' => array($post->ID),
			                      'posts_per_page' => 3,
			                     /*'tax_query' => array(
			                        array(
			                          'taxonomy' => 'type',
			                          'field' => 'slug',
			                          'terms' => 'villa'
			                        )
			                      )*/
			                      
			                    );
			                    $properties = new WP_Query( $args );
			                     $left_or_right = 'right'; 
			                    if( $properties->have_posts() ) {
			                      while( $properties->have_posts() ) {
			                         $properties->the_post();
			                       
			                        ?>

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
			                         $left_or_right = ('right'==$left_or_right) ? 'left' : 'right'; 
			                      }
			                    }
			                  ?>
							

						</div>
					</div>
				</section>
			</div>

		</div><!-- #main -->
	</div><!-- #primary -->


<?php
/*get_sidebar();*/
get_footer();
