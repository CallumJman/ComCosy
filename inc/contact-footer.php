<!-- Contact Footer -->
	
	<?php $image = get_field('contact_image', 'option'); ?>
	<section class="hh-fw contact image" style="background-image:url('<?php echo $image['sizes']['large']; ?>');">
		<h2>Contact Us</h2>
		<div class="fc-details">
			<a class="contact-link" href="tel:<?php the_field('contact_phone', 'option'); ?>"><?php the_field('contact_phone', 'option'); ?></a>
			<a class="contact-link" href="mailto:<?php the_field('contact_email', 'option'); ?>"><?php the_field('contact_email', 'option'); ?></a>
		</div>
	</section>

<!-- Contact Footer end -->