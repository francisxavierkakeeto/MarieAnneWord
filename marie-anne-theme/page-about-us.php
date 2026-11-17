<?php /* Template Name: About Us */ ?>
<?php get_header(); ?>
    <section class="page-banner">
      <div class="container"><h2>About Us</h2></div>
    </section>
    <section class="welcome-section">
      <div class="container">
        <h3>Our Story</h3>
        <p>
          Marie Anne Wellness Center was created as a calm place to pause,
          unwind and look after your body. We were founded by a team of wellness
          professionals who are passionate about the benefits of massage, spa
          and holistic body wellness. Our goal is to help you relax, recharge
          and feel your very best.
        </p>
        <h3>Our Mission</h3>
        <p>
          To help people relax, recharge and feel their best through spa,
          massage and holistic body wellness.
        </p>
        <h3>Our Values</h3>
        <div class="features-grid">
          <div class="feature-card">
            <span class="feature-icon">💚</span>
            <h4>Calm</h4>
            <p>A peaceful space where you can truly switch off.</p>
          </div>
          <div class="feature-card">
            <span class="feature-icon">🤝</span>
            <h4>Respect</h4>
            <p>Your comfort, privacy and preferences always come first.</p>
          </div>
          <div class="feature-card">
            <span class="feature-icon">✅</span>
            <h4>Quality</h4>
            <p>Honest advice, quality products and reasonable pricing.</p>
          </div>
        </div>
        <h3>Meet the Team</h3>
        <div class="features-grid">
          <div class="feature-card">
            <figure>
              <img src="<?php echo esc_url(ma_img('JohnAngelMak.jpg')); ?>" alt="John Angel Mak" width="100%" />
              <figcaption>John Angel Mak</figcaption>
            </figure>
            <p>Massage Therapist</p>
          </div>
          <div class="feature-card">
            <figure>
              <img src="<?php echo esc_url(ma_img('Nadine.jpg')); ?>" alt="Nadine" />
              <figcaption>Nadine</figcaption>
            </figure>
            <p>Spa Therapist</p>
          </div>
          <div class="feature-card">
            <figure>
              <img src="<?php echo esc_url(ma_img('TomFelton.jpg')); ?>" alt="Tom Felton" width="100%" />
              <figcaption>Tom Felton</figcaption>
            </figure>
            <p>Wellness Coach</p>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
