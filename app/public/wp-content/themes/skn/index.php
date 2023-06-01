<?php 
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package SKN 
 */

/**

 */
?>
  <?php get_header();  ?>
   <div id="primary">
    <main id="main" class="site-main mt-5" rol="primary">
      <?php
        if(have_posts()) {
          ?>
          <div class="container">
          <?php 

            if(is_home() && ! is_front_page()) {
            ?>
              <header class="mb-5">
                  <h1 class="page-title screen-render-text">
                      <?php single_post_title(); ?>
                  </h1>
              </header>
            <?php }?>
            <div class="row">
              <?php 
              while(have_posts()) : the_post(); ?>
              <div class="col-md-4">
                <h3><?php the_title(); ?> </h3>
                <div> <?php the_content(); ?> </div>
                </div>
              <?php endwhile;
              ?>
 
        </div>
       <?php } ?>
    </main>
   </div>
    <?php get_footer();?>

