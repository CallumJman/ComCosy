<?php 
/*Template Name: Single Product*/


include 'inc/header.php'; 
include 'inc/nav-bar.php';

$owner = get_field('user');

?>

<!-- Product Page start -->

	<main class="single-product content-wrapper">
		
		<section class="two-column">
			
			<!-- Top Image Half -->
			<div class="sixty product-images">
				<?php $productImages = get_field('product_images'); ?>
				<div class="small-images">
					<div class="product-image__small gallery" style="background-image:url('<?php echo $productImages['1']['sizes']['large']; ?>');">
						<img class="invisible" src="<?php echo get_template_directory_uri(); ?>/images/image-zoom.png" class="image-zoom" />
					</div>
					<div class="product-image__small gallery" style="background-image:url('<?php echo $productImages['2']['sizes']['large']; ?>');">
						<img class="invisible" src="<?php echo get_template_directory_uri(); ?>/images/image-zoom.png" class="image-zoom" />
					</div>
					<div class="product-image__small gallery" style="background-image:url('<?php echo $productImages['3']['sizes']['large']; ?>');">
						<img class="invisible" src="<?php echo get_template_directory_uri(); ?>/images/image-zoom.png" class="image-zoom" />
					</div>
				</div>
				<div class="large-image">
					
					<div class="product-image__large  gallery" style="background-image:url('<?php echo $productImages['0']['sizes']['large']; ?>');">
						<img src="<?php echo get_template_directory_uri(); ?>/images/image-zoom.png" class="image-zoom" />
					</div>

				</div>
				<div class="product-tags">
					<p>TAGS:</p>
					<ul>
						<li><a href="#">Drawers,</a></li>
						<li><a href="#">North London,</a></li>
						<li><a href="#">Reclaimed Wood</a></li>
					</ul>
				</div>
			</div>
			<!-- Top Image Half End -->

			<!-- Product Description Half -->
			<?php $productDetails = get_field('product_details'); ?>
			<div class="forty product-desc">
				<h1><?php echo $productDetails['0']['title']; ?></h1>
				<h2><?php echo $productDetails['0']['subtitle']; ?></h2>
				<h3>by <a href="<?php  echo get_author_posts_url( $owner['ID'] ); ?>"><?php echo $owner['display_name']; ?></a></h3>

				<div class="product-desc__actions">
					<div class="half txt-l">
						<h4 class="price">£<?php echo $productDetails['0']['price']; ?></h4>
						<div class="product-desc__overview">
							<p><strong>Overview</strong></p>
							<p><?php echo $productDetails['0']['item_type']; ?></p>
							<p>Material: <?php echo $productDetails['0']['material']; ?></p>
						</div>
						<a class="product-actions" href="#">ADD TO BASKET</a>
						<a class="product-actions" href="#">SAVE TO WISH LIST</a>
						<a class="product-actions" href="#">VOTE THIS</a>
					</div>
					<div class="product-desc__social half txt-c">
						<p>Share:</p>
						<a href="#" class="icon fa fa-facebook"></a>
						<a href="#" class="icon fa fa-twitter"></a>
						<a href="#" class="icon fa fa-pinterest"></a>
						<a href="#" class="icon fa fa-google-plus"></a>
					</div>
				</div>

				<div class="profile-card">
					<h4 class="txt-c">ABOUT THE SELLER</h4>
					<div class="third">
						<?php echo $owner['user_avatar']; ?>
					</div>
					<div class="twothird">
						<p><?php 
							$desc = get_the_author_meta( 'description', $owner['ID'] ); 
                    		echo substr($desc,0,120).'...';
                    		?> </p>
						<a href="<?php echo get_author_posts_url( $owner['ID'] ); ?>">Read More ></a>
					</div>
				</div>
			</div>
			<!-- Product Description Half End -->

		</section>


		<section class="two-column">
			
			<!-- Product Tabs Half -->
			<div class="product-tabs sixty">
				<div class="product-tabs__headers txt-c">
					<div class="tab-header active" data-tab="one">PRODUCT DESCRIPTION</div>
					<div class="tab-header" data-tab="two"><a href="<?php echo get_permalink(1934); ?>">REVIEWS</a></div>
					<div class="tab-header" data-tab="three"><a href="<?php echo get_permalink(1890); ?>">DELIVERY</a></div>
					<div class="tab-header" data-tab="four"><a href="<?php echo get_permalink(1892); ?>">RETURNS</a></div>
				</div>
				<div class="product-tabs__content">
					<div class="tab-content one active">
						<?php $productDescription = get_field('product_description'); ?>
						<div class="sixty">
							<?php foreach($productDescription['0']['details'] as $details){ ?>
								<div class="tab-content__line">
									<span class="type"><?php echo $details['detail_type']; ?></span>
									<span class="value"><?php echo $details['detail_value']; ?></span>
								</div>
							<?php } ?>
						</div>
						<div class="forty">
							<img src="<?php echo $productDescription['0']['product_diagram']['sizes']['large']; ?>" />
						</div>
					</div>
					<!-- End of tab-content.one -->

					<div class="tab-content two">
						<p>Loading...</p>
					</div>
					<!-- End of tab-content.two -->

					<div class="tab-content three">
						<p>Loading...</p>
					</div>
					<!-- End of tab-content.three -->

					<div class="tab-content four">
						<p>Loading...</p>
					</div>
					<!-- End of tab-content.four -->
				</div>
			</div>
			<!-- Product Tabs End Half -->
			
			<!-- Product History Half
				
				Commenting this out, as there's pretty much no point getting this to work within wordpress
			 
			<div class="product-history forty">
				<div class="product-history__wrapper">
					<h3>History of this item</h3>
					<h4>by <a href="#">GATHERING MOSS</a></h4>
					<p>Location: East Sussex, GB</p>
					<div class="history-chart">
						<div class="history-chart__item">
							<div class="history-chart__bar"></div>
							<p><span class="year">2010 -</span> Gathering Moss</p>
						</div>
						<div class="history-chart__item">
							<div class="history-chart__bar"></div>
							<p><span class="year">2010 - 2013 -</span> PIERRE RENOIR</p>
						</div>
						<div class="history-chart__item">
							<div class="history-chart__bar"></div>
							<p><span class="year">2013 - 2015 - </span> Julie Hammond</p>
						</div>
						<div class="history-chart__item recent">
							<div class="history-chart__bar"></div>
							<p><span class="year">2015 - </span> Gathering Moss</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Product History End Half -->

		</section>


		<section class="more-slider seller">
			<h2>More from this seller</h2>
			<div class="image-scroller">
				<a class="image-scroll__wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/images/image-scroll-1.jpg" />
				</a>
				<a class="image-scroll__wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/images/image-scroll-1.jpg" />
				</a>
				<a class="image-scroll__wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/images/image-scroll-1.jpg" />
				</a>
				<a class="image-scroll__wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/images/image-scroll-1.jpg" />
				</a>
				<a class="image-scroll__wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/images/image-scroll-1.jpg" />
				</a>
				<a class="image-scroll__wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/images/image-scroll-1.jpg" />
				</a>
				<a class="image-scroll__wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/images/image-scroll-1.jpg" />
				</a>
				<a class="image-scroll__wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/images/image-scroll-1.jpg" />
				</a>
			</div>
		</section>

		<section class="more-slider like">
			<h2>You may also like:</h2>
			<div class="image-scroller">
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
					  ?>

						<a class="image-scroll__wrapper" href="<?php the_permalink() ?>">
							<img src="<?php echo $productImages['0']['sizes']['large']; ?>" />
						</a>
					    <?php
					

					  endwhile;
					}
					wp_reset_query();  // Restore global post data stomped by the_post().
				?>
			</div>
		</section>

		<section class="comments">
			<?php comments_template(); ?>
		</section>



	</main>
	
<!-- Product Page end  -->

<?php include ('inc/footer.php');?>