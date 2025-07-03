<?php get_header(); ?>

<!-- ===== Hero Section with Background Slider ===== -->
<section class="hero-section">
  <div class="hero-slider">
    <div class="hero-slide active" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.jpg');"></div>
    <div class="hero-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/frame.svg');"></div>
    <div class="hero-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/office3.jpg');"></div>
    <div class="hero-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/office4.jpg');"></div>
  </div>

  <div class="hero-content">
    <h1>OFFICES</h1>
    <h2>WITH</h2>
    <h3>NOVEL</h3>
    <p class="scroll-hint">Scroll to know more</p>
  </div>
</section>

<!-- ===== Solutions Highlights Section ===== -->
<section class="solutions-section">
  <div class="solutions-wrapper">
    <!-- Center Image -->
    <div class="solutions-image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pic.png" alt="Offices with Novel" loading="lazy">
      <div class="center-text">
        <h2>OFFICES<br><span>WITH</span><br>NOVEL</h2>
      </div>
    </div>

    <!-- Feature Cards -->
    <div class="feature-box top-left">
      <h3>HASSLE - FREE & FASTEST !</h3>
      <p>Office setup with zero wait time. No hidden cost or delay.</p>
    </div>

    <div class="feature-box top-right">
      <h3>CUSTOMIZABLE LAYOUTS</h3>
      <p>Choose from a variety of office layouts to fit your brand.</p>
    </div>

    <div class="feature-box bottom-left">
      <h3>FULLY FURNISHED</h3>
      <p>Modern, ergonomic, plug-n-play workspaces ready to go.</p>
    </div>

    <div class="feature-box bottom-right">
      <h3>MANAGED 24x7</h3>
      <p>Reception, security, cleaning & maintenance taken care of.</p>
    </div>
  </div>
</section>

<!-- ===== Trusted by Brands Section ===== -->
<section class="trusted-section">
  <div class="container">
    <div class="trusted-text">
      <h2>Trusted by leading companies</h2>
      <p>Join the growing list of companies who have built their dream offices with Novel.</p>
    </div>
    <div class="trusted-logos">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/unacademy.png" alt="Unacademy" loading="lazy">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/nasscom.png" alt="NASSCOM" loading="lazy">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/hitachi.png" alt="Hitachi" loading="lazy">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pep.png" alt="Pepe Jeans" loading="lazy">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/airasia.png" alt="AirAsia" loading="lazy">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/olx.png" alt="OLX" loading="lazy">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/qatar.png" alt="Qatar Airways" loading="lazy">

    </div>
  </div>
</section>

<!-- ===== Ask a Question Section ===== -->
<section class="ask-question-section">
  <div class="container">
    <div class="ask-left">
      <h2>Want to know where the best Office Spaces are?</h2>

      <div class="question-card animate-fade">
        <div class="icon">💡</div>
        <div class="content">
          <h4>Where are your office locations?</h4>
          <p>We offer prime locations across major Indian cities including Bengaluru, Hyderabad, and more.</p>
        </div>
      </div>

      <div class="question-card animate-fade">
        <div class="icon">🛠</div>
        <div class="content">
          <h4>Are your offices customizable?</h4>
          <p>Yes! All our offices can be personalized to suit your business style and team size.</p>
        </div>
      </div>

      <a href="#contact" class="ask-btn">Talk to Us</a>
    </div>

    <div class="ask-right">
      <div class="image-row animate-fade">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ask-section.jpg" alt="Ask 1" loading="lazy">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ask-section2.jpg" alt="Ask 2" loading="lazy">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ask-section3.jpg" alt="Ask 3" loading="lazy">

      </div>
    </div>
  </div>
</section>

<section class="testimonial-slider-section">
  <div class="container">
    <h2>What Our Clients Say</h2>

    <div class="swiper testimonial-swiper">
      <div class="swiper-wrapper">
        <?php
        $args = array(
          'post_type' => 'testimonial',
          'posts_per_page' => 5
        );
        $loop = new WP_Query($args);
        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="swiper-slide testimonial-slide">
              <div class="testimonial-card">
                <?php if (has_post_thumbnail()) {
                  the_post_thumbnail('thumbnail', ['class' => 'testimonial-img', 'loading' => 'lazy']);
                } ?>
                <h4><?php the_title(); ?></h4>
                
                <?php if ($rating = get_post_meta(get_the_ID(), 'testimonial_rating', true)) : ?>
                  <div class="testimonial-rating">
                    <?php
                    $rating = intval($rating);
                    for ($i = 0; $i < 5; $i++) {
                      echo $i < $rating ? '⭐' : '☆';
                    }
                    ?>
                  </div>
                <?php endif; ?>

                <p><?php the_content(); ?></p>
              </div>
            </div>
          <?php endwhile;
          wp_reset_postdata();
        else : ?>
          <p>No testimonials found.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- Swiper Init -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.testimonial-swiper', {
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      slidesPerView: 1,
      spaceBetween: 30,
      breakpoints: {
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 }
      }
    });
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Swiper Init
    new Swiper('.testimonial-swiper', {
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      slidesPerView: 1,
      spaceBetween: 30,
      breakpoints: {
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 }
      }
    });

    // Animation on scroll
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
        }
      });
    }, {
      threshold: 0.3
    });

    document.querySelectorAll(".testimonial-slide").forEach(slide => {
      observer.observe(slide);
    });
  });
</script>




<script>
  document.addEventListener("DOMContentLoaded", () => {
    const slider = document.querySelector('.hero-slider');
    const slides = document.querySelectorAll('.hero-slide');
    let currentIndex = 0;

    if (slider && slides.length > 1) {
      setInterval(() => {
        currentIndex = (currentIndex + 1) % slides.length;
        slider.style.transform = `translateX(-${currentIndex * 100}vw)`;
      }, 2000);
    }
  });
</script>


<?php get_footer(); ?>
