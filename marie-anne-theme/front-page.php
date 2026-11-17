<?php get_header(); ?>
    <section class="hero">
      <div class="hero-slider">
        <div class="slider-placeholder">
          <?php foreach (array('Aromatherapy.avif', 'diet.avif', 'massageoil.avif', 'Massage.avif', 'outdooryoga.avif', 'tea.avif', 'sunset.avif') as $f) : ?>
          <div class="slide">
            <img src="<?php echo esc_url(ma_img($f)); ?>" alt="" />
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="hero-content">
        <h2>Your Health, Our Priority</h2>
        <p>Quality, affordable healthcare for you and your family</p>
        <a href="<?php echo esc_url(ma_page_url('contact-us')); ?>" class="btn-cta">BOOK A SESSION</a>
      </div>
    </section>

    <section class="welcome-section">
      <div class="container">
        <h3>Welcome to Marie Anne Wellness Center</h3>
        <p>
          We are a community-centred clinic dedicated to providing friendly,
          professional and affordable healthcare services to families in and
          around Kampala. Our team of qualified nurses, midwives and clinicians
          is here to support you at every stage of life.
        </p>
        <div class="features-grid">
          <div class="feature-card">
            <span class="feature-icon">🩺</span>
            <h4>Expert Care</h4>
            <p>Qualified, compassionate health professionals</p>
          </div>
          <div class="feature-card">
            <span class="feature-icon">⏰</span>
            <h4>Open 7 Days</h4>
            <p>Convenient hours, including weekends</p>
          </div>
          <div class="feature-card">
            <span class="feature-icon">💳</span>
            <h4>Affordable Fees</h4>
            <p>Flexible payment and NHIS options</p>
          </div>
        </div>
      </div>
    </section>

    <section class="info-bar">
      <div class="container info-flex">
        <div>📍 Plot 24, Kira Road, Kampala</div>
        <div>📞 +256 779 523 768</div>
        <div>✉️ info@marieannewellness.ug</div>
      </div>
    </section>
<?php get_footer(); ?>
