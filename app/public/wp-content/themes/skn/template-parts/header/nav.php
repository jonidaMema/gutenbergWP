<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <?php 
    if (function_exists('the_custom_logo')){
      the_custom_logo();
    }
    ?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled">Disabled</a>
      </div>
    </div>
  </div>
</nav>

<?php 
wp_nav_menu( array(
	'menu'           => 'Header Menu', // Do not fall back to first non-empty menu.
	'theme_location' => 'skn-header-menu',
	'fallback_cb'    => false // Do not fall back to wp_page_menu()
) );

?>