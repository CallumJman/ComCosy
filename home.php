<?php 
/*Template Name: Blog Page*/


include 'inc/header.php'; 
include 'inc/nav-bar.php';
?>

<!--Home Page start -->
	<div class="page-wrapper home-page">
		
		<?php $image = get_field('header_image', 14);
			if(my_wp_is_mobile()){
				$image = $image['sizes']['hero-small'];
			}else{
				$image = $image['sizes']['large'];
			}
		 ?>
		<section class="hero-image" style="background-image:url('<?php echo $image; ?>');">
			<h1 class="hidden">Blog</h1>
		</section>
		
		<?php $tagstrip = get_field('tag_strip', 14); ?>
		<section class="hh-fw">
			<div class="gen-table text">
				<div class="gen-cell">
					<h2><?php echo $tagstrip['0']['title']; ?></h2>
					<h3><?php echo $tagstrip['0']['content']; ?></h3>
				</div>
			</div>
		</section>

		 <!-- Blog Articles -->  
		  <section class="blog-section">
		    
		    <?php if (have_posts()) : 
		    	while (have_posts()) : the_post(); ?>    
				    <article class="blog-article">
				     <div class="blog-article__img blog-column">
				     	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '720x385' ); ?>
				      	<a href="<?php the_permalink() ?>" style="background-image:url('<?php echo $thumb['0']; ?> ');"></a>
				      </div>
				      <div class="blog-article__content blog-column">
				      	<div class="gen-table">
					      	<div class="gen-cell">
					      		<div class="blog-article__content-wrapper">
							      	<a href="<?php the_permalink() ?>">
							        	<h3><?php the_title(); ?></h3>
							        </a>
							        <p>
							          <?php echo get_excerpt(150); ?>
							        </p>
							        <a href="<?php the_permalink() ?>" class="action-link white small">Read More ></a> 
						        </div>
					        </div>
				        </div>
				      </div>
				     
				    </article>
		    	<?php endwhile; ?>

		    <?php else : ?>
		      <div class="blog-empty">
		        <h3>No Blog Posts Yet!</h3>
		      </div>
		    <?php endif; ?>

		  </section>
		  <!-- End Blog Articles --> 
		
	</div>
<!-- Front Page end  -->

<?php include ('inc/footer.php');?>