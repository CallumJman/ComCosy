<?php 
/*Template Name: Contact Page*/


include 'inc/header.php'; 
include 'inc/nav-bar.php';
?>

<!--Contact Page start -->
	<div class="page-wrapper contact-page">

		<?php $image = get_field('header_image'); 
				if(my_wp_is_mobile()){
					$image = $image['sizes']['hero-small'];
				}else{
					$image = $image['sizes']['large'];;
				}
		?>
		<section class="hero-image" style="background-image:url('<?php echo $image; ?>');">
			<h1 class="hidden" ><?php echo get_the_title(); ?> </h1>
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

			<?php $box2 = get_field('box_2'); ?>
			<div class="half-block image gen-right" style="background-image:url('<?php echo $box2['0']['image']['sizes']['large']; ?>');">
				<a href="<?php echo $box2['0']['link']; ?>" target="_blank" class="map-link" alt="See us on Google Maps">
				<!-- Google Map Image here -->
				</a>
			</div>

			<?php $box1 = get_field('box_1'); ?>
			<div class="half-block text gen-left">
				<div class="gen-table about-text">
					<div class="gen-cell">
						<h2><?php echo $box1['0']['title']; ?></h2>
						<p><?php echo $box1['0']['content']; ?></p>
					</div>
				</div>
			</div>

			
		</section>

		<section class="fh-fw">
			<?php $box4 = get_field('box_4'); ?>
			<div class="half-block image" style="background-image:url('<?php echo $box4['0']['image']['sizes']['large']; ?>');">
			</div>

			<?php $box3 = get_field('box_3'); ?>
			<div class="half-block text">
				<div class="gen-table about-text link">
					<div class="gen-cell">
						<h2><?php echo $box3['0']['title']; ?></h2>
						<p><?php echo $box3['0']['content']; ?></p>
						<a href="<?php echo $box3['0']['link_url']; ?>" class="action-link white small"><?php echo $box3['0']['link_text']; ?></a>
					</div>
				</div>
			</div>
		</section>

		<section class="fh-fw">
			<?php $box5 = get_field('box_5'); ?>
			<div class="half-block image gen-right" style="background-image:url('<?php echo $box1['0']['image']['sizes']['large']; ?>');">
			</div>			

			<div class="half-block text gen-left">
				<div class="gen-table about-text link">
					<div class="gen-cell">
						<h2><?php echo $box5['0']['title']; ?></h2>
						<p><?php echo $box5['0']['content']; ?></p>
						<?php if( strlen($box5['0']['link_text']) > 0){ ?>
							<a href="<?php echo $box5['0']['link_url']; ?>" class="action-link white small"><?php echo $box5['0']['link_text']; ?></a>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>

		<?php include 'inc/contact-footer.php'; ?>
		
	</div>
<!-- Front Page end  -->

<?php include ('inc/footer.php');?>