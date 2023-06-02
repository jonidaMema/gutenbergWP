<?php 
/**
 * Content none template
 * @Package SKN
 */

?>
<section class="no-result not-found">
    <header class="page-header">
        <h1 class="page-title">
            <?php esc_html_e('Nothing Found', 'skn');?>
        </h1>
    </header>

    <div class="page-content">
        <?php
        if (is_home() && current_user_can('publish_post')) {
            ?>
            <p><?php printf(wp_kses(
                __('Ready to publish your first post? <a href="%S">Get started here </a>', 'skn'),
                [
                    'a'=>[
                        'href'=>[] 
                        ]
                ]
            ),
            esc_url(admin_url('post-new.php'))
            )
   
        ?>
        </p>
      <?php  } elseif(is_search()) { ?>
        <p><?php esc_html_e('Sorry but nothing matched your search item. Please try again with different keywords', 'skn');?></p>

     <?php 
     get_search_form();
     } else { ?>
        <p><?php esc_html_e('It seems that we can not find what you are looking for. Perhaps search can help you', 'skn');?></p>
    <?php  get_search_form(); }
       ?>
</section>