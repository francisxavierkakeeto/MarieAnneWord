<?php /* Template Name: Gallery */ ?>
<?php
get_header();
$items = array(
  array('gallery/images.jpg', 'Strength training area'),
  array('gallery/images%20%281%29.jpg', 'Free weights'),
  array('gallery/images%20%282%29.jpg', 'Training studio'),
  array('gallery/images%20%283%29.jpg', 'Stretch and recovery room'),
  array('gallery/images%20%284%29.jpg', 'Light-filled fitness studio'),
  array('gallery/images%20%285%29.jpg', 'Cardio floor'),
  array('gallery/images%20%286%29.jpg', 'Treadmills and weights'),
  array('gallery/images%20%287%29.jpg', 'Bright cardio room'),
  array('Aromatherapy.avif', 'Aromatherapy'),
  array('diet.avif', 'Healthy eating'),
  array('massageoil.avif', 'Massage oils'),
  array('Massage.avif', 'Massage therapy'),
  array('outdooryoga.avif', 'Outdoor yoga'),
  array('tea.avif', 'Herbal tea'),
  array('sunset.avif', 'Evening calm'),
);
?>
    <section class="page-banner">
      <div class="container"><h2>Gallery</h2></div>
    </section>
    <section class="welcome-section">
      <div class="container">
        <h3>Life at Marie Anne</h3>
        <marquee behavior="" direction="left to right">
          <p>A look at our fitness spaces and wellness activities.</p>
        </marquee>
        <div class="gallery-grid">
          <?php foreach ($items as $i) : ?>
          <figure>
            <img src="<?php echo esc_url(ma_img($i[0])); ?>" alt="<?php echo esc_attr($i[1]); ?>" loading="lazy" />
            <figcaption><?php echo esc_html($i[1]); ?></figcaption>
          </figure>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
