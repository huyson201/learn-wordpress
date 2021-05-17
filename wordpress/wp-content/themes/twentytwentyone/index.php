<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>
<div class="container">

<div class="row py-5">
	<?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 12
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<div class="list_sp col-md-4" style="max-width:250px; max-height: 300px;">
					<a class="image_sp" href="<?php the_permalink(); ?>"><?php the_post_thumbnail("medium", array("title" => get_the_title(), "alt" => get_the_title())); ?></a>
					<h4 class="title_sp"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<span class="price"><ins><span class="amount">Giá: <?php echo get_post_meta(get_the_ID(), '_regular_price', true); ?></span></ins></span>
					 <br><a href="<?php the_permalink(); ?>" class="more">More info</a>
					 <br><a class="btn btn-primary" href="<?php $add_to_cart = do_shortcode('[add_to_cart_url id="'.$loop->ID.'"]'); echo $add_to_cart;?>">Add to card</a>		
				</div>
				<?php
			endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
	?>
</div><!--/.products-->
<?php

get_footer();

