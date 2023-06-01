<?php
/** Page template
 * @Package SKN
 */

 ?>

 <?php get_header();?>
 <div id="primary">
    <main id="main" class="site-main mt-5" rol="primary">
        <?php 
        if(is_home() && !is_front_page()) {
        ?>
        <header class="mb-5">
            <h1 class="page-title screen-render-text">
                <?php single_post_title(); ?>
            </h1>
        </header>

        <?php }?>
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