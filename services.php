<?php
// services.php — PMT Ghana Services Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Our Services — PMT Ghana</title>
  <style>
    * { margin:0; padding:0; box-sizing:border-box; font-family:"Segoe UI", Tahoma, sans-serif; }
    body { background:#f4f7fa; color:#333; line-height:1.6; }
    a { text-decoration:none; color:inherit; }
    .container { max-width:1000px; margin:0 auto; padding:0 1.5rem; }
    .header {
      display:flex; justify-content:space-between; align-items:center;
      padding:1rem 2rem; background:#111; color:#fff; position:sticky; top:0; z-index:1000;
    }
    .logo { font-size:1.4rem; font-weight:bold; }
    nav ul { list-style:none; display:flex; gap:1rem; }
    nav ul li a { color:#ddd; transition:0.3s; }
    nav ul li a:hover, nav ul li a.active { color:#0ff; }
    .hamburger { display:none; font-size:1.8rem; cursor:pointer; background:none; border:none; color:#fff; }
    @media (max-width:768px) {
      nav { display:none; width:100%; }
      nav.active { display:block; }
      nav ul { flex-direction:column; background:#111; width:100%; margin-top:10px; }
      nav ul li a { display:block; padding:10px; border-top:1px solid #222; }
      .hamburger { display:block; }
    }

    /* Hero / intro */
    .hero {
      background: linear-gradient(to right, #0aa, #07f);
      color:#fff; padding:80px 20px; text-align:center;
    }
    .hero h1 { font-size:2.8rem; margin-bottom:0.7rem; }
    .hero p { font-size:1.2rem; max-width:700px; margin:0 auto; }

    /* Services grid */
    .services-section {
      padding:60px 0;
    }
    .services-grid {
      display:grid;
      grid-template-columns: repeat(auto-fit, minmax(280px,1fr));
      gap:30px;
      margin-top:40px;
    }
    .service-card {
      background:#fff;
      border-radius:16px;
      padding:30px;
      box-shadow:0 6px 18px rgba(0,0,0,0.08);
      transition: transform 0.3s, box-shadow 0.3s;
      overflow:hidden;
    }
    .service-card:hover {
      transform: translateY(-8px);
      box-shadow:0 12px 24px rgba(0,0,0,0.15);
    }
    .service-card .icon {
      font-size:48px;
      margin-bottom:15px;
      color:#0aa;
    }
    .service-card h3 {
      margin-bottom:12px;
      color:#111;
    }
    .service-card p {
      margin-bottom:20px;
      color:#555;
    }
    .service-card .btn-service {
      background:#38bdf8;
      color:#0f172a;
      padding:10px 20px;
      border-radius:8px;
      display:inline-block;
      transition: background 0.3s, color 0.3s;
    }
    .service-card .btn-service:hover {
      background:#0ea5e9;
      color:#fff;
    }

    /* A highlighted section for mTicket details */
    .mticket-detail {
      background:#fff;
      border-radius:12px;
      padding:40px;
      box-shadow:0 6px 18px rgba(0,0,0,0.08);
      margin:60px 0;
    }
    .mticket-detail h2 { color:#07f; margin-bottom:20px; }
    .mticket-detail p { color:#444; margin-bottom:20px; }
    .mticket-detail a.btn-more {
      background:#07f; color:#fff;
      padding:10px 20px; border-radius:8px;
      display:inline-block;
      transition: background 0.3s;
    }
    .mticket-detail a.btn-more:hover {
      background:#005fcc;
    }

    /* Testimonials or features */
    .features {
      display:grid;
      grid-template-columns: repeat(auto-fit, minmax(220px,1fr));
      gap:30px;
      margin-top:40px;
    }
    .feature-box {
      background:#fff;
      border-radius:12px;
      padding:25px;
      text-align:center;
      box-shadow:0 4px 15px rgba(0,0,0,0.07);
    }
    .feature-box .icon {
      font-size:36px;
      margin-bottom:12px;
      color:#0aa;
    }
    .feature-box h4 { margin-bottom:10px; color:#111; }
    .feature-box p { color:#555; }

    /* CTA area */
    .cta {
      background: linear-gradient(to right, #0aa, #07f);
      color:#fff; text-align:center; padding:60px 20px;
      margin-top:60px;
    }
    .cta a.btn { background:#fff; color:#0f172a; padding:12px 24px; border-radius:8px; display:inline-block; }
    .cta a.btn:hover { background:#e0e7ff; }

    footer {
      background:#111; color:#aaa;
      text-align:center; padding:20px;
      margin-top:60px;
    }

  </style>
</head>
<body>

  <header class="header">
    <div class="logo">PMT Ghana</div>
    <button class="hamburger" id="hamburger">☰</button>
    <nav id="navMenu">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php" class="active">Services</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <div class="container">
      <h1>Our Services</h1>
      <p>At PMT Ghana, we build software that drives efficiency, transforms operations, and empowers growth. Explore what we offer below.</p>
    </div>
  </section>

  <main class="container services-section">
    <h2 style="text-align:center; color:#111;">What We Offer</h2>
    <div class="services-grid">
      <div class="service-card">
        <div class="icon">🎟️</div>
        <h3>mTicket</h3>
        <p>Our smart ticketing system for buses and public transport. Passengers can buy tickets via mobile, QR codes, or kiosks—eliminating queues and reducing fraud.</p>
        <a href="blog.php?post=mticket" class="btn-service">Read More</a>
      </div>
      <div class="service-card">
        <div class="icon">🚍</div>
        <h3>OmniTransit</h3>
        <p>An all-in-one transport operations platform — route management, fleet tracking, reporting dashboards, and more.</p>
        <a href="blog.php?post=omnitransit" class="btn-service">Read More</a>
      </div>
      <div class="service-card">
        <div class="icon">💻</div>
        <h3>Custom Software</h3>
        <p>Tailored enterprise systems, web & mobile apps, integrations — built to your specifications and scale.</p>
        <a href="blog.php?post=custom-software" class="btn-service">Read More</a>
      </div>
      <div class="service-card">
        <div class="icon">📊</div>
        <h3>Analytics & BI</h3>
        <p>Data-driven insights, dashboards, and reporting tools to help you make smarter decisions.</p>
        <a href="blog.php?post=analytics" class="btn-service">Read More</a>
      </div>
    </div>

    <!-- mTicket detailed highlight -->
    <div class="mticket-detail">
      <h2>About mTicket</h2>
      <p><strong>mTicket</strong> is our flagship smart bus ticketing solution. It enables passengers to purchase tickets using mobile apps, scan QR codes on buses, or buy from kiosks. For transport operators, it ensures transparent revenue collection, reduces fraud, and automates reconciliation. Over time, we plan to expand features like loyalty programs, dynamic pricing, and integration with city transport systems.</p>
      <p>Want to know more? <a href="blog.php?post=mticket" class="btn-more">View our blog post on mTicket →</a></p>
    </div>

    <!-- Some extra features / benefits section -->
    <div class="features">
      <div class="feature-box">
        <div class="icon">✅</div>
        <h4>Reliable & Secure</h4>
        <p>High uptime, encrypted transactions, and best practices in security.</p>
      </div>
      <div class="feature-box">
        <div class="icon">🛠️</div>
        <h4>Scalable Architecture</h4>
        <p>Built to scale with your operations—whether 10 buses or 1,000.</p>
      </div>
      <div class="feature-box">
        <div class="icon">📈</div>
        <h4>Real-Time Analytics</h4>
        <p>Live dashboards to monitor revenue, routes, and usage trends.</p>
      </div>
      <div class="feature-box">
        <div class="icon">🤝</div>
        <h4>Support & Maintenance</h4>
        <p>Continuous updates, bug fixes, and assistance when you need it.</p>
      </div>
    </div>

    <!-- CTA -->
    <div class="cta">
      <h2>Ready to transform your operations?</h2>
      <a href="contact.php" class="btn">Talk to us today</a>
    </div>

  </main>

  <footer>
    <p>&copy; 2025 PMT Ghana. All Rights Reserved.</p>
  </footer>

  <script>
    // Hamburger menu toggle
    const hamburger = document.getElementById("hamburger");
    const navMenu = document.getElementById("navMenu");
    hamburger.addEventListener("click", () => {
      navMenu.classList.toggle("active");
    });
  </script>

</body>
</html>
