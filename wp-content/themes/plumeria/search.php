<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package plumeria
 */

get_header(); ?>

<div class="main">
		<div class="inner">
			<section class="banner banner-page">
				
			  	  <div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner1.jpg');">
			  	  		<div class="inner">
				  	  		<div class="item-info">
				  	  			<span ><h1 class="entry-title">Blog</h1></span>
				  	  			
				  	  			
				  	  		</div>
				  	  		
				  	  		
				  	  	</div>
			  	  </div>
			  	 
			  
			  	  	  
				
			</section>
			<div class="inner-wrapper">
			<div class="blog">
				<div class="blog-content">
				<?php
					if ( have_posts() ) : ?>

						<header class="page-header">
							<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'plumeria' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						</header><!-- .page-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/**
							* Run the loop for the search to output the results.
							* If you want to overload this in a child theme then include a file
							* called content-search.php and that will be used instead.
							*/
							get_template_part( 'template-parts/content', 'search' );

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
