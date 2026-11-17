<?php /* Template Name: Contact Us */ ?>
<?php get_header(); ?>
    <section class="page-banner">
      <div class="container"><h2>Contact Us</h2></div>
    </section>
    <section class="welcome-section">
      <div class="container contact-grid">
        <div>
          <h3>Visit or Call Us</h3>
          <p>
            📍 Plot 24, Kira Road, Kampala<br />📞 +256 779 523 768<br />✉️
            info@marieannewellness.ug
          </p>
          <p>
            <strong>Opening hours</strong><br />Monday to Friday: 06:15 –
            22:00<br />Saturday: 08:00 – 20:00<br />Sunday: 08:00 – 18:00
          </p>
          <p class="note">
            Please arrive 10 minutes early and tell us about any allergies or
            injuries when you book.
          </p>
        </div>
        <form
          class="booking-form"
          action="mailto:info@marieannewellness.ug"
          method="post"
          enctype="text/plain"
        >
          <h3>Book a Session</h3>
          <label>Full name <input type="text" name="name" required /></label>
          <label>Phone <input type="tel" name="phone" required /></label>
          <label>Preferred date <input type="date" name="date" /></label>
          <label
            >Service
            <select name="service">
              <option>Massage Therapy</option>
              <option>Spa Treatments</option>
              <option>Gym Membership</option>
              <option>Personal Training</option>
              <option>Yoga &amp; Stretching</option>
              <option>Wellness Coaching</option>
            </select></label
          >
          <label>Message <textarea name="message" rows="4"></textarea></label>
          <button type="submit" class="btn-cta">SEND REQUEST</button>
        </form>
      </div>
      <div class="container">
        <iframe
          class="map"
          title="Map to Marie Anne Wellness Center"
          loading="lazy"
          src="https://maps.google.com/maps?q=Kira%20Road%20Kampala&amp;output=embed"
        ></iframe>
      </div>
    </section>
<?php get_footer(); ?>
