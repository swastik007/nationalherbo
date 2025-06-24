<?php
// Template Name: Distributors
get_header();
?>

<div class="distributors-page">
  <section class="distributors-header">
    <div class="container">
      <h1 class="title">Global Distributors</h1>
      <p class="subtitle">Meet our valued partners bringing herbal wellness to the world.</p>
    </div>
  </section>

  <section class="distributors-list container">

    <!-- Distributor Style 1 -->
    <div class="distributor-card card-style-1">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dist1.jpg" alt="Green Essence" class="card-img">
      <div class="card-content">
        <h2>Green Essence</h2>
        <p class="location">Toronto, Canada</p>
        <p>Experts in distributing organic herbal remedies across Canada, specializing in cold-climate herbs.</p>
        <a href="#" class="btn-learn">Visit Website</a>
      </div>
    </div>

    <!-- Distributor Style 2 -->
    <div class="distributor-card card-style-2">
      <div class="card-info">
        <h2>Ayurvida Global</h2>
        <p class="location">Barcelona, Spain</p>
        <p>Trusted Mediterranean distributor of Ayurvedic teas and oils. Partnered since 2020.</p>
        <a href="#" class="btn-learn">Read More</a>
      </div>
      <div class="card-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dist2.jpg" alt="Ayurvida Global">
      </div>
    </div>

    <!-- Distributor Style 3 -->
    <div class="distributor-card card-style-3">
      <div class="circle-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dist3.jpg" alt="Herbal Union">
      </div>
      <div class="text-box">
        <h2>Herbal Union</h2>
        <p class="location">Auckland, New Zealand</p>
        <p>Known for their eco-friendly packaging and sustainable sourcing of herbal supplements.</p>
      </div>
    </div>

  </section>
</div>

<?php get_footer(); ?>
