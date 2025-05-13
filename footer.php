<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package YourThemeName
 */
?>

<footer class="footer bg-light border-top mt-5">
  <div class="container py-4">
    <div class="row">
      <!-- Contact Information -->
      <div class="col-md-4 mb-3">
        <h5>Contact Us</h5>
        <p>123 Main Street<br>
        Kathmandu, Nepal</p>
        <p>Phone: <a href="tel:+977123456789">+977 123456789</a><br>
        Email: <a href="mailto:info@example.com">info@nationalherbs.com</a></p>
      </div>

      <!-- Quick Links -->
      <div class="col-md-4 mb-3">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
          <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About Us</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>">Services</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact Us</a></li>
        </ul>
      </div>

      <!-- Newsletter Subscription -->
      <div class="col-md-4 mb-3">
        <h5>Subscribe to our Newsletter</h5>
        <form action="#" method="post">
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Enter your email" required>
          </div>
          <button type="submit" class="btn">Subscribe</button>
        </form>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col">
        <p class="mb-0">&copy; <?php echo date('Y'); ?> National Herbs. All rights reserved.</p>
        <div class="social-icons mt-2">
          <a href="#" class="text-dark me-3"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-dark me-3"><i class="bi bi-twitter"></i></a>
          <a href="#" class="text-dark"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
	  <div class="col right-0 text-right">
		<p>Designed By: VS Nepal</p>
	  </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
