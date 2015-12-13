<?php 
/*Template Name: About Page*/


include 'inc/header.php'; 
include 'inc/nav-bar.php';
?>

<!--About Page start -->
	<div class="page-wrapper about-page">
		
		<?php $image = get_field('header_image');
				if(my_wp_is_mobile()){
					$image = $image['sizes']['hero-small'];
				}else{
					$image = $image['sizes']['large'];;
				}
		 ?>
		<section class="hero-image" style="background-image:url('<?php echo $image ?>');">
			<h1 class="hidden"><?php echo get_the_title(); ?> </h1>
		</section>

		<?php $tagstrip = get_field('tag_strip'); ?>
		<section class="hh-fw">
			<div class="gen-table text">
				<div class="gen-cell">
					<h2><?php echo $tagstrip['0']['title']; ?></h2>
					<h3><?php echo $tagstrip['0']['content']; ?></h3>
				</div>
			</div>
		</section>

		<section class="fh-fw">

			<?php $box_1 = get_field('box_1'); ?>
			<div class="half-block text">
				<div class="gen-table about-text">
					<div class="gen-cell link">
						<h2><?php echo $box_1['0']['title']; ?></h2>
						<p><?php echo $box_1['0']['content']; ?></p>
						<?php if( strlen($box_1['0']['link_text']) > 0){ ?>
							<a href="<?php echo $box_1['0']['link_url']; ?>" class="action-link white small"><?php echo $box_1['0']['link_text']; ?></a>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="half-block image" style="background-image:url('<?php echo $box_1['0']['background_image']['sizes']['large']; ?>');"></div>
		</section>

		<section class="fh-fw">
			<?php $box_2 = get_field('box_2'); ?>
			<div class="half-block text gen-right">
				<div class="gen-table about-text">
					<div class="gen-cell link">
						<h2><?php echo $box_2['0']['title']; ?></h2>
						<p><?php echo $box_2['0']['content']; ?></p>
						<?php if( strlen($box_2['0']['link_text']) > 0){ ?>
							<a href="<?php echo $box_2['0']['link_url']; ?>" class="action-link white small"><?php echo $box_2['0']['link_text']; ?></a>
						<?php } ?>
					</div>
				</div>
			</div>

			<div class="half-block image gen-left" style="background-image:url('<?php echo $box_2['0']['background_image']['sizes']['large']; ?>');"></div>


		</section>

		<section class="fh-fw">

			<?php $box_3 = get_field('box_3'); ?>
			<div class="half-block text">
				<div class="gen-table about-text">
					<div class="gen-cell link">
						<h2><?php echo $box_3['0']['title']; ?></h2>
						<p><?php echo $box_3['0']['content']; ?></p>
						<a href="<?php echo $box_3['0']['link_url']; ?>" class="action-link white small"><?php echo $box_3['0']['link_text']; ?></a>
					</div>
				</div>
			</div>

			<?php $box_4 = get_field('box_4'); ?>
			<div class="half-block image" style="background-image:url('<?php echo $box_4['0']['background_image']['sizes']['large']; ?>');">
			</div>
		</section>

		<?php include 'inc/contact-footer.php'; ?>
		
	</div>
<!-- Front Page end  -->

<?php include ('inc/footer.php');?>