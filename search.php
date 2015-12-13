<?php 
/*Template Name: Search Page*/


include 'inc/header.php'; 
include 'inc/nav-bar.php';
?>

<!--Search Page start -->
	<div class="page-wrapper search-page">
		
		<main>

			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			
			<?php
				global $query_string;
				$query_args = explode("&", $query_string);
				$search_query = array();

				foreach($query_args as $key => $string) {
				  $query_split = explode("=", $string);
				  $search_query[$query_split[0]] = urldecode($query_split[1]);
				} // foreach

				$the_query = new WP_Query($search_query);

				if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
			?>

				<article class="blog-article">
					<div class="blog-article__img blog-column">
				      	<a href="<?php the_permalink() ?>">
				        	<?php the_post_thumbnail('720x385'); ?>
				        </a>
				    </div>
				    <div class="blog-article__content blog-column">
				        <h3><?php the_title(); ?></h3>
				        <h4><?php the_category(', '); ?></h4>
				        <p>
				          <?php echo get_excerpt(215); ?>
				        </p>
				        <a href="<?php the_permalink() ?>" class="action-link small white">Read More</a> 
				    </div>
			    </article>

			 <?php endwhile; else : ?>

			 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

			 <?php endif; ?>


		</main>
		<!-- End Blog Articles --> 
		<?php wp_reset_postdata(); ?>


		<?php include 'inc/blog-footer.php'; ?>

		<?php include 'inc/contact-footer.php'; ?>

		
		
	</div>
<!-- Front Page end  -->

<?php include ('inc/footer.php');?>