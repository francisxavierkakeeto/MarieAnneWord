<?php /* Template Name: Services */ ?>
<?php
get_header();
$cards = array(
  array('Massage.avif', '💆', 'Massage Therapy', 'Swedish, deep tissue, hot stone and aromatherapy massage to ease tension and restore energy.'),
  array('facial.avif', '🧖', 'Spa Treatments', 'Facials, body scrubs and wraps, and pampering treatments to leave you glowing.'),
  array('outdooryoga.avif', '🏋️', 'Gym &amp; Fitness', 'A fully equipped gym with cardio, free weights and strength machines, plus personal training.'),
  array('sunset.avif', '🧘', 'Yoga &amp; Stretching', 'Group and one-on-one sessions to build flexibility, balance and calm.'),
  array('diet.avif', '🥗', 'Nutrition &amp; Wellness Coaching', 'Healthy eating guidance and lifestyle coaching to support your goals.'),
  array('tea.avif', '🍵', 'Relaxation &amp; Recovery', 'Quiet spaces, herbal teas and recovery time to unwind after your session.'),
);
?>
    <section class="page-banner">
      <div class="container"><h2>Our Services</h2></div>
    </section>
    <section class="welcome-section">
      <div class="container">
        <h3>Our Treatments</h3>
        <p class="six">
          Relax, recharge and feel your best with our spa, massage and body
          wellness services.
        </p>
        <div class="features-grid1">
          <?php foreach ($cards as $c) : ?>
          <div
            class="feature-card1"
            style="
              background-image: url(<?php echo esc_url(ma_img($c[0])); ?>);
              background-position: center;
              background-size: cover;
              background-repeat: no-repeat;
            "
          >
            <span class="feature-icon"><?php echo $c[1]; ?></span>
            <h4><?php echo $c[2]; ?></h4>
            <p><?php echo $c[3]; ?></p>
          </div>
          <?php endforeach; ?>
        </div>
        <p class="note">
          Appointments are recommended for massage and spa treatments.
        </p>
        <a href="<?php echo esc_url(ma_page_url('contact-us')); ?>" class="btn-cta">BOOK A SESSION</a>
      </div>
    </section>
<?php get_footer(); ?>
