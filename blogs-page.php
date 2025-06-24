<?php
// Template Name: Blogs
get_header();
?>

<div class="blogs-page">
  <section class="blogs-header">
    <div class="container">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-icon.png" alt="logo" class="section-icon mb-2">
      <h1 class="title">Our Blog</h1>
      <p class="subtitle">Latest news and updates from National Herbs</p>
    </div>
  </section>

  <section class="blogs-list container">
    <article class="blog-card">
      <div class="blog-thumbnail">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog1.jpg" alt="Basil Blog">
      </div>
      <div class="blog-content">
        <h2 class="blog-title">5 Amazing Benefits of Basil</h2>
        <p class="blog-meta">June 15, 2025 • Herbal Remedies</p>
        <p class="blog-excerpt">
          Discover how basil can help boost immunity, reduce inflammation, and improve digestion in natural ways.
        </p>
        <a href="#" class="read-more">Read More →</a>
      </div>
    </article>

    <article class="blog-card">
      <div class="blog-thumbnail">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog2.jpg" alt="Turmeric Blog">
      </div>
      <div class="blog-content">
        <h2 class="blog-title">Turmeric: Nature’s Golden Healer</h2>
        <p class="blog-meta">June 10, 2025 • Ayurveda</p>
        <p class="blog-excerpt">
          Learn about the anti-inflammatory properties of turmeric and how to incorporate it into your daily life.
        </p>
        <a href="#" class="read-more">Read More →</a>
      </div>
    </article>
  </section>
</div>

<?php get_footer(); ?>
