<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<header class="hero-header">
  <div class="logo">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Novel Office">
  </div>
  <nav class="main-nav">
    <ul>
      <li><a href="#">HOME</a></li>
      <li><a href="#">SOLUTIONS</a></li>
      <li><a href="#">LOCATIONS</a></li>
      <li><a href="#">INVESTMENTS</a></li>
      <li><a href="#">CONTACT US</a></li>
      <li><a href="#">MORE</a></li>
    </ul>
  </nav>

   
   <div class="hamburger" id="hamburger">
    <span></span>
    <span></span>
    <span></span>
  </div>
</header>

