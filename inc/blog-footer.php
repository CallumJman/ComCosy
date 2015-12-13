<!-- Blog Footer -->
	
	<section class="hh-fw blog-footer">
		<div class="blog-linear">
			<?php echo get_previous_posts_link('See more recent entries'); ?>
			<?php echo get_next_posts_link('See previous entries'); ?>
		</div>
		<ul class="blog-nav">
			<?php 
			    $args = array(
				  'parent' => 0
				  );
				$categories = get_categories( $args );
				foreach ( $categories as $category ) {
					echo '<li><a class="action-link red small" href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></li>';
				}
			?>
		</ul>
		<div class="blog-search">
			<?php get_search_form(); ?>
		</div>
	</section>

<!-- Blog Footer end -->