<?php 
/*Template Name: Single User*/


include 'inc/header.php'; 
include 'inc/nav-bar.php';

$author = get_user_by( 'slug', get_query_var( 'author_name' ) );
$authorID = $author->ID;
$author = get_user_meta($authorID);

$coverImage = get_cimyFieldValue($authorID, 'COVER_IMAGE');
$tagline = get_cimyFieldValue($authorID, 'SUBTITLE');

$profileImgArgs = array(
							'size' => '250',
							'force_default' => true
	);

//echo '<pre>';
//var_dump($author);
//die();

?>

<!-- User Page start -->

	<section class="user-hero">
		<div class="user-hero__image" style="background-image:url(<?php echo $coverImage; ?>);"></div>
	</section>

	<main class="single-user content-wrapper">
			
		<section class="user-bio">

			<div class="user-bio__image">
				<?php echo get_avatar( $authorID, '250' ); ?>
			</div>
			
			<div class="user-bio_content">
				
				<h1>Hey, I'm <?php echo $author['nickname'][0]; ?>!</h1>
				<h2><?php echo $tagline; ?></h2>

				<p><?php echo $author['description'][0]; ?></p>
				


				<a href="#">READ MORE ></a></p>
				
			</div>

		</section>

		<!--

		<section class="user-stats">
			
			<div class="stats-box">
				<span>58</span> FOLLOWERS
			</div>

			<div class="stats-box">
				<span>1080</span> VISTS
			</div>

			<div class="stats-box">
				<span>75</span> REVIEWS
			</div>

			<div class="user-stats__actions">
				<div class="user-stats__column action-buttons">
					<a href="#" class="action-button">FOLLOW</a>
					<a href="#" class="action-button">SEE TOP 10</a>
				</div>
				<div class="user-stats__column comcosy-heart">
					<p>84</p>
				</div>
			</div>

		</section>
		-->


		
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
				?>
				<section class="user-wall">
			
					<!-- Need to rethink this section from design -->
					<!-- UPDATE: Using this section as a slider of users products-->
					<h2>My Items:</h2>
					<div class="image-scroller">
						<?php
							
							  while ($my_query->have_posts()) : $my_query->the_post(); 
							  	$id = get_the_ID();
							  	$productImages = get_field('product_images', $id);
							  	$user = get_field('user', $id);
							  	if($user['ID'] == $authorID){ //Only show products belonging to this seller
							  ?>

								<a class="image-scroll__wrapper" href="<?php the_permalink() ?>">
									<img src="<?php echo $productImages['0']['sizes']['large']; ?>" />
								</a>
							    <?php
								}

							  endwhile;
						?>
					</div>

				</section>
			<?php
				}
				wp_reset_query();  // Restore global post data stomped by the_post().

				?>


		<section class="user-other">
			
			
			<section class="comments">
				<?php comments_template(); ?>
			</section>
			

		</section>

	</main>
	
<!-- Product Page end  -->

<?php include ('inc/footer.php');?>