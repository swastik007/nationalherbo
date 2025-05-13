<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header id="masthead" class="site-header">
		<img src="<?php bloginfo('template_directory'); ?>/assets/images/national-herbo.png" alt="Border" style="height: 50px;">

    <button class="nav-toggle" aria-label="Toggle menu">
      <span></span><span></span><span></span>
    </button>

    <nav class="main-nav">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'menu-1',
          'menu_class'     => 'menu',
          'container'      => false
        ));
      ?>
    </nav>

    <div class="header-right">
      <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="btn">Contact Us</a>
      <!-- <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div> -->
    </div>
  </div>
</header>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.querySelector('.nav-toggle');
    const nav = document.querySelector('.main-nav');

    toggle.addEventListener('click', () => {
      toggle.classList.toggle('open');
      nav.classList.toggle('active');
    });
  });
</script>
