<?php
// about.php - PMT Ghana About Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>About PMT Ghana</title>
  <style>
    /* ========== RESET & BASE ========== */
    * { margin:0; padding:0; box-sizing:border-box; font-family:"Segoe UI", Tahoma, sans-serif; }
    body { background:#fff; color:#333; line-height:1.6; }

    a { text-decoration:none; }
    img { max-width:100%; height:auto; display:block; border-radius:12px; }

    /* Container for consistent margins */
    .container {
  max-width: 1000px;   /* tighter than 1200px */
  margin: 0 auto;
  padding: 0 1.5rem;  /* small inside spacing */
}
    /* ========== HEADER ========== */
    .header {
      display:flex; justify-content:space-between; align-items:center;
      padding:1rem 2rem; background:#111; color:#fff; position:sticky; top:0; z-index:1000;
    }
    .logo { font-size:1.4rem; font-weight:bold; }
    nav ul { list-style:none; display:flex; gap:1rem; }
    nav ul li a { color:#ddd; transition:0.3s; }
    nav ul li a:hover, nav ul li a.active { color:#0ff; }

    /* Hamburger */
    .hamburger { display:none; font-size:1.8rem; cursor:pointer; background:none; border:none; color:#fff; }

    /* ========== HERO ========== */
    .hero {
      background:linear-gradient(to right,#0aa,#07f);
      color:#fff; display:flex; justify-content:center; align-items:center;
      text-align:center; padding:80px 20px;
    }
    .hero h1 { font-size:3rem; margin-bottom:1rem; }
    .hero p { font-size:1.2rem; }

    /* ========== SECTIONS ========== */
    .content-section {
      display:grid; grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
      gap:2rem; padding:4rem 0; align-items:center;
    }
    .content-section.alt { background:#f9f9f9; }
    .content-section h2 { margin-bottom:1rem; font-size:2rem; }

    /* ========== CARDS ========== */
    .card, .value-card, .service-card {
      background:#fff; border-radius:16px; padding:30px;
      box-shadow:0 6px 18px rgba(0,0,0,0.08); text-align:center;
      transition:transform 0.3s, box-shadow 0.3s;
    }
    .card:hover, .value-card:hover, .service-card:hover {
      transform:translateY(-8px) scale(1.02);
      box-shadow:0 12px 24px rgba(0,0,0,0.15);
    }
    .value-card .icon, .service-card .icon { font-size:42px; margin-bottom:15px; }


     /* Slideshow styles */
    .slideshow { position:relative; max-width:500px; }
    .slideshow .slide {
      position:absolute; top:0; left:0;
      width:100%; height:auto;
      opacity:0; transition:opacity 1s ease-in-out;
    }
    .slideshow .slide.active { opacity:1; position:relative; }



    /* Services */
    .services-grid {
      max-width:1100px; margin:auto;
      display:grid; grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
      gap:30px;
    }
    .service-card { background:rgba(255,255,255,0.05); color:#fff; }
    .service-card h4 { color:#fff; }
    .btn-service { background:#38bdf8; color:#0f172a; padding:10px 20px; border-radius:8px; display:inline-block; }
    .btn-service:hover { background:#0ea5e9; color:#fff; }

    /* Why choose us */
    .why-grid {
      display:grid; grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
      gap:40px; align-items:center;
    }
    .why-list { list-style:none; }
    .why-list li { margin-bottom:15px; display:flex; align-items:center; gap:10px; }

    /* CTA */
    .cta {
      background:linear-gradient(to right,#0aa,#07f);
      text-align:center; padding:4rem 2rem; color:#fff;
    }

    /* Footer */
    .footer { background:#111; color:#aaa; text-align:center; padding:1rem; font-size:0.9rem; }

    /* On medium screens (tablets) */
@media (max-width: 1024px) {
  .container {
    max-width: 95%;   /* let it widen */
    padding: 0 1.5rem;
  }
}

/* On small screens (phones) */
@media (max-width: 768px) {
  .container {
    max-width: 100%;  /* full width */
    padding: 0 1rem;  /* smaller padding */
  }
}

    /* ========== MEDIA QUERIES ========== */
    @media (max-width:768px) {
      nav { display:none; width:100%; }
      nav.active { display:block; }
      nav ul { flex-direction:column; background:#111; width:100%; margin-top:10px; }
      nav ul li a { display:block; padding:10px; border-top:1px solid #222; }
      .hamburger { display:block; }
      .hero h1 { font-size:2rem; }
      .hero p { font-size:1rem; }
      .content-section, .why-grid { grid-template-columns:1fr; text-align:center; }
      .image-block { order:-1; }
    }
    @media (max-width:500px) {
      .hero h1 { font-size:1.6rem; }
      .hero p { font-size:0.95rem; }
      .btn, .btn-service { display:block; width:100%; }
    }

    /* Buttons */
    .btn { background:#0077ff; color:#fff; padding:0.7rem 1.4rem; border-radius:5px; display:inline-block; }
    .btn:hover { background:#005fcc; }
  </style>
</head>
<body>

  <!-- Header -->
  <header class="header">
    <div class="logo">PMT Ghana</div>
    <button class="hamburger" id="hamburger">☰</button>
    <nav id="navMenu">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php" class="active">About</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero -->
  <section class="hero">
    <div class="hero-content container">
      <h1 id="scrambleText">About PMT Ghana</h1>
      <p>Building innovative software solutions that power businesses, transform industries, and create lasting impact.</p>
    </div>
  </section>
<br>
  <!-- Who We Are -->
  <section class="content-section container">
    <div class="text-block">
      <h2>Who We Are</h2>
      <p>PMT Ghana (PhotMedia & Trading Co.) is a forward-thinking software development company dedicated to
        providing cutting-edge digital solutions for businesses and organizations. From smart transportation
        systems like <strong>mTicket</strong> to enterprise-level platforms such as <strong>OmniTransit</strong>,
        we specialize in creating technology that solves real-world problems.</p>
      <a href="#" class="btn">Learn More</a>
    </div>
    <div class="image-block">
      <img src="https://images.unsplash.com/photo-1556155092-490a1ba16284?auto=format&fit=crop&w=1200&q=80" alt="Technology in Ghana">
    </div>
  </section>

  <!-- Mission & Vision -->
  <section class="content-section alt">
    <div class="container" style="display:grid; grid-template-columns:repeat(auto-fit,minmax(280px,1fr)); gap:2rem;">
      <div class="card">
        <div class="icon">🚀</div>
        <h3>Our Mission</h3>
        <p>To design and deliver world-class software solutions that empower businesses,
          simplify lives, and drive digital transformation across Africa and beyond.</p>
      </div>
      <div class="card">
        <div class="icon">🌍</div>
        <h3>Our Vision</h3>
        <p>To be a trusted leader in software innovation, enabling organizations to thrive
          in an increasingly digital world.</p>
      </div>
    </div>
  </section>

  <!-- Core Values -->
  <section class="content-section alt container">
    <h2 style="grid-column:1/-1;text-align:center;">Our Core Values</h2>
    <div class="value-card"><div class="icon">💡</div><h4>Innovation</h4><p>Always pushing boundaries to create impactful solutions.</p></div>
    <div class="value-card"><div class="icon">🛡️</div><h4>Reliability</h4><p>Delivering trusted, high-quality software on time.</p></div>
    <div class="value-card"><div class="icon">🤝</div><h4>Customer-Centricity</h4><p>Building technology that solves client challenges.</p></div>
    <div class="value-card"><div class="icon">👥</div><h4>Collaboration</h4><p>Working closely with partners and teams to achieve success.</p></div>
  </section>

  <!-- Services -->
  <section style="padding:80px 0; background:linear-gradient(135deg,#0f172a,#1e3a8a); color:#fff;">
    <div class="container">
      <div style="text-align:center; margin-bottom:50px;">
        <h2>Our Services</h2>
        <p>We provide powerful, innovative solutions to transform the way you work.</p>
      </div>
      <div class="services-grid">
        <div class="service-card"><div class="icon">🎟️</div><h4>mTicket</h4><p>Smart bus ticketing system eliminating queues and simplifying travel.</p><a href="#" class="btn-service">Read More</a></div>
        <div class="service-card"><div class="icon">🚍</div><h4>OmniTransit</h4><p>Comprehensive transport management software for operators.</p><a href="#" class="btn-service">Read More</a></div>
        <div class="service-card"><div class="icon">💻</div><h4>Custom Software</h4><p>Tailored enterprise systems to match your goals.</p><a href="#" class="btn-service">Read More</a></div>
      </div>
    </div>
  </section>
<br>
   <!-- Why Choose Us -->
  <section class="content-section alt container" style="text-align:center;">
    <div class="why-grid" style="align-items:center; justify-items:center;">
      <div class="text-block">
        <h2>Why Choose Us?</h2>
        <ul class="why-list" style="display:inline-block; text-align:left;">
          <li>✅ 10+ successful projects across industries.</li>
          <li>✅ Experienced software engineers and designers.</li>
          <li>✅ Proven record with scalable transport systems.</li>
          <li>✅ Continuous innovation and reliable support.</li>
        </ul>
        <a href="contact.php" class="btn">Work With Us</a>
      </div>

      <!-- Slideshow -->
      <div class="image-block slideshow">
        <img src="https://images.unsplash.com/photo-1525182008055-f88b95ff7980?auto=format&fit=crop&w=1000&q=80" class="slide active" alt="Team working 1">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=1000&q=80" class="slide" alt="Team working 2">
        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1000&q=80" class="slide" alt="Team working 3">
      </div>
    </div>
  </section>
  <!-- CTA -->
  <section class="cta">
    <div class="container">
      <h2>Ready to build your next big software solution?</h2>
      <a href="contact.php" class="btn">Get in Touch</a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <p>&copy; 2025 PMT Ghana. All Rights Reserved.</p>
  </footer>

  <script>
    // Hamburger menu toggle
    const hamburger=document.getElementById("hamburger");
    const navMenu=document.getElementById("navMenu");
    hamburger.addEventListener("click",()=>{ navMenu.classList.toggle("active"); });

    // Scramble text effect (only 10 times)
  const el = document.getElementById("scrambleText");
  const text = el.textContent;
  let pos = 0;
  let scrambleCount = 0;
  const maxScrambles = 4; // run 10 times

  function scramble() {
    let output = "";
    for (let i = 0; i < text.length; i++) {
      output += (i < pos) ? text[i] : (Math.random() > 0.5 ? text[i] : "*");
    }
    el.textContent = output;
    pos++;

    if (pos > text.length) {
      pos = 0;
      scrambleCount++;
      if (scrambleCount >= maxScrambles) {
        clearInterval(scrambleInterval);
        el.textContent = text; // reset to clean text after finish
      }
    }
  }

  const scrambleInterval = setInterval(scramble, 100);

    // Simple slideshow
    const slides = document.querySelectorAll(".slideshow .slide");
    let currentSlide = 0;

    function showSlide(index) {
      slides.forEach((s,i)=> {
        s.classList.toggle("active", i === index);
      });
    }

    setInterval(()=>{
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    }, 4000); // 4 seconds per slide

  </script>
</body>
</html>
