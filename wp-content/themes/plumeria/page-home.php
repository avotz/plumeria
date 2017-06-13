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
 * Template Name: Page Home 
 * @package plumeria
 */

get_header(); ?>

	<section class="banner">
		<div class="banner-properties-link">
			<a href="#properties" class="anchor btn">
				<?php  if(get_locale() == "es_ES"){ ?>
				         Propiedades
				        <?php } if(get_locale() == "en_US") { ?>
					         Properties
				       <?php } if(get_locale() == "fr_FR") { ?>
				       		 Propriétés
				       <?php } ?> 
			</a>
		</div>
		<div class="owl-carousel ">
	  	 
	  	  <div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner1.jpg');">
	  	  		<div class="inner">
		  	  		<div class="item-info">
		  	  			<?php  if(get_locale() == "es_ES"){ ?>
				          <span >Calidad</span>
			  	  			<p>Nos Importa</p>
				        <?php } if(get_locale() == "en_US") { ?>
					         <span >Quality</span>
			  	  			<p>matters to us</p>
				       <?php } if(get_locale() == "fr_FR") { ?>
				       		 <span >Qualité</span>
			  	  			<p>nous importe</p>
				          
				       <?php } ?> 
		  	  			
		  	  			
		  	  		</div>
		  	  		
		  	  		
		  	  	</div>
	  	  </div>
	  	  <div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner3.jpg');">
	  	  		<div class="inner">
		  	  		<div class="item-info">
		  	  			<?php if(get_locale() == "es_ES"){ ?>
				          <span >Somos</span>
		  	  			<p> Expertos en alquiler</p>
				        <?php } if(get_locale() == "en_US") { ?>
					         <span >We are</span>
		  	  				<p>rental experts</p>
				       <?php } if(get_locale() == "fr_FR") { ?>
				       		 <span>Nous sommes</span>
			  	  			<p>Experts en location</p>
				          
				       <?php } ?> 
		  	  			
		  	  			
		  	  		</div>
		  	  		
		  	  		
		  	  	</div>
	  	  </div>
	  	  <div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner2.jpg');">
	  	  		<div class="inner">
		  	  		<div class="item-info">
		  	  			<?php if(get_locale() == "es_ES"){ ?>
				           <span >Con nuestro alquiler </span>
		  	  				<p> Los huéspedes disfrutan de la libertad</p>
				        <?php } if(get_locale() == "en_US") { ?>
					         <span >Our rental </span>
		  	  			<p> guests enjoy the freedom</p>
				       <?php } if(get_locale() == "fr_FR") { ?>
				       		 <span >Notre location</span>
			  	  			<p>Les invités profitent de la liberté</p>
				          
				       <?php } ?> 
		  	  			
		  	  			
		  	  		</div>
		  	  		
		  	  		
		  	  	</div>
	  	  </div>
	  	  	  
		</div>

	</section>
	<section id="properties" class="properties">
		<div class="inner">
			<div class="properties-container">
				 <?php
                    $args = array(
                      'post_type' => 'properties',
                      'order' => 'ASC',
                      'posts_per_page' => 6,
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
									
								<a href="<?php the_permalink(); ?>" class="btn">
								 	<?php  if(get_locale() == "es_ES"){ ?>
							        	 Leer más
							        <?php } if(get_locale() == "en_US") { ?>
								         Read more
							       <?php } if(get_locale() == "fr_FR") { ?>
							       		Lire la suite
							       <?php } ?> 

								 </a>
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

<?php

get_footer();
