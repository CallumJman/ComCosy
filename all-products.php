<?php 
/*Template Name: All Products*/


include 'inc/header.php'; 
include 'inc/nav-bar.php';
?>

<!-- All Products Page start -->

	<main class="single-product content-wrapper">

		<div class="all-top-content">
			<?php the_content(); ?>
		</div>
		
		<?php
			$type = 'products';
			$args=array(
			  'post_type' => 'product',
			  'post_status' => 'publish',
			  'posts_per_page' => 8 
			  );

			$my_query = null;
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {
			  while ($my_query->have_posts()) : $my_query->the_post(); 
			  	$id = get_the_ID();
			  	$productImages = get_field('product_images', $id);
			  	if($productImages > ''){
			  ?>
					<div class="all-products__box quarter" style="background-image:url('<?php echo $productImages['0']['sizes']['large']; ?>');">
						<a class="all-products__link" href="<?php the_permalink() ?>"></a>
					</div>
			    <?php
				}

			  endwhile;
			}
			wp_reset_query();  // Restore global post data stomped by the_post().
		?>



	</main>
	
<!-- All Products Page end  -->

<?php include ('inc/footer.php');?>