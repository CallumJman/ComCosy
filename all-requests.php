<?php 
/*Template Name: All Looking For*/


include 'inc/header.php'; 
include 'inc/nav-bar.php';
?>

<!-- All Requests Page start -->

	<main class="looking-for content-wrapper">

		<div class="all-top-content">
			<?php the_content(); ?>
		</div>
		
		<?php
			$args=array(
			  'post_type' => 'requests',
			  'post_status' => 'publish',
			  'posts_per_page' => 8 
			  );

			$my_query = null;
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {
				?>
			<section class="all-requests">
			<?php
			  while ($my_query->have_posts()) : $my_query->the_post(); 
			  	?>


			  			<article class="request-box">
			  				<div class="rb-wrapper">
								<a href="<?php the_permalink() ?>">
					        		<h3><?php the_title(); ?></h3>
						        </a>

						        <p>
						          <?php echo get_excerpt(215); ?>
						        </p>

						        <a href="<?php the_permalink() ?>" class="action-link white small">Read More</a> 
					        </div>
			  			</article>
						
			    <?php
			  endwhile;
			  ?>
			</section>
			  <?php
			}
			wp_reset_query();  // Restore global post data stomped by the_post().
		?>


	</main>
	
<!-- All Requests Page end  -->

<?php include ('inc/footer.php');?>