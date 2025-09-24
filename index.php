<?php
// index.php - PMT Ghana Homepage (fully responsive with mobile nav + responsive cards)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PMT Ghana - Innovative Software Solutions</title>
  <link rel="stylesheet" href="styles.css" />
  <style>
   /* ========== RESET & BASE ========== */
* { margin: 0; padding: 0; box-sizing: border-box; }
body {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  line-height: 1.6;
  color: #333;
  background: #fff;
}
a { text-decoration: none; color: inherit; }
img { max-width: 100%; display: block; }

.container { width: 90%; max-width: 1200px; margin: auto; }
.text-center { text-align: center; }

/* ========== BUTTONS ========== */
.btn {
  display: inline-block;
  padding: 10px 16px;
  border-radius: 8px;
  font-weight: 600;
  transition: all 0.3s ease;
}
.btn.primary {
  background: linear-gradient(45deg, #0aa, #07f);
  color: #fff;
  box-shadow: 0 0 12px rgba(13,148,136,0.5);
}
.btn.primary:hover {
  transform: scale(1.05);
  box-shadow: 0 0 22px rgba(37,99,235,0.7);
}
.btn.outline {
  border: 2px solid #07f;
  color: #07f;
}
.btn.white {
  background: #fff;
  color: #07f;
}


.logo { font-weight: 700; font-size: 1.4rem; color: #07f; }





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




/* ========== HERO ========== */
.hero {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 30px;
  align-items: center;
  padding: 70px 20px;
}
.hero h1 { font-size: 2rem; margin-bottom: 15px; }
.hero p { margin-bottom: 20px; color: #555; }
.btn-group { display: flex; gap: 15px; flex-wrap: wrap; }

/* ========== ABOUT ========== */
.about { padding: 5rem 0; }
.grid-2 {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 40px;
  align-items: center;
}

.about-text h2 {
  font-size: 2.2rem;
  font-weight: 800;
  background: linear-gradient(90deg, #0d9488, #2563eb);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  margin-bottom: 1rem;
  position: relative;
  display: inline-block;
}
.about-text h2::after {
  content: "";
  position: absolute;
  left: 0; bottom: -5px;
  width: 0; height: 3px;
  background: #0d9488;
  transition: width 0.3s ease;
}
.about-text h2:hover::after { width: 100%; }

.about-text p {
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.8s ease;
}
.about-text.show p {
  opacity: 1;
  transform: translateY(0);
}

/* About Carousel */
.about-carousel-wrapper {
  position: relative;
  overflow: hidden;
  border-radius: 12px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.15);
}
.about-carousel { display: flex; transition: transform 0.6s ease-in-out; }
.about-slide { min-width: 100%; position: relative; }
.about-slide img { width: 100%; display: block; }
.about-slide .caption {
  position: absolute;
  bottom: 10px; left: 20px;
  background: rgba(0,0,0,0.6);
  color: #fff;
  padding: 6px 12px;
  border-radius: 5px;
  font-size: 0.9rem;
}
.about-arrow {
  position: absolute;
  top: 50%; transform: translateY(-50%);
  background: rgba(0,0,0,0.4);
  color: white;
  font-size: 2rem;
  border: none;
  cursor: pointer;
  padding: 8px;
  border-radius: 50%;
}
.about-arrow.left { left: 10px; }
.about-arrow.right { right: 10px; }
.about-arrow:hover { background: rgba(0,0,0,0.7); }

/* ========== CARDS (Reusable) ========== */
.card, .portfolio-card, .testimonial {
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 6px 18px rgba(0,0,0,0.08);
  padding: 20px;
  transition: transform .3s, box-shadow .3s;
  display: flex; flex-direction: column;
}
.card:hover, .portfolio-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 12px 28px rgba(0,0,0,0.12);
}
.card h3, .portfolio-content h3 { margin-bottom: 10px; color: #222; }
.card p, .portfolio-content p { color: #444; flex: 1; }

/* ========== SERVICES ========== */
.services { padding: 70px 20px; background: #f9f9f9; }
.services h2 { font-size: 2rem; margin-bottom: 40px; text-align: center; }
.grid-3 {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 25px;
}
.card .icon { font-size: 2rem; margin-bottom: 10px; }

/* ========== PORTFOLIO ========== */
.portfolio { padding: 70px 20px; }
.portfolio h2 { font-size: 2rem; margin-bottom: 10px; text-align: center; }
.portfolio p.text-center { margin-bottom: 40px; }
.portfolio-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 25px;
}
.portfolio-img-wrapper {
  height: 200px;
  overflow: hidden;
  border-radius: 12px;
}
.portfolio-img {
  width: 100%; height: 100%;
  object-fit: cover;
  transition: transform .4s;
}
.portfolio-card:hover .portfolio-img { transform: scale(1.05); }
.portfolio-content {
  padding-top: 15px;
  display: flex; flex-direction: column;
}

/* ========== TESTIMONIALS ========== */
.testimonials { background: #fff; padding: 70px 20px; }
.testimonials h2 { margin-bottom: 40px; text-align: center; }
.testimonial { background: #f5f7fa; font-style: italic; }

/* ========== CTA ========== */
.cta {
  padding: 60px 20px;
  text-align: center;
  background: linear-gradient(45deg, #0aa, #07f);
  color: #fff;
}

/* ========== FOOTER ========== */
.footer {
  background: #222; color: #ccc;
  padding: 50px 20px;
}
.footer .grid-3 {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 30px;
}
.footer h3, .footer h4 { color: #fff; margin-bottom: 10px; }
.footer ul { list-style: none; }
.footer ul li { margin-bottom: 8px; }
.footer a { color: #ccc; }
.footer-bottom {
  text-align: center;
  margin-top: 30px;
  font-size: 0.9rem;
}

/* ========== MATRIX BACKGROUND ========== */
#matrixCanvas {
  position: fixed;
  top: 0; left: 0;
  width: 100%; height: 100%;
  z-index: -1;
  background: #000;
}

/* ========== RESPONSIVE ========== */
@media (max-width: 500px) {
  .hero { padding: 50px 15px; }
  .hero h1 { font-size: 1.6rem; }
  .portfolio-img-wrapper { height: 160px; }
}

  </style>
</head>

<body>
<header class="header">
    <div class="logo">PMT Ghana</div>
    <button class="hamburger" id="hamburger">☰</button>
    <nav id="navMenu">
      <ul>
        <li><a href="index.php" class="active" >Home</a></li>
        <li><a href="about.php" >About</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero -->
  <section class="hero container">
    <div class="hero-text">
      <h1 id="scrambleText">Innovative Software Solutions for Africa and Beyond</h1>

      <p>PMT Ghana (PhotMedia & Trading Co.) delivers cutting-edge software that powers businesses and transforms industries.</p>
      <div class="btn-group">
        <a href="#services" class="btn primary">Explore Services</a>
        <a href="#portfolio" class="btn outline">View Portfolio</a>
      </div>
    </div>
    <div class="slideshow-wrapper">
      <div class="slideshow-container">
        <div class="slide fade"><img src="https://images.pexels.com/photos/590016/pexels-photo-590016.jpeg" alt=""></div>
        <div class="slide fade"><img src="https://images.pexels.com/photos/373543/pexels-photo-373543.jpeg" alt=""></div>
        <div class="slide fade"><img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg" alt=""></div>
      </div>
      <div class="dots">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
    </div>
  </section>


  <!-- About Section -->
<section id="about" class="about container grid-2">
  <!-- About Carousel -->
  <div class="about-carousel-wrapper">
    <div class="about-carousel" id="aboutCarousel">
      <div class="about-slide">
        <img src="https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg" alt="Team brainstorming">
        <div class="caption">Innovation starts with teamwork</div>
      </div>
      <div class="about-slide">
        <img src="https://images.pexels.com/photos/1181675/pexels-photo-1181675.jpeg" alt="Developer coding">
        <div class="caption">Building solutions for Africa</div>
      </div>
      <div class="about-slide">
        <img src="https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg" alt="Business meeting">
        <div class="caption">Empowering businesses with tech</div>
      </div>
    </div>

    <!-- Arrows -->
    <button class="about-arrow left" onclick="moveAboutSlide(-1)">&#10094;</button>
    <button class="about-arrow right" onclick="moveAboutSlide(1)">&#10095;</button>
  </div>

  <!-- About Text -->
  <div class="about-text">
    <h2>About PMT Ghana</h2>
    <p>We are a software development company based in Ghana, providing innovative solutions like mTicket and OmniTransit. Our mission is to build reliable, scalable, and impactful technology for Africa and beyond.</p>
    <a href="about.php" class="btn primary">Learn More</a>
  </div>
</section>



  <!-- Services -->
  <section id="services" class="services">
    <h2>Our Services</h2>
    <div class="grid-3 container">
      <div class="card"><div class="icon">🔧</div><h3>mTicket</h3><p>Smart bus ticketing system.</p><a href="#">Read More →</a></div>
      <div class="card"><div class="icon">🚍</div><h3>OmniTransit</h3><p>Transit & transport management software.</p><a href="#">Read More →</a></div>
      <div class="card"><div class="icon">💻</div><h3>Custom Software</h3><p>Tailored enterprise systems for businesses.</p><a href="#">Read More →</a></div>
    </div>
  </section>

  <!-- Portfolio -->
  <section id="portfolio" class="portfolio">
    <h2>Our Portfolio</h2>
    <p class="text-center">A showcase of impactful projects powering transport and business solutions across Ghana.</p>
    <div class="portfolio-grid container">
      <div class="portfolio-card">
        <div class="portfolio-img-wrapper"><img src="https://mticketgh.com/assets/images/hero-image.png" class="portfolio-img"></div>
        <div class="portfolio-content"><h3>mTicket</h3><p>Ghana’s leading digital bus ticketing platform. Dial <b>*265#</b> to buy tickets, rent buses, or make inquiries.</p><a href="https://mticketgh.com" class="btn" target="_blank">Visit Site</a></div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-img-wrapper"><img src="https://images.unsplash.com/photo-1549921296-3a4a8b14d41b" class="portfolio-img"></div>
        <div class="portfolio-content"><h3>OmniTransit</h3><p>A smart transport solution connecting operators, commuters, and payments for seamless travel.</p><a href="#" class="btn">Learn More</a></div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-img-wrapper"><img src="https://images.unsplash.com/photo-1581092580491-1c1f69d1b8e5" class="portfolio-img"></div>
        <div class="portfolio-content"><h3>Custom Solutions</h3><p>We create tailored software and digital platforms to solve unique business challenges.</p><a href="contact.php" class="btn">Get in Touch</a></div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section id="testimonials" class="testimonials">
    <h2>What Our Clients Say</h2>
    <div class="grid-2 container">
      <div class="testimonial"><p>“Great service and reliable software!”</p><strong>– Client 1</strong></div>
      <div class="testimonial"><p>“PMT Ghana transformed our operations.”</p><strong>– Client 2</strong></div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta"><h2>Let’s Build the Future of Software Together</h2><a href="contact.php" class="btn white">Contact Us Today</a></section>

  <!-- Footer -->
  <footer class="footer">
    <div class="grid-3 container">
      <div><h3>PMT Ghana</h3><p>Innovative software solutions for Africa and beyond.</p></div>
      <div><h4>Quick Links</h4><ul><li><a href="#about">About</a></li><li><a href="#services">Services</a></li><li><a href="#portfolio">Portfolio</a></li><li><a href="#blog">Blog</a></li><li><a href="#contact">Contact</a></li></ul></div>
      <div><h4>Contact Info</h4><p>Email: info@pmtghana.com</p><p>Phone: +233 55 000 0000</p><p>Accra, Ghana</p></div>
    </div>
    <div class="footer-bottom"><p>© 2025 PMT Ghana. All rights reserved.</p></div>
  </footer>

  <!-- JS for slideshow -->
  <script>

     // Hamburger menu toggle
    const hamburger=document.getElementById("hamburger");
    const navMenu=document.getElementById("navMenu");
    hamburger.addEventListener("click",()=>{ navMenu.classList.toggle("active"); });

    
    let slideIndex = 0;
    showSlides();
    function showSlides() {
      const slides = document.getElementsByClassName("slide");
      const dots = document.getElementsByClassName("dot");
      for (let i = 0; i < slides.length; i++) slides[i].style.display = "none";
      slideIndex++;
      if (slideIndex > slides.length) slideIndex = 1;
      for (let i = 0; i < dots.length; i++) dots[i].classList.remove("active");
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].classList.add("active");
      setTimeout(showSlides, 4000);
    }
    function currentSlide(n) {
      slideIndex = n-1;
      showSlides();
    }



// Messages to cycle
const messages = [
  "Innovative Software Solutions for Africa and Beyond",
  "What if the future is just a simulation?",
  "We build the codes that shape your reality.",
  "Connect with us — let’s rewrite the tech world together."
];

const scrambleText = document.getElementById("scrambleText");
let msgIndex = 0;
const chars = "!<>-_\\/[]{}—=+*^?#________";
let frame = 0;
let queue = [];
let frameRequest;

// Scramble animation function
function setText(newText) {
  const oldText = scrambleText.innerText;
  const length = Math.max(oldText.length, newText.length);
  const promise = new Promise((resolve) => {
    queue = [];
    for (let i = 0; i < length; i++) {
      const from = oldText[i] || "";
      const to = newText[i] || "";
      const start = Math.floor(Math.random() * 40);
      const end = start + Math.floor(Math.random() * 40);
      queue.push({ from, to, start, end, char: null });
    }
    cancelAnimationFrame(frameRequest);
    frame = 0;
    update(resolve);
  });
  return promise;
}

function update(resolve) {
  let output = "";
  let complete = 0;
  for (let i = 0; i < queue.length; i++) {
    let { from, to, start, end, char } = queue[i];
    if (frame >= end) {
      complete++;
      output += to;
    } else if (frame >= start) {
      if (!char || Math.random() < 0.28) {
        char = chars[Math.floor(Math.random() * chars.length)];
        queue[i].char = char;
      }
      output += `<span class="dud">${char}</span>`;
    } else {
      output += from;
    }
  }
  scrambleText.innerHTML = output;
  if (complete === queue.length) {
    resolve();
  } else {
    frame++;
    frameRequest = requestAnimationFrame(() => update(resolve));
  }
}

// Cycle messages every 5s
function nextMessage() {
  setText(messages[msgIndex]).then(() => {
    setTimeout(nextMessage, 5000);
  });
  msgIndex = (msgIndex + 1) % messages.length;
}

// start
nextMessage();

// Reveal About Text on Scroll
  const aboutText = document.querySelector('.about-text');

  function revealAboutText() {
    if (!aboutText) return;
    const rect = aboutText.getBoundingClientRect();
    if (rect.top < window.innerHeight - 100) {
      aboutText.classList.add('show');
      window.removeEventListener('scroll', revealAboutText);
    }
  }

  window.addEventListener('scroll', revealAboutText);
  // Run once in case it's already in view
  revealAboutText();


  

  </script>
</body>
</html>
