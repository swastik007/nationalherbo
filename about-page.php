<?php
// Template Name: About Us
get_header();
?>

<section class="about-hero-section py-24 px-4 text-center">
  <div class="container mx-auto">
    <h1 class="text-2xl md:text-4xl font-semibold leading-relaxed text-gray-800 max-w-2xl mx-auto">
      It’s the only outfit you’ll wear <br class="hidden md:block" />
      every day of your life.
    </h1>
  </div>
</section>

<section class="our-journey-section py-5 py-md-5 position-relative overflow-hidden">
  <div class="container">
    <div class="row gy-4 gy-md-5 align-items-center">

      <!-- Left: Text -->
      <div class="col-12 col-lg-6 position-relative">
        <div class="section-header text-center mb-4">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-icon.png" alt="logo" class="section-icon mb-2">
          <h2 class="section-title mb-3">Our Journey</h2>
        </div>
        <p class="para mb-3" style="text-align: justify;">
          From the foothills of Nepal, <strong>National Herbs</strong> began its journey blending age-old herbal wisdom with modern science. What started as a local remedy initiative has grown into a trusted wellness brand.
          <br><br>
          Each product is a reflection of our commitment to purity, sustainability, and skin-friendly innovation. With time, our belief in clean, chemical-free beauty has reached thousands across the country — and we’re just getting started.
        </p>
      </div>

      <!-- Right: Image with green blob only -->
      <div class="col-12 col-lg-6">
        <div class="position-relative text-center">
          <!-- Soft green background blob -->
          <div class=" position-absolute top-0 start-50 translate-middle rounded-circle"></div>

          <!-- Image -->
          <img class="img-fluid rounded shadow position-relative" loading="lazy" 
               src="<?php echo get_template_directory_uri(); ?>/assets/images/banner003.png" 
               alt="Our Journey" style="width: 480px; height: 300px; object-fit: cover;">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mission-vision-section py-5 position-relative overflow-hidden">
  <div class="container">
    <!-- Soft herbo icon background -->
    <img src="<?php bloginfo('template_directory'); ?>/assets/images/herbo-icon.png" 
         alt="Herbo Watermark" 
         class="herbo-watermark-icon d-none d-lg-block">

    <div class="row gy-5">
      <!-- Mission -->
      <div class="col-12 col-md-6">
        <div class="section-header mb-3 text-center">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-icon.png" alt="herbo icon" class="section-icon mb-2">
          <h2 class="section-title mb-3">Our Mission</h2>
        </div>
        <p class="para" style="text-align: justify;">
          To empower individuals to feel confident in their skin using high-quality, affordable, and naturally inspired skincare products. We’re committed to clean beauty — no harsh chemicals, no false promises, just real results.
        </p>
      </div>

      <!-- Vision -->
      <div class="col-12 col-md-6">
        <div class="section-header mb-3 text-center">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-icon.png" alt="herbo icon" class="section-icon mb-2">
          <h2 class="section-title mb-3">Our Vision</h2>
        </div>
        <p class="para" style="text-align: justify;">
          To become Nepal’s most trusted beauty brand by creating products that not only transform skin but also uplift lives through ethical practices, innovation, and care.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="core-values-section py-5">
  <div class="container">
    <!-- Section Header -->
    <div class="section-header text-center mb-5">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-icon.png" alt="Herbo Icon" class="section-icon mb-2">
      <h2 class="section-title">Why Choose Us</h2>
    </div>

    <!-- Value Boxes -->
    <div class="row g-4">
      <!-- Value 1 -->
      <div class="col-12 col-md-6 col-lg-3">
        <div class="value-box box-1 text-center px-3 py-4">
          <i class="fas fa-seedling fa-2x mb-3"></i>
          <h4 class="mb-2">Rooted in Nature</h4>
          <p class="para small">Ethically sourced herbs from sustainable farms.</p>
        </div>
      </div>

      <!-- Value 2 -->
      <div class="col-12 col-md-6 col-lg-3">
        <div class="value-box box-2 text-center px-3 py-4">
          <i class="fas fa-flask fa-2x mb-3"></i>
          <h4 class="mb-2">Chemical Free</h4>
          <p class="para small">We say no to harsh chemicals. Just pure, natural care.</p>
        </div>
      </div>

      <!-- Value 3 -->
      <div class="col-12 col-md-6 col-lg-3">
        <div class="value-box box-3 text-center px-3 py-4">
          <i class="fas fa-microscope fa-2x mb-3"></i>
          <h4 class="mb-2">Science-Backed</h4>
          <p class="para small">We blend ancient herbal wisdom with modern formulation.</p>
        </div>
      </div>

      <!-- Value 4 -->
      <div class="col-12 col-md-6 col-lg-3">
        <div class="value-box box-4 text-center px-3 py-4">
          <i class="fas fa-coins fa-2x mb-3"></i>
          <h4 class="mb-2">Affordable & Honest</h4>
          <p class="para small">Transparent ingredients and pricing you can trust.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="meet-team-section py-5">
  <div class="container">

    <!-- Section Heading -->
    <div class="section-header text-center mb-5">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-icon.png" alt="Herbo Icon" class="section-icon mb-2">
      <h2 class="section-title">Meet Our Team</h2>
    </div>

    <!-- Team Grid -->
    <div class="row g-4">
      <!-- Member 1 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="team-card text-center">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/team1.jpg" alt="Team Member" class="team-img mb-3">
          <h5 class="mb-1">Sita Sharma</h5>
          <p class="text-muted small">Herbal Product Expert</p>
        </div>
      </div>

      <!-- Member 2 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="team-card text-center">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/team2.jpg" alt="Team Member" class="team-img mb-3">
          <h5 class="mb-1">Ramesh Thapa</h5>
          <p class="text-muted small">Head of Research</p>
        </div>
      </div>

      <!-- Member 3 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="team-card text-center">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/team3.jpg" alt="Team Member" class="team-img mb-3">
          <h5 class="mb-1">Anjali Kunwar</h5>
          <p class="text-muted small">Co-Founder & Ayurvedic Advisor</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="certifications-section py-5 bg-light position-relative">
  <div class="container">
    <!-- Section Header -->
    <div class="section-header text-center mb-5">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-icon.png" alt="icon" class="section-icon mb-2">
      <h2 class="section-title">Certifications & Recognition</h2>
      <p class="text-muted">Trusted, Approved, and Recognized by Leading Authorities</p>
    </div>

    <!-- Logos Grid -->
    <div class="row g-4 justify-content-center align-items-center">
      <div class="col-6 col-md-3 text-center">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/certificate1.jpg" alt="Certification 1" class="cert-logo">
      </div>
      <div class="col-6 col-md-3 text-center">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/certificate2.jpg" alt="Certification 2" class="cert-logo">
      </div>
      <div class="col-6 col-md-3 text-center">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/certificate3.jpg" alt="Certification 3" class="cert-logo">
      </div>
      <div class="col-6 col-md-3 text-center">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/certificate4.jpg" alt="Certification 4" class="cert-logo">
      </div>
    </div>
  </div>
