<?php
function ma_setup() {
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'ma_setup');

function ma_assets() {
  $main  = get_template_directory() . '/style.css';
  $pages = get_template_directory() . '/css/pages.css';
  wp_enqueue_style('ma-main', get_stylesheet_uri(), array(), filemtime($main));
  // The original home page did not load pages.css, so neither does this one.
  if (!is_front_page()) {
    wp_enqueue_style('ma-pages', get_template_directory_uri() . '/css/pages.css', array('ma-main'), filemtime($pages));
  }
}
add_action('wp_enqueue_scripts', 'ma_assets');

function ma_img($file) {
  return get_template_directory_uri() . '/Images/' . $file;
}

// Map any page (by slug or title) to one of our four layouts
function ma_key_for_post($post) {
  $alias = array(
    'services' => 'services', 'service' => 'services',
    'gallery' => 'gallery',
    'about-us' => 'about-us', 'about' => 'about-us',
    'contact-us' => 'contact-us', 'contact' => 'contact-us',
  );
  foreach (array(sanitize_title($post->post_title), $post->post_name) as $k) {
    if (isset($alias[$k])) return $alias[$k];
  }
  // slugs like contact-us-2
  foreach (array('services', 'gallery', 'about-us', 'contact-us') as $base) {
    if (strpos($post->post_name, $base . '-') === 0) return $base;
  }
  return null;
}

// Find the published page for one of our layouts
function ma_find_page($slug) {
  $pages = get_posts(array('post_type' => 'page', 'post_status' => 'publish', 'numberposts' => -1));
  foreach ($pages as $p) { if ($p->post_name === $slug) return $p; }
  foreach ($pages as $p) { if (ma_key_for_post($p) === $slug) return $p; }
  return null;
}

// Always use the right layout for these pages, whatever the stored template or URL is
function ma_force_templates($template) {
  if (is_page()) {
    $post = get_queried_object();
    $key = $post ? ma_key_for_post($post) : null;
    if ($key) {
      $f = locate_template('page-' . $key . '.php');
      if ($f) return $f;
    }
  }
  return $template;
}
add_filter('template_include', 'ma_force_templates', 99);

function ma_page_url($slug) {
  $p = ma_find_page($slug);
  return $p ? get_permalink($p) : home_url('/' . $slug . '/');
}

function ma_nav_item($slug, $label) {
  if ($slug === '') {
    $url = home_url('/');
    $active = is_front_page();
  } else {
    $p = ma_find_page($slug);
    $url = ma_page_url($slug);
    $active = $p ? is_page($p->ID) : false;
  }
  printf('<li><a href="%s"%s>%s</a></li>', esc_url($url), $active ? ' class="active"' : '', esc_html($label));
}

// One-time setup: make sure the four pages exist, use the right templates,
// and pretty permalinks are on.
function ma_setup_pages() {
  $wanted = array('services' => 'Services', 'gallery' => 'Gallery', 'about-us' => 'About Us', 'contact-us' => 'Contact Us');
  $existing = get_posts(array('post_type' => 'page', 'post_status' => array('publish', 'draft', 'pending', 'private'), 'numberposts' => -1));
  foreach ($wanted as $slug => $title) {
    $page = null;
    foreach ($existing as $e) {
      if ($e->post_name === $slug || strtolower(trim($e->post_title)) === strtolower($title)) { $page = $e; break; }
    }
    if ($page) {
      if ($page->post_status !== 'publish') wp_update_post(array('ID' => $page->ID, 'post_status' => 'publish'));
      $id = $page->ID;
    } else {
      $id = wp_insert_post(array('post_title' => $title, 'post_name' => $slug, 'post_status' => 'publish', 'post_type' => 'page', 'post_content' => ''));
    }
    if ($id && !is_wp_error($id)) update_post_meta($id, '_wp_page_template', 'page-' . $slug . '.php');
  }
  if (!get_option('permalink_structure')) update_option('permalink_structure', '/%postname%/');
  flush_rewrite_rules();
}
function ma_maybe_setup() {
  if (get_option('ma_setup_done') !== '1.2') {
    ma_setup_pages();
    update_option('ma_setup_done', '1.2');
  }
}
add_action('init', 'ma_maybe_setup', 20);
