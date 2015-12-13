  <?php 
/*Template Name: Single Blog Page*/


include 'inc/header.php'; 
include 'inc/nav-bar.php';
?>

<!--Single Blog Page start -->
<div id="blog-single__wrapper" class="page-top-padding">

  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '720x385' ); ?>
      <section class="hero-image"  style="background-image:url('<?php echo $thumb['0']; ?> ');">
        <h1 class="hidden">Blog</h1>
      </section>

      <main class="single-blog">

          <div class="single-blog__text">
           <h3><?php
                      //Only show first category
                      $category = get_the_category(); ?>
                      <a href="<?php echo get_category_link( $category[0]->term_id ); ?>"><?php echo $category[0]->cat_name; ?></a>
                </h3>
            <h2><?php echo get_the_title(); ?></h2>
            <p><?php the_time('d F Y'); ?></p>
            
            <div class="single-blog__content">
                <?php the_content(); ?>


                <div class="single-social-wrapper">
                  <p class="single-social-title">Share:</p>
                  <div class="single-social-link facebook">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=http://<?php echo get_permalink(); ?>" target="_blank">FB</a>
                  </div>
                  <div class="single-social-link twitter">
                    <a href="http://twitter.com/home/?status=<?php the_title();?> - <?php echo wp_get_shortlink();?>" target="_blank">TW</a>
                  </div>
                </div>
                <a class="action-link" href="<?php echo get_permalink(113); ?>">Back to Blog</a>
            </div>

          </div>

      
       </main>
      <?php endwhile; ?>
    <?php endif; ?>
</div>
<!-- Single Blog Page end  -->

<?php include ('inc/footer.php');?>