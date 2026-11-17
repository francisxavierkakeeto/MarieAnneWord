<?php get_header(); ?>
    <section class="page-banner">
      <div class="container"><h2><?php echo is_home() ? 'Latest News' : esc_html(get_the_title()); ?></h2></div>
    </section>
    <section class="welcome-section">
      <div class="container">
        <?php while (have_posts()) : the_post(); ?>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <?php the_content(); ?>
        <?php endwhile; ?>
      </div>
    </section>
<?php get_footer(); ?>