</section>

<section class="sustainability-highlight-section py-5 position-relative">
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- Left: Image -->
      <div class="col-12 col-lg-6">
        <div class="image-wrap position-relative">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/sustainability.jpg" alt="Sustainability" class="img-fluid rounded shadow">
        </div>
      </div>

      <!-- Right: Features -->
      <div class="col-12 col-lg-6">
        <div class="section-header text-center mb-4">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-icon.png" alt="icon" class="section-icon mb-2">
          <h2 class="section-title">Caring for Nature & You</h2>
          <p class="text-muted">Our approach to sustainability is simple — give back more than we take.</p>
        </div>

        <div class="sustainability-points">
          <!-- Point 1 -->
          <div class="d-flex align-items-start mb-4">
            <i class="fas fa-seedling fa-2x text-success me-3"></i>
            <div>
              <h5 class="mb-1">Responsibly Sourced Herbs</h5>
              <p class="mb-0">We work with eco-conscious farmers across Nepal to ensure ethical harvesting.</p>
            </div>
          </div>

          <!-- Point 2 -->
          <div class="d-flex align-items-start mb-4">
            <i class="fas fa-box-open fa-2x text-success me-3"></i>
            <div>
              <h5 class="mb-1">Plastic-Free Packaging</h5>
              <p class="mb-0">Our packaging is recyclable, biodegradable, and designed to reduce waste.</p>
            </div>
          </div>

          <!-- Point 3 -->
          <div class="d-flex align-items-start mb-4">
            <i class="fas fa-hand-holding fa-2x text-success me-3"></i>
            <div>
              <h5 class="mb-1">Community Empowerment</h5>
              <p class="mb-0">We uplift women-led cooperatives through fair trade and local employment.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<section class="manufacturing-process-section py-5 bg-light">
  <div class="container">
    <div class="section-header text-center mb-5">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-icon.png" alt="icon" class="section-icon mb-2">
      <h2 class="section-title">Our Manufacturing Process</h2>
      <p class="text-muted">From nature to packaging — every step matters.</p>
    </div>

    <div class="row g-4">

      <!-- Step 1 -->
      <div class="col-12 col-md-6">
        <div class="process-card">
          <span class="step-number">01</span>
          <div class="process-icon"><i class="fas fa-seedling"></i></div>
          <h5>Harvesting</h5>
          <p>We carefully collect raw herbs from clean and sustainable farms.</p>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="col-12 col-md-6">
        <div class="process-card">
          <span class="step-number">02</span>
          <div class="process-icon"><i class="fas fa-sun"></i></div>
          <h5>Drying</h5>
          <p>Herbs are dried naturally to maintain nutrients and quality.</p>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="col-12 col-md-6">
        <div class="process-card">
          <span class="step-number">03</span>
          <div class="process-icon"><i class="fas fa-vial"></i></div>
          <h5>Formulation</h5>
          <p>Expert teams blend ingredients into clean, effective formulations.</p>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="col-12 col-md-6">
        <div class="process-card">
          <span class="step-number">04</span>
          <div class="process-icon"><i class="fas fa-box"></i></div>
          <h5>Packaging</h5>
          <p>Eco-friendly packaging ensures freshness and planet-conscious delivery.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="newsletter-section py-5">
  <div class="container">
    <div class="row align-items-center justify-content-between g-4">
      
      <!-- Text Column -->
      <div class="col-12 col-md-6">
        <div class="section-header">
          <h2 class="section-title">Stay Connected with Nature</h2>
          <p class="text-muted">Subscribe to receive herbal insights, new product updates, and exclusive offers. No spam — just wellness!</p>
        </div>
      </div>

      <!-- Form Column -->
      <div class="col-12 col-md-6">
        <form class="newsletter-form d-flex flex-column flex-md-row align-items-stretch gap-2">
          <input type="email" class="form-control rounded-pill" placeholder="Enter your email" required>
          <button type="submit" class="btn btn-success rounded-pill px-4">Subscribe</button>
        </form>
      </div>

    </div>
  </div>
</section>



<?php
get_footer();
?>