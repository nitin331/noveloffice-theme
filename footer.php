<footer class="site-footer">
  <div class="footer-container">

    <!-- Left: Logo + description -->
    <div class="footer-left">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Novel Office Logo" class="footer-logo" loading="lazy">
      <p>We provide custom-built office spaces across major cities in India. Flexible, scalable, and ready to move in.</p>
    </div>

    <!-- Center: Links -->
    <div class="footer-center">
      <div class="footer-column">
        <h4>Company</h4>
        <ul class="footer-links">
          <li><a href="/about">About</a></li>
          <li><a href="/careers">Careers</a></li>
          <li><a href="/blog">Blog</a></li>
        </ul>
      </div>
      <div class="footer-column">
        <h4>Solutions</h4>
        <ul class="footer-links">
          <li><a href="/locations">Locations</a></li>
          <li><a href="/customization">Custom Offices</a></li>
          <li><a href="/enterprise">Enterprise Spaces</a></li>
        </ul>
      </div>
    </div>

    <!-- Right: Contact Info -->
    <div class="footer-contact">
      <h4>Contact</h4>
      <p>📍 Bengaluru, India</p>
      <p>📞 +91 98765 43210</p>
      <p>📧 info@noveloffice.com</p>
      <div class="footer-socials">
        <a href="#" class="social-icon">🔗</a>
        <a href="#" class="social-icon">📘</a>
        <a href="#" class="social-icon">🐦</a>
      </div>
    </div>

  </div>

  <!-- Bottom Strip -->
  <div class="footer-bottom">
    <p>© <?php echo date('Y'); ?> Novel Office. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms</a></p>
  </div>




</footer>

<!-- ✅ Hamburger Toggle Script -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.getElementById("hamburger");
    const navMenu = document.querySelector(".main-nav ul");

    if (hamburger && navMenu) {
      hamburger.addEventListener("click", function () {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
        document.body.classList.toggle("menu-open");
      });
    }
  });
</script>

<?php wp_footer(); ?>
</body>
</html>
