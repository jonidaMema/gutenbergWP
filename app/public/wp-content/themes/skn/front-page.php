<?php
/** Front page template
 * @Package SKN
 */

 ?>

 <?php get_header();?>
 <div id="primary">
    <main id="main" class="site-main mt-5" rol="primary">
      <?php
        if(have_posts()) {
          ?>
          <div class="container">
            <?php 
            while(have_posts()) : the_post();
              the_title();
              the_content();
             endwhile;
             ?>
        </div>
       <?php } ?>
    </main>
   </div>

 <?php get_footer();?>