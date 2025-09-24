<?php
// post1.php – Photmedia Single Blog Post
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Exciting News from Photmedia</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f9fafb;
      color: #333;
      line-height: 1.7;
      margin: 0;
    }
    a { text-decoration: none; color: #2563eb; }
    a:hover { color: #1d4ed8; }

    /* Header */
    .header {
      display:flex; justify-content:space-between; align-items:center;
      padding:1rem 2rem; background:#0f172a; color:#fff; position:sticky; top:0; z-index:1000;
    }
    .logo { font-size:1.4rem; font-weight:bold; }
    nav ul { list-style:none; display:flex; gap:1rem; margin:0; padding:0; }
    nav ul li a { color:#ddd; transition:0.3s; }
    nav ul li a:hover, nav ul li a.active { color:#0ff; }

    /* Hamburger */
    .hamburger {
      display: none;
      flex-direction: column;
      gap: 5px;
      cursor: pointer;
    }
    .hamburger span {
      display: block;
      width: 25px;
      height: 3px;
      background: #fff;
      border-radius: 2px;
    }

    /* Mobile nav */
    @media (max-width: 768px) {
      nav ul {
        display: none;
        flex-direction: column;
        background: #0f172a;
        position: absolute;
        top: 60px;
        right: 0;
        width: 200px;
        padding: 1rem;
        border-radius: 8px 0 0 8px;
      }
      nav ul.active { display: flex; }
      .hamburger { display: flex; }
    }

    /* Content */
    .content-wrapper {
      max-width: 900px;
      margin: 50px auto;
      background: #fff;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.08);
      animation: fadeIn 1s ease;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .post-title {
      font-size: 2.5rem;
      margin-bottom: 10px;
      color: #0f172a;
    }
    .post-meta {
      font-size: 0.95rem;
      color: #64748b;
      margin-bottom: 25px;
    }
    .post-image {
      width: 100%;
      border-radius: 12px;
      margin: 25px 0;
    }
    .post-body h2, .post-body h3 {
      margin-top: 40px;
      margin-bottom: 15px;
      color: #0f172a;
    }
    .post-body p {
      margin-bottom: 20px;
      font-size: 1.1rem;
    }
    .highlight {
      background: #dbeafe;
      padding: 5px 10px;
      border-radius: 6px;
      font-weight: 600;
      color: #1e40af;
    }
    blockquote {
      background: #f1f5f9;
      border-left: 5px solid #2563eb;
      padding: 20px;
      font-style: italic;
      margin: 30px 0;
      color: #334155;
    }

    /* Related Posts */
    .related-posts { margin-top: 60px; }
    .related-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 25px;
    }
    .related-card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      overflow: hidden;
      transition: transform 0.3s ease;
    }
    .related-card:hover { transform: translateY(-5px); }
    .related-card img { width: 100%; height: 160px; object-fit: cover; }
    .related-card h4 { margin: 15px; font-size: 1.2rem; color: #0f172a; }
    .related-card p { margin: 0 15px 15px; color: #475569; font-size: 0.95rem; }

    footer {
      background: #0f172a;
      color: #94a3b8;
      text-align: center;
      padding: 20px;
      margin-top: 50px;
    }

    /* Scroll animations */
    .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s ease; }
    .reveal.active { opacity: 1; transform: translateY(0); }
  </style>
</head>
<body>

<header class="header">
  <div class="logo">Photmedia</div>
  <nav>
    <div class="hamburger" id="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <ul id="navMenu">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </nav>
</header>

<div class="content-wrapper">
  <h2 class="post-title reveal">🚀 Exciting News from Photmedia</h2>
  <p class="post-meta reveal">By Admin • September 19, 2025 • <span class="highlight">Web Development & Design</span></p>
  <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f" alt="Team at work" class="post-image reveal">

  <div class="post-body">
    <p class="reveal">At <strong>Photmedia</strong>, we’re stepping into a new era of <span class="highlight">digital creativity</span>. Our latest services are designed to give businesses more than just websites — we create <em>experiences</em> that connect, inspire, and grow brands.</p>

    <h2 class="reveal">🌟 Why This Matters</h2>
    <p class="reveal">In today’s fast-moving digital world, a strong online presence is a <strong>necessity</strong>, not a luxury. We merge <strong>technology, design, and storytelling</strong> to ensure every brand we work with shines online.</p>
    <img src="https://images.unsplash.com/photo-1605379399642-870262d3d051" alt="Modern web design trends" class="post-image reveal">

    <h3 class="reveal">✨ Trends We’re Embracing</h3>
    <p class="reveal">Our projects now integrate cutting-edge approaches:</p>
    <ul class="reveal">
      <li>🌙 Dark Mode Interfaces for accessibility and elegance</li>
      <li>📱 Mobile-First Layouts to reach everyone, everywhere</li>
      <li>⚡ Ultra-Fast Performance with optimized builds</li>
      <li>🎨 3D Visuals & Motion Graphics to wow audiences</li>
      <li>🔒 Security-First Development to protect your data</li>
    </ul>
    <img src="https://images.unsplash.com/photo-1627398242454-45f152d4eab1" alt="Creative design studio" class="post-image reveal">

    <blockquote class="reveal">
      “At Photmedia, we don’t just build websites — we build <strong>digital experiences</strong> that leave lasting impressions.”
    </blockquote>

    <h3 class="reveal">🚀 What’s Next</h3>
    <p class="reveal">We’re preparing to launch <strong>AI-powered content tools</strong> and more interactive, human-centered platforms. The future of web development is smarter — and we’re leading the way.</p>
    <img src="https://images.unsplash.com/photo-1556761175-129418cb2dfe" alt="Future tech innovation" class="post-image reveal">
  </div>

  <div class="related-posts">
    <h3 class="reveal">More from Photmedia</h3>
    <div class="related-grid">
      <div class="related-card reveal">
        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c" alt="Creative process">
        <h4>Behind the Scenes at Photmedia</h4>
        <p>A peek into our creative process and how we turn ideas into reality.</p>
        <a href="post2.php">Read More →</a>
      </div>
      <div class="related-card reveal">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d" alt="Tech Expo event">
        <h4>Upcoming Events</h4>
        <p>Catch us at Tech Expo 2025 and other exciting programs we’re part of.</p>
        <a href="post3.php">Read More →</a>
      </div>
    </div>
  </div>
</div>

<footer>
  <p>&copy; <?php echo date("Y"); ?> Photmedia. All rights reserved.</p>
</footer>

<script>
  // Scroll reveal animation
  const reveals = document.querySelectorAll(".reveal");
  window.addEventListener("scroll", () => {
    for (let i = 0; i < reveals.length; i++) {
      const windowHeight = window.innerHeight;
      const elementTop = reveals[i].getBoundingClientRect().top;
      if (elementTop < windowHeight - 80) {
        reveals[i].classList.add("active");
      }
    }
  });

  // Mobile nav toggle
  const hamburger = document.getElementById("hamburger");
  const navMenu = document.getElementById("navMenu");
  hamburger.addEventListener("click", () => {
    navMenu.classList.toggle("active");
  });
</script>

</body>
</html>
