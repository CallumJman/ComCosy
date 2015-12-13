  <?php 
/*Template Name: Single Blog Page*/


include 'inc/header.php'; 
include 'inc/nav-bar.php';
?>

<!--Single Request Page start -->
<div id="single-request__wrapper" class="page-top-padding">

  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '720x385' ); ?>

      <main class="single-request">

          <div class="single-request__details single-request__column">

            <div class="single-request__image" style="background-image:url('<?php echo $thumb[0]; ?>');"></div>
            
            <div class="profile-card">
            <?php $authorID = $post->post_author; ?>
              <h4 class="txt-c">ABOUT THE USER</h4>
              <div class="third">
                <?php echo get_avatar( $authorID, 'zero-small'); ?> 
              </div>
              <div class="twothird">
                <p><?php 
                   $desc = get_the_author_meta( 'description', $authorID ); 
                    echo substr($desc,0,120).'...';
                  ?> 
                </p>
                <a href="<?php echo get_author_posts_url( $authorID ); ?>">Read More ></a>
              </div>
            </div>

          </div>

          <div class="single-request__text single-request__column">
            <h2><?php echo get_the_title(); ?></h2>
            <h3><?php the_time('d F Y'); ?></h3>
            
            <div class="single-request__content">
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
                <section class="comments">
                  <?php comments_template(); ?>
                </section>
                <a class="action-link" href="<?php echo get_permalink(1980); ?>">Back</a>
            </div>

          </div>

      
       </main>
      <?php endwhile; ?>
    <?php endif; ?>
      
</div>
<!-- Single Blog Page end  -->

<?php include ('inc/footer.php');?>