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
    Template Name: Page Properties 
     
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
		


			 
			<div class="inner">
				<div class="properties-container">

					<?php
                        $args = array(
                          'post_type' => 'property',
                          'order' => 'ASC',
                          'posts_per_page' => 10,
                         
                          
                        );
                        $items = new WP_Query( $args );
                        $left_or_right = 'right'; 
                        if( $items->have_posts() ) {
                          while( $items->have_posts() ) {
                             $items->the_post();
                           
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

                        the_posts_pagination( array( 'mid_size' => 2 ) ); 
                      ?>

				
				</div>
			</div>
		</div><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
