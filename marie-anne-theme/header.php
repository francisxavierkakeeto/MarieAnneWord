<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="site-header">
      <div class="header-container">
        <div class="logo-area">
          <div class="logo-monogram">
            <img src="<?php echo esc_url(ma_img('Backgroud1.png')); ?>" alt="" />
          </div>
          <div class="logo-text">
            <h1>Marie Anne Wellness Center</h1>
            <p>Caring for Families, Every Step of the Way</p>
          </div>
        </div>
        <div class="search-bar">
          <input type="text" placeholder="Search..." aria-label="Search" />
          <button type="submit">🔍 Search</button>
        </div>
      </div>
      <nav class="main-nav">
        <ul>
          <?php
          ma_nav_item('', 'HOME');
          ma_nav_item('services', 'SERVICES');
          ma_nav_item('gallery', 'GALLERY');
          ma_nav_item('about-us', 'ABOUT US');
          ma_nav_item('contact-us', 'CONTACT US');
          ?>
        </ul>
      </nav>
    </header>
