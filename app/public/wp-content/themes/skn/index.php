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
        if(have_posts()):
          ?>
          <div class="container">
          <?php 

            if(is_home() && ! is_front_page()):
            ?>
              <header class="mb-5">
                  <h1 class="page-title screen-render-text">
                      <?php single_post_title(); ?>
                  </h1>
              </header>
            <?php endif; ?>
            <div class="row">
              <?php 
              while(have_posts()) : the_post(); ?>
              <div class="col-md-4">
                  <?php get_template_part('/template-parts/content');?>
                </div>
              <?php endwhile;
              ?>
        </div>
       <?php else:
            get_template_part('template-parts/content-none');

      endif; 
      get_template_part('template-parts/content-none');
      ?>
    </main>
   </div>
    <?php get_footer();?>

