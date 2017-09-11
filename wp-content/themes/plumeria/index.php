<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
				  	  			<span ><h1 class="entry-title">Blog</h1></span>
				  	  			
				  	  			
				  	  		</div>
				  	  		
				  	  		
				  	  	</div>
			  	  	</div>
					
				<?php else : ?>
			  	  <div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner1.jpg');">
			  	  		<div class="inner">
				  	  		<div class="item-info">
				  	  			<span ><h1 class="entry-title">Blog</h1></span>
				  	  			
				  	  			
				  	  		</div>
				  	  		
				  	  		
				  	  	</div>
			  	  </div>
			  	 
			  	<?php endif; ?>
			  	  	  
				</div>
			</section>
			<div class="inner-wrapper">
			<div class="blog">
				<div class="blog-content">
				<?php

					if ( have_posts() ) :
		
					if ( is_home() && ! is_front_page() ) : ?>
						<!-- <header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header> -->
						<section class="banner banner-blog">
							<?php if ( has_post_thumbnail() ) :

									$id = get_post_thumbnail_id($post->ID);
									$thumb_url = wp_get_attachment_image_src($id,'full', true);
									?>
									
									<div class="item" style="background-image: url('<?php echo $thumb_url[0] ?>');">
										
									</div>
									
								<?php else : ?>
								<div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner1.jpg');">
										
								</div>
								
								<?php endif; ?>
							</section>
		
					<?php
					endif;
		
					/* Start the Loop */
					while ( have_posts() ) : the_post();
		
						/*
						* Include the Post-Format-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Format name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content', get_post_format() );
		
					endwhile;
		
					the_posts_navigation();
		
				else :
		
					get_template_part( 'template-parts/content', 'none' );
		
				endif; ?>
					
				</div>
					<div class="blog-sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
			
			</div>
		</div><!-- #main -->
	</div><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
