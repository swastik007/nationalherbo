<?php
// Template Name: Products
get_header();
?>

<section class="products-hero-section position-relative py-5">
  <div class="container text-center">
    <img src="<?php bloginfo('template_directory'); ?>/assets/images/herbo-icon.png" alt="Herbo Icon" class="herbo-icon-bg d-none d-md-block">
    
    <h1 class="hero-title mb-3">Explore Our Herbal Product Range</h1>
    <p class="hero-subtext text-muted mb-0">
      Nature’s finest blends — crafted for healthy skin, hair & holistic wellness.
    </p>
  </div>
</section>

<section class="product-grid-section py-5">
  <div class="container">

    <div class="section-header text-center mb-5">
      <h2 class="section-title">Our Herbal Products</h2>
      <p class="text-muted">Carefully crafted for your natural beauty and wellness</p>
    </div>

    <div class="row g-4">

      <!-- Product 1 -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="product-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/scar-shine.png" class="img-fluid" alt="Scar Shine Combo">
          <div class="product-body">
            <h5 class="product-title">Scar Shine Combo</h5>
            <p class="product-price">Rs. 899</p>
            <p class="product-ingredients"><strong>Ingredients:</strong> Turmeric, Saffron, Coconut Oil</p>
            <p class="product-desc">Reduces scars and restores glowing skin naturally.</p>
          </div>
        </div>
      </div>

      <!-- Repeat .product-card for more products -->

    </div>
  </div>
</section>


<?php
get_footer();
?>