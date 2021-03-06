<?php
/**
 * The template for displaying the about page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="about-page hero-content">
  <div class="main-content" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
  </div><!-- .main-content -->
</div><!-- #primary -->

<section class="services">
    <div class = "our-services">
        <h3>Our Services</h3>
          <?php while ( have_posts() ) : the_post();
            $our_services = get_field('our_services'); ?>

            <h4><?php echo $our_services; ?></h4>
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
    </div>



    <article class="about-services">
          <?php query_posts('posts_per_page=4&post_type=our_services');?>
          <?php while ( have_posts() ) : the_post();
            $image_1 = get_field("image_1");
            $size = "medium";?>

            <section class="service-types">
              <figure>
    							<?php echo wp_get_attachment_image($image_1, $size); ?>
    					</figure>
              <div class = "service-content">
    							<h2><?php the_title(); ?></a></h2>
                  <?php the_content(); ?>    
              </div>
    			  </section>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
    </article>



    <div class = "contact-us">
           <?php while ( have_posts() ) : the_post();
             $contact_us = get_field('contact_us'); ?>


               <h2><?php echo $contact_us; ?></h2>
               <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>

           <?php endwhile; ?>
           <?php wp_reset_query(); ?>
   </div>
</section>

<?php get_footer(); ?>
