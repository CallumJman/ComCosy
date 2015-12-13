<?php 
/*Template Name: All Users*/


include 'inc/header.php'; 
include 'inc/nav-bar.php';

// Get all users order by amount of posts
$users = get_users('orderby=post_count&order=DESC');


?>

<!-- All Users Page start -->

	<main class="all-users content-wrapper">

		<div class="all-top-content">
			<?php the_content(); ?>
		</div>
		
		<?php

		foreach($users as $user)
		{
			?>
			<div class="author">
				<div class="authorAvatar">
					<?php echo get_avatar( $user->user_email, '128' ); ?>
				</div>
				<div class="authorInfo">
					<h2 class="authorName"><?php echo $user->display_name; ?></h2>
					<p class="authorLinks"><a href="<?php echo get_author_posts_url( $user->ID ); ?>">View Profile ></a></p>

				</div>
			</div>
			<?php
		}
	?>



	</main>
	
<!-- All Users Page end  -->

<?php include ('inc/footer.php');?>


