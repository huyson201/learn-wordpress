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
		$loop = new WP_Query($args);

		if ($loop->have_posts()) {
			while ($loop->have_posts()) : $loop->the_post();

		?>
				<div class="list_sp col-md-3 mx-3">
					<div class="card" style="width: 18rem;">
						<div class="card-img-top">
							<a class="image_sp" href="<?php the_permalink(); ?>"><?php the_post_thumbnail("medium", array("title" => get_the_title(), "alt" => get_the_title())); ?></a>
						</div>
						<div class="card-body">
							<h5 class="card-title title-sp"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
							<p class="card-text"><span class="price"><ins><span class="amount">Giá 1: <?php echo get_post_meta(get_the_ID(), '_regular_price', true); ?>$</span></ins></span></p>
							<p class="card-text"><span class="price"><ins><span class="amount">Giá 2: <?php echo get_post_meta(get_the_ID(), 'price_2', true); ?>$</span></ins></span></ins></span></p>
							<p class="card-text"><span class="price"><ins><span class="amount">Giá 3: <?php echo get_post_meta(get_the_ID(), 'price_3', true); ?>$</span></ins></span></p>
							<p class="card-text"><span class="price"><ins><span class="amount">Giá 4: <?php echo get_post_meta(get_the_ID(), 'price_4', true); ?>$</span></ins></span></p>
							<p class="card-text"><span class="price"><ins><span class="amount">Sale: <?php echo get_post_meta(get_the_ID(), '_sale_price', true); ?>$</span></ins></span></p>
							<p style="margin:0;padding:0">Số Lượng: <?php echo $product->get_stock_quantity() ?></p>
							<form class="cart" action="<?php echo the_permalink() ?>" method="post" enctype="multipart/form-data">
								<button type="submit" name="add-to-cart" value="<?php echo get_the_ID() ?>" class="single_add_to_cart_button button alt">Add to cart</button>
							</form>
						</div>
					</div>
				</div>
		<?php
			endwhile;
		} else {
			echo __('No products found');
		}
		wp_reset_postdata();
		?>
	</div>
	<!--/.products-->
	<?php

	get_footer();
