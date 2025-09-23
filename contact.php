<?php
// contact.php - PMT Ghana Contact Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact Us - PMT Ghana</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="styles.css" />
  <style>
  /* Default: hide on mobile */
#navMenu {
  display: none;
}

/* Show when active (mobile toggle) */
#navMenu.active {
  display: block;
}

/* On medium screens and up (≥768px), always show */
@media (min-width: 768px) {
  #navMenu {
    display: flex !important;
  }
}

  </style>
</head>
<body class="bg-white text-gray-800">

  <!-- Navbar -->
  <header class="bg-white shadow-md fixed w-full top-0 left-0 z-50">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
      <!-- Logo -->
      <a href="index.php" class="text-2xl font-bold text-blue-600">PMT Ghana</a>

      <!-- Hamburger (Mobile) -->
      <button id="hamburger" class="md:hidden text-gray-800 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>

      <!-- Navigation Links -->
      <nav id="navMenu" class="absolute top-full left-0 w-full bg-white shadow-md md:shadow-none md:static md:w-auto md:flex space-y-4 md:space-y-0 md:space-x-6 text-center md:text-left">
        <a href="index.php" class="block py-2 px-4 hover:text-blue-600">Home</a>
        <a href="about.php" class="block py-2 px-4 hover:text-blue-600">About</a>
        <a href="Service.php" class="block py-2 px-4 hover:text-blue-600">Service</a>
        <a href="portfolio.php" class="block py-2 px-4 hover:text-blue-600">Portfolio</a>
        <a href="blog.php" class="block py-2 px-4 hover:text-blue-600">Blog</a>
        <a href="contact.php" class="block py-2 px-4 text-blue-600 font-semibold">Contact</a>
      </nav>
    </div>
  </header>

  <!-- Push content down (because navbar is fixed) -->
  <div class="h-20"></div>

  <!-- Hero Section -->
  <section class="bg-gradient-to-r from-blue-600 to-teal-500 text-white py-20 px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h1>
    <p class="max-w-2xl mx-auto text-lg">
      We’d love to hear from you! Whether you have a question about our services, 
      need support, or want to discuss your next project, reach out to us.
    </p>
  </section>

  <!-- Contact Form & Info -->
  <section class="py-16 px-6 max-w-6xl mx-auto grid md:grid-cols-2 gap-10">
    <!-- Contact Form -->
    <div class="bg-white shadow-lg rounded-xl p-6">
      <h2 class="text-2xl font-semibold mb-4 text-blue-600">Send Us a Message</h2>
      <form action="send_message.php" method="POST" class="space-y-4">
        <input type="text" name="name" placeholder="Your Name" required 
          class="w-full border p-3 rounded-lg focus:ring-2 focus:ring-blue-500" />
        <input type="email" name="email" placeholder="Your Email" required 
          class="w-full border p-3 rounded-lg focus:ring-2 focus:ring-blue-500" />
        <input type="text" name="subject" placeholder="Subject" 
          class="w-full border p-3 rounded-lg focus:ring-2 focus:ring-blue-500" />
        <textarea name="message" placeholder="Your Message" required 
          class="w-full border p-3 rounded-lg h-32 focus:ring-2 focus:ring-blue-500"></textarea>
        <button type="submit" 
          class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
          Submit
        </button>
      </form>
    </div>

    <!-- Contact Information -->
    <div>
      <h2 class="text-2xl font-semibold mb-4 text-blue-600">Get in Touch</h2>
      <p class="mb-6 text-gray-700">
        Reach out to us through any of the following channels. Our team is ready to assist you.
      </p>
      <ul class="space-y-4 mb-6">
        <li><strong>Phone:</strong> <a href="tel:+233559093818" class="text-blue-600 hover:underline">+233 55 909 3818</a></li>
        <li><strong>Email:</strong> <a href="mailto:info@photmediaghana.com" class="text-blue-600 hover:underline">info@photmediaghana.com</a></li>
        <li><strong>Office Address:</strong> PMT Ghana, City Galleria, Accra, Ghana</li>
      </ul>
      <!-- Responsive Map -->
      <div class="rounded-lg overflow-hidden shadow-md">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.6315544838426!2d-0.17505312601580425!3d5.6212920943597195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9b6909894619%3A0xbc66311507dbc71c!2sCity%20Galleria%2C%20Accra!5e0!3m2!1sen!2sgh!4v1758604599490!5m2!1sen!2sgh" 
          class="w-full h-64 md:h-80 lg:h-96 border-0" 
          allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </section>

  <!-- Call-to-Action Banner -->
  <section class="bg-gradient-to-r from-teal-500 to-blue-600 text-white py-16 px-6 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-4">Let’s Build Something Great Together</h2>
    <a href="contact.php" 
      class="inline-block bg-white text-blue-600 font-semibold px-6 py-3 rounded-lg shadow hover:bg-gray-100 transition">
      Start Your Project
    </a>
  </section>

  <!-- Script for Hamburger -->
  <script>
    const hamburger = document.getElementById("hamburger");
    const navMenu = document.getElementById("navMenu");
    hamburger.addEventListener("click", () => {
      navMenu.classList.toggle("active");
    });
  </script>

</body>
</html>
