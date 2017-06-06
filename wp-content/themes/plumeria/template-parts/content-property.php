<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package plumeria
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- <header class="entry-header">
		<?php /*the_title( '<h1 class="entry-title">', '</h1>' );*/ ?>
	</header> -->
	<div class="entry-content">
		<div class="property-container">
			<div class="column">
				<h3>Property Type</h3> 
				<?php $terms = wp_get_post_terms( $post->ID, 'type');?>
				<ul>
					<li><?php echo $terms[0]->name ?></li>
				</ul>
				
			    <?php echo rwmb_meta( 'rw_info1'); ?>
					
			</div>
			<div class="column">
				<?php echo rwmb_meta( 'rw_info2'); ?>
				<div class="video">
					<?php 
						
						if(rwmb_meta( 'rw_video') != "Embed HTML not available."){
							//$url = get_post_meta( get_the_ID(), 'rw_video', true );
							//echo wp_oembed_get( $url, array('rel=0') ); 
							echo rwmb_meta( 'rw_video');
							 
						}

						?>
					
				</div>
			</div>
			<div class="column">
				<div class="content-description">
					<?php
						the_content();
						
					?>

				</div>
				<a href="#" class="view-more"><i class="fa fa-plus"></i> View more</a>
				<a href="#" class="view-less"><i class="fa fa-minus"></i> View less</a>
				
			</div>
		</div>
		
	</div><!-- .entry-content -->

</article><!-- #post-## -->

