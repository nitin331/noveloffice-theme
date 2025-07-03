# 📁 Novel Office – Custom WordPress Theme

A custom-built WordPress theme for **Novel Office**, developed as part of the "Web Developer Job Role - Project Assignment". This theme replicates the given Figma design and implements all required features using WordPress standards, best practices, and responsive techniques.

---

## 🚀 Features

- Custom Hero Section with animated background slider
- Responsive hamburger navigation with smooth transitions
- Solutions highlight section with center text and floating feature cards
- Trusted brands section with lazy-loaded logos
- Ask a Question section with Q&A cards and fade-in animation
- Fully responsive layout with mobile optimizations
- Custom Post Type: **Testimonials** with image, title, content, and star rating
- Testimonial carousel using **Swiper.js**
- Smooth animations and grayscale background enhancements
- Optimized for performance and best accessibility practices
- Lazy loading for all images

---

## 🧱 Technologies Used

- WordPress Theme Development
- PHP & WP Loop
- HTML5 / CSS3 / JavaScript
- Swiper.js for carousels
- Custom Post Types (CPT)
- Responsive Design (Media Queries)
- Font: [Poppins](https://fonts.google.com/specimen/Poppins)
- LocalWP for development

---

## 📂 Folder Structure

wp-content/
  ├── plugins/
  ├── themes/
       └── my-custom-theme/
           ├── assets/
           ├── footer.php
           ├── front-page.php
           ├── functions.php
           ├── header.php
           ├── index.php
           ├── README.md
           └── style.css



---

## 🛠️ Setup Instructions (LocalWP)

1. Clone or download this theme folder into:
Local Sites/your-site-name/app/public/wp-content/themes/



2. Start your site in **LocalWP**.

3. From the WP Admin Panel:
- Go to **Appearance → Themes**
- Activate `Novel Office`

4. To register testimonials:
- Go to **Testimonials** (custom post type)
- Add new entries with featured images and content

---

## 🌟 How to Add a Testimonial

- Title: Client's name
- Content: Review
- Featured Image: Client photo
- Rating: Add via custom field `rating` (1–5)

---

## 📦 Enqueued Libraries

- **Swiper.js** CDN (for testimonials)
- WordPress `wp_enqueue_script()` & `wp_enqueue_style()` used for best performance
- Lazy loading enabled via `loading="lazy"` on images

---

## 📸 Screenshot

![Novel Office Theme](assets/images/screenshot-preview.jpg)

---

## 🧾 License

This project is for **educational** and **assessment** purposes only and should not be used for commercial use without proper authorization from the Figma source owner.

---

## ✍️ Author

**Nitin Handal**  
React & WordPress Developer  
[GitHub](https://github.com/nitin331) | [Portfolio](#)

---
