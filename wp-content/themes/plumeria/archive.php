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
					if ( have_posts() ) : ?>

						<header class="page-header">
							<?php
								the_archive_title( '<h1 class="page-title">', '</h1>' );
								the_archive_description( '<div class="archive-description">', '</div>' );
							?>
						</header><!-- .page-header -->

						<?php
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
