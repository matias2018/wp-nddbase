<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$menu = wp_get_nav_menu_items( 'Header' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
  <!-- Navbar -->
  <div class="navbar" id="navbar">
      <!-- mobile -->
      <a href="#" class="burger-menu hide-on-desktop">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </a>
      <!-- mobile -->
    <div class="container flex">
      <div class="navbar--logo">
        <a tabindex="-1" href="<?= site_url(); ?>" aria-label="Fundo Rainha D. Leonor home page">
          <img src="<?php echo get_theme_file_uri('/images/real/logos/Logo_frdl_white.png'); ?>" alt="Fundo Rainha D. Leonor" class="logo-nav" aria-hidden="true">
        </a>
      </div> 
      <nav class="navbar-desktop">
        <ul class="nav-items">
          <li
            <?php if(is_front_page()) echo 'class="nav-item active"'?>class="nav-item">
              <a href="<?= site_url(); ?>">Home</a>
            </li>
          <li
            <?php if(is_page('sobre-nos')) echo 'class="nav-item active"'?> class="nav-item">
              <a href="<?= site_url('/sobre-nos'); ?>">Sobre Nós</a>
            </li>
          <li <?php if(is_page('candidaturas')) echo 'class="nav-item active"'?> class="nav-item">
            <a href="<?= site_url('/candidaturas'); ?>">Candidaturas</a>
          </li>
          <li
            <?php if(get_post_type() == 'obra') echo 'class="nav-item active"'?> class="nav-item">
            <a href="<?= site_url('/obras'); ?>">Obras</a>
          </li>
          <li <?php if(get_post_type() == 'post') echo 'class="nav-item active"'?> class="nav-item">
            <a href="<?= site_url('/noticias'); ?>">Notícias</a>
          </li>
          <li <?php if(is_page('contactos')) echo 'class="nav-item active"'?> class="nav-item">
            <a href="<?= site_url('/contactos'); ?>">Contactos</a>
          </li>
        </ul>
      </nav>
    </div><!-- /class="container flex" -->
  </div>
</header>

