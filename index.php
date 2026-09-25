
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SEA FUELS V.O.F. | Petroleum & Bulk Liquid Storage Facilities</title>

  <!-- Bootstrap 5 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <style>
    /* Color Palette Extracted Directly From SEA FUELS V.O.F. Logo */
    :root {
      --brand-navy: #0a2540;      /* Deep navy blue text/bg from logo */
      --brand-teal: #00808a;      /* Cyan/Teal ocean wave accent */
      --brand-gold: #c59247;      /* Storage tank warm gold/tan */
      --brand-light-bg: #f4f7f9;
    }

    body {
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      color: #334155;
      background-color: var(--brand-light-bg);
      overflow-x: hidden;
    }

    /* Header Angled Background Clip Path */
    .bg-teal-badge {
      background-color: var(--brand-teal);
      clip-path: polygon(0 0, 88% 0, 100% 100%, 0% 100%);
    }

    @media (max-width: 991px) {
      .bg-teal-badge {
        clip-path: none;
      }
    }

    /* Contact Circle Icons Header */
    .contact-icon-circle {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background-color: rgba(0, 128, 138, 0.1);
      color: var(--brand-teal);
      flex-shrink: 0;
    }

    /* Navigation Bar */
    .nav-dark-strip {
      background-color: var(--brand-navy);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    .nav-link-custom {
      color: rgba(255, 255, 255, 0.8) !important;
      transition: color 0.25s ease, background-color 0.25s ease;
      padding: 8px 16px !important;
      border-radius: 4px;
    }

    .nav-link-custom:hover, 
    .nav-link-custom.active {
      color: #ffffff !important;
      background-color: var(--brand-teal);
    }
/* Custom Dropdown Styling */
.dropdown-menu {
  min-width: 260px;
  border-radius: 6px;
}

.dropdown-item {
  transition: all 0.2s ease;
  white-space: normal;
}

.dropdown-item:hover, 
.dropdown-item:focus {
  background-color: var(--brand-light-bg);
  color: var(--brand-teal) !important;
  padding-left: 1.75rem !important;
}

/* Enable hover dropdown for desktop screens */
@media (min-width: 992px) {
  .nav-item.dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0;
  }
}
    /* Buttons */
    .btn-brand {
      background-color: var(--brand-gold);
      color: #ffffff;
      font-weight: 700;
      border: none;
      transition: all 0.3s ease;
    }

    .btn-brand:hover {
      background-color: var(--brand-teal);
      color: #ffffff;
      transform: translateY(-2px);
      box-shadow: 0 6px 15px rgba(0, 128, 138, 0.3);
    }

    .btn-brand-teal {
      background-color: var(--brand-teal);
      color: #ffffff;
      font-weight: 700;
      border: none;
      transition: all 0.3s ease;
    }

    .btn-brand-teal:hover {
      background-color: var(--brand-gold);
      color: #ffffff;
    }

   /* Hero Carousel Styling */
.hero-carousel {
  position: relative;
  background-color: var(--brand-navy);
  min-height: 580px;
  overflow: hidden;
}

.hero-slide {
  height: 580px;
  background-size: cover;
  background-position: center;
  position: relative;
}

/* Individual Slide Background Images */
.hero-slide.slide-1 {
  background-image: url('https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=1600&q=80');
}
.hero-slide.slide-2 {
  background-image: url('https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=1600&q=80');
}
.hero-slide.slide-3 {
  background-image: url('https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=1600&q=80');
}
.hero-slide.slide-4 {
  background-image: url('https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=1600&q=80');
}

/* Red / Dark Semi-Circle Overlay Effect from Screenshots */
.hero-circle-overlay {
  position: absolute;
  top: -20%;
  left: -15%;
  width: 65%;
  height: 140%;
  background: radial-gradient(circle, rgba(10, 37, 64, 0.95) 0%, rgba(10, 37, 64, 0.88) 60%, rgba(0, 128, 138, 0.35) 100%);
  border-radius: 50%;
  z-index: 1;
}

/* Full Dark Layer Behind Circle to Keep Dark Theme Uniform */
.hero-slide::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(10, 37, 64, 0.45);
  z-index: 0;
}

/* Number Overlay (01, 02, etc.) */
.slide-number {
  position: absolute;
  bottom: 30px;
  left: 5%;
  font-size: 5rem;
  font-weight: 800;
  color: rgba(255, 255, 255, 0.15);
  line-height: 1;
  z-index: 2;
  user-select: none;
}

.hero-heading {
  font-weight: 800;
  line-height: 1.15;
  letter-spacing: -0.5px;
}

.hero-subtitle {
  font-size: 0.95rem;
  letter-spacing: 0.5px;
  display: inline-block;
}

.border-white-10 {
  border-color: rgba(255, 255, 255, 0.2) !important;
}

.tracking-wider {
  letter-spacing: 1px;
}

/* Custom Navigation Controls */
.custom-carousel-ctrl {
  width: 45px;
  height: 45px;
  background-color: rgba(255, 255, 255, 0.2);
  border: 1px solid rgba(255, 255, 255, 0.3);
  border-radius: 50%;
  top: auto;
  bottom: 40px;
  z-index: 5;
  opacity: 0.8;
  transition: all 0.3s ease;
}

.custom-carousel-ctrl:hover {
  background-color: var(--brand-gold);
  border-color: var(--brand-gold);
  opacity: 1;
}

.carousel-control-prev.custom-carousel-ctrl {
  right: 120px;
  left: auto;
}

.carousel-control-next.custom-carousel-ctrl {
  right: 65px;
}

/* Mobile Responsive Adjustments */
@media (max-width: 991px) {
  .hero-circle-overlay {
    width: 100%;
    left: 0;
    top: 0;
    height: 100%;
    border-radius: 0;
    background: rgba(10, 37, 64, 0.85);
  }
  
  .hero-slide {
    height: 480px;
  }

  .slide-number {
    font-size: 3.5rem;
    bottom: 20px;
    left: 20px;
  }

  .custom-carousel-ctrl {
    bottom: 20px;
  }
}

    /* Base Card Styling */
    .feature-card {
      position: relative;
      background-color: #ffffff;
      border-radius: 8px;
      padding: 24px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      border-bottom: 3px solid transparent;
      transition: all 0.4s ease;
      overflow: hidden;
      z-index: 1;
    }

    /* Background Image Overlay on Hover */
    .feature-card::before {
      content: "";
      position: absolute;
      inset: 0;
      background-image: var(--bg-img);
      background-size: cover;
      background-position: center;
      opacity: 0;
      transition: opacity 0.4s ease, transform 0.4s ease;
      transform: scale(1.05);
      z-index: -1;
    }

    /* Dark Overlay on Background Image for Contrast */
    .feature-card::after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(rgba(10, 37, 64, 0.85), rgba(10, 37, 64, 0.85));
      opacity: 0;
      transition: opacity 0.4s ease;
      z-index: -1;
    }

    /* Hover States */
    .feature-card:hover::before,
    .feature-card:hover::after {
      opacity: 1;
    }

    .feature-card:hover::before {
      transform: scale(1);
    }

    .feature-card:hover {
      border-bottom-color: var(--brand-gold);
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    /* Video CTA Banner */
    .video-cta-section {
      background: linear-gradient(rgba(10, 37, 64, 0.65), rgba(10, 37, 64, 0.65)), 
                  url('images/about-lg.jpg') center/cover no-repeat attachment-fixed;
    }

    .play-btn-circle {
      width: 80px;
      height: 80px;
      background-color: var(--brand-gold);
      color: var(--brand-navy);
      border-radius: 50%;
      font-size: 2.2rem;
      box-shadow: 0 0 0 12px rgba(255, 255, 255, 0.2);
      transition: all 0.3s ease;
    }

    .play-btn-circle:hover {
      background-color: var(--brand-teal);
      color: #ffffff;
      transform: scale(1.08);
      box-shadow: 0 0 0 18px rgba(0, 128, 138, 0.3);
    }

    /* Text & Icon Color Shift on Hover */
    .feature-card:hover .fw-bold.fs-5,
    .feature-card:hover .text-muted {
      color: #ffffff !important;
    }

    .feature-card:hover .text-teal {
      color: var(--brand-gold) !important;
    }

    /* Fleet Section Styling - Unified to Brand Navy */
    .fleet-section {
      background-color: var(--brand-navy) !important;
      border-top: 4px solid var(--brand-teal);
    }

    .text-light-muted {
      color: rgba(255, 255, 255, 0.8) !important;
      line-height: 1.8;
    }

    .fleet-img {
      max-width: 100%;
      height: auto;
      object-fit: contain;
    }

    /* Feature Icon Box Styling */
    .feature-icon-box {
      width: 52px;
      height: 52px;
      border-radius: 8px;
      background-color: rgba(0, 128, 138, 0.1);
      color: var(--brand-teal);
      font-size: 1.5rem;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
      border: 1px solid rgba(0, 128, 138, 0.2);
      transition: all 0.4s ease;
    }

    /* Icon Hover Polish */
    .feature-card:hover .feature-icon-box {
      background-color: var(--brand-gold);
      color: #ffffff;
      border-color: var(--brand-gold);
      transform: translateY(-2px) scale(1.05);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    }

    /* Terminal Grid Cards */
    .terminal-card {
      position: relative;
      border-radius: 8px;
      overflow: hidden;
      height: 270px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .terminal-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 10px 20px rgba(10, 37, 64, 0.2);
    }

    .terminal-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .terminal-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(10, 37, 64, 0.95) 0%, rgba(10, 37, 64, 0.3) 60%, rgba(0, 0, 0, 0) 100%);
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 20px;
      color: #ffffff;
    }

    .capacity-badge {
      align-self: flex-start;
      background-color: var(--brand-teal);
      color: #ffffff;
      font-weight: 700;
      font-size: 0.85rem;
      padding: 4px 10px;
      border-radius: 4px;
      margin-bottom: 8px;
    }

    /* Form Card */
    .quote-card {
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.08);
      padding: 30px;
    }

    /* Challenges & Statistics Section - Unified to Light BG and Brand Navy/Gold */
    .challenges-stats-section {
      background-color: var(--brand-light-bg) !important;
    }

    .tracking-wide {
      letter-spacing: 1.5px;
      font-size: 0.9rem;
    }

    .stats-bar {
      background-color: var(--brand-navy) !important;
      border-bottom: 4px solid var(--brand-gold);
    }

    .stat-box {
      transition: background-color 0.3s ease;
    }

    .stat-box:hover {
      background-color: #0d3052 !important;
    }

    .stat-number {
      color: var(--brand-gold) !important;
      font-weight: 800;
    }

    /* Dark Footer */
    .footer-dark-section {
      background-color: var(--brand-navy);
      border-top: 4px solid var(--brand-teal);
    }

    .footer-input::placeholder {
      color: #94a3b8;
    }

    .footer-input:focus {
      background-color: transparent;
      color: #fff;
      border-color: var(--brand-gold);
      box-shadow: none;
    }

    .social-icon-btn {
      width: 38px;
      height: 38px;
      text-decoration: none;
      transition: all 0.25s ease;
      color: rgba(255, 255, 255, 0.7);
    }

    .social-icon-btn:hover {
      background-color: var(--brand-gold);
      border-color: var(--brand-gold) !important;
      color: #ffffff !important;
    }

    .text-teal { color: var(--brand-teal) !important; }
    .text-gold { color: var(--brand-gold) !important; }
    .hover-gold:hover { color: var(--brand-gold) !important; }
  </style>
</head>
<body>

  <!-- Top Contact Header Section -->
  <header class="header-section bg-white border-bottom position-relative overflow-hidden">
    <div class="container-fluid px-0">
      <div class="row align-items-center g-0">
        
        <!-- Logo Container with Angled Background -->
        <div class="col-lg-5 col-md-12 position-relative bg-teal-badge py-3 ps-4 ps-lg-5 pe-5">
          <div class="d-flex align-items-center position-relative z-1">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
              <img class="img-fluid" src="images/logo.png" alt="SEA FUELS V.O.F. Logo" style="max-height: 75px; width: auto;">
            </a>
          </div>
        </div>

        <!-- Right Aligned Top Contact Info -->
        <div class="col-lg-7 col-md-12 py-3 pe-4 pe-lg-5">
          <div class="d-flex flex-wrap justify-content-lg-end justify-content-start align-items-center gap-4">
            
            <div class="d-flex align-items-center gap-3">
              <div class="contact-icon-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-clock fs-5"></i>
              </div>
              <div>
                <div class="text-muted small lh-1">Opening Hours</div>
                <div class="fw-semibold text-dark fs-6 mt-1">Mon - Sat: 9.00 - 18.00</div>
              </div>
            </div>

            <div class="d-flex align-items-center gap-3">
              <div class="contact-icon-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-envelope fs-5"></i>
              </div>
              <div>
                <div class="text-muted small lh-1">Email Us</div>
                <a href="mailto:info@seafuelsvof.com" class="fw-semibold text-dark text-decoration-none fs-6 mt-1 d-block hover-gold">info@seafuelsvof.com</a>
              </div>
            </div>

            <div class="d-flex align-items-center gap-3">
              <div class="contact-icon-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-telephone fs-5"></i>
              </div>
              <div>
                <div class="text-muted small lh-1">Call Us</div>
                <a href="tel:+31101234567" class="fw-semibold text-dark text-decoration-none fs-6 mt-1 d-block hover-gold">+31 10 123 4567</a>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </header>

 <!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg nav-dark-strip sticky-top py-2">
  <div class="container">
    <button class="navbar-toggler text-white border-white ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon navbar-toggler-icon-white"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="mainNavbar">
      <ul class="navbar-nav gap-lg-2 text-center fw-semibold fs-6">
        <li class="nav-item">
          <a class="nav-link nav-link-custom active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-custom" href="about.php">About Us</a>
        </li>
        
        <!-- Our Services Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-custom dropdown-toggle" href="services.php" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Our Services
          </a>
          <ul class="dropdown-menu shadow border-0 py-2 mt-2" aria-labelledby="servicesDropdown">
            <li><a class="dropdown-item py-2 px-4 fw-medium text-dark hover-teal" href="storage-facilities.php">Storage Facilities</a></li>
            <li><a class="dropdown-item py-2 px-4 fw-medium text-dark hover-teal" href="petroleum-storage-facilities.php">Petroleum Storage Facilities</a></li>
            <li><a class="dropdown-item py-2 px-4 fw-medium text-dark hover-teal" href="storage-tanks.php">Storage Tanks</a></li>
            <li><a class="dropdown-item py-2 px-4 fw-medium text-dark hover-teal" href="en590-storage-facilities.php">EN590 Storage Facilities</a></li>
            <li><a class="dropdown-item py-2 px-4 fw-medium text-dark hover-teal" href="bulk-liquid-storage.php">Bulk Liquid Storage</a></li>
            <li><a class="dropdown-item py-2 px-4 fw-medium text-dark hover-teal" href="tank-leasing.php">Tank Leasing</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link nav-link-custom" href="terminals.php">Storage Terminals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-custom" href="blog.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-custom" href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

 <!-- Hero Carousel Section -->
<section id="heroCarousel" class="carousel slide hero-carousel position-relative" data-bs-ride="carousel" data-bs-interval="6000">
  
  <!-- Carousel Slides Inner -->
  <div class="carousel-inner">
    
    <!-- Slide 1 -->
    <div class="carousel-item active hero-slide slide-1">
      <div class="hero-circle-overlay"></div>
      <div class="container position-relative z-2 h-100">
        <div class="row align-items-center h-100">
          <div class="col-lg-8 col-xl-7 ps-lg-5">
            <h1 class="display-4 fw-extrabold text-white mb-4 hero-heading">
              SEA FUELS V.O.F. – Petroleum &amp; Bulk Liquid Storage Facilities
            </h1>
            <a href="services.php" class="btn btn-brand btn-lg px-4 py-3 text-uppercase tracking-wider fw-bold">
              EXPLORE MORE
            </a>
            <div class="hero-subtitle text-white-50 mt-4 pt-2 border-top border-white-10">
              Trusted Storage Facilities
            </div>
          </div>
        </div>
      </div>
      <div class="slide-number">01</div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item hero-slide slide-2">
      <div class="hero-circle-overlay"></div>
      <div class="container position-relative z-2 h-100">
        <div class="row align-items-center h-100">
          <div class="col-lg-8 col-xl-7 ps-lg-5">
            <h1 class="display-4 fw-extrabold text-white mb-4 hero-heading">
              Secure Storage Facilities for Petroleum and Bulk Liquid Products
            </h1>
            <a href="services.php" class="btn btn-brand btn-lg px-4 py-3 text-uppercase tracking-wider fw-bold">
              EXPLORE MORE
            </a>
            <div class="hero-subtitle text-white-50 mt-4 pt-2 border-top border-white-10">
              Tank Storage Terminals
            </div>
          </div>
        </div>
      </div>
      <div class="slide-number">02</div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item hero-slide slide-3">
      <div class="hero-circle-overlay"></div>
      <div class="container position-relative z-2 h-100">
        <div class="row align-items-center h-100">
          <div class="col-lg-8 col-xl-7 ps-lg-5">
            <h1 class="display-4 fw-extrabold text-white mb-4 hero-heading">
              Smart storage tank monitoring
            </h1>
            <a href="services.php" class="btn btn-brand btn-lg px-4 py-3 text-uppercase tracking-wider fw-bold">
              EXPLORE MORE
            </a>
            <div class="hero-subtitle text-white-50 mt-4 pt-2 border-top border-white-10">
              Reliable Petroleum Storage, EN590 Storage and Tank Solutions
            </div>
          </div>
        </div>
      </div>
      <div class="slide-number">03</div>
    </div>

    <!-- Slide 4 -->
    <div class="carousel-item hero-slide slide-4">
      <div class="hero-circle-overlay"></div>
      <div class="container position-relative z-2 h-100">
        <div class="row align-items-center h-100">
          <div class="col-lg-8 col-xl-7 ps-lg-5">
            <h1 class="display-4 fw-extrabold text-white mb-4 hero-heading">
              Secure, Reliable Storage Tanks for Petroleum and Bulk Liquid Products
            </h1>
            <a href="services.php" class="btn btn-brand btn-lg px-4 py-3 text-uppercase tracking-wider fw-bold">
              EXPLORE MORE
            </a>
            <div class="hero-subtitle text-white-50 mt-4 pt-2 border-top border-white-10">
              Smart Storage
            </div>
          </div>
        </div>
      </div>
      <div class="slide-number">04</div>
    </div>

  </div>

  <!-- Navigation Controls -->
  <button class="carousel-control-prev custom-carousel-ctrl" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" aria-label="Previous">
    <i class="bi bi-chevron-left"></i>
  </button>
  <button class="carousel-control-next custom-carousel-ctrl" type="button" data-bs-target="#heroCarousel" data-bs-slide="next" aria-label="Next">
    <i class="bi bi-chevron-right"></i>
  </button>

</section>

  <!-- Services Grid Section -->
<section class="py-5 bg-white">
  <div class="container py-3">
    
    <!-- Section Header -->
    <div class="text-center mb-5" style="max-width: 700px; margin: 0 auto;">
      <span class="text-teal fw-bold text-uppercase">Our Core Capabilities</span>
      <h2 class="display-6 fw-bold text-dark mt-1">Integrated Logistics &amp; Bulk Storage Solutions</h2>
    </div>

    <!-- 5-Card Grid Container -->
    <div class="row g-4 justify-content-center">
      
      <!-- Service 1 -->
      <div class="col-md-6 col-lg-4 col-xl-2-4">
        <div class="feature-card h-100 d-flex flex-column justify-content-between" style="--bg-img: url('images/services-hover.png');">
          <div>
            <div class="feature-icon-box"><i class="bi bi-diagram-3"></i></div>
            <h4 class="fw-bold fs-5 text-dark">Storage Facilities</h4>
            <p class="text-muted small">Integrating oil and gas logistics with efficient air and sea freight services, ensuring timely and secure energy product deliveries.</p>
          </div>
          <a href="services.php" class="text-teal fw-bold text-decoration-none mt-3 d-inline-block">Read More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <!-- Service 2 -->
      <div class="col-md-6 col-lg-4 col-xl-2-4">
        <div class="feature-card h-100 d-flex flex-column justify-content-between" style="--bg-img: url('images/services-hover.png');">
          <div>
            <div class="feature-icon-box"><i class="bi bi-fuel-pump"></i></div>
            <h4 class="fw-bold fs-5 text-dark">Petroleum Storage</h4>
            <p class="text-muted small">Modern fleets and secure tank storage terminals designed for optimal transport and bulk petroleum handling.</p>
          </div>
          <a href="services.php" class="text-teal fw-bold text-decoration-none mt-3 d-inline-block">Read More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <!-- Service 3 -->
      <div class="col-md-6 col-lg-4 col-xl-2-4">
        <div class="feature-card h-100 d-flex flex-column justify-content-between" style="--bg-img: url('images/services-hover.png');">
          <div>
            <div class="feature-icon-box"><i class="bi bi-box-seam"></i></div>
            <h4 class="fw-bold fs-5 text-dark">Storage Tanks</h4>
            <p class="text-muted small">A robust network with access to secure tank storage terminals ensures safe and timely delivery across local and international routes.</p>
          </div>
          <a href="services.php" class="text-teal fw-bold text-decoration-none mt-3 d-inline-block">Read More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <!-- Service 4 -->
      <div class="col-md-6 col-lg-4 col-xl-2-4">
        <div class="feature-card h-100 d-flex flex-column justify-content-between" style="--bg-img: url('images/services-hover.png');">
          <div>
            <div class="feature-icon-box"><i class="bi bi-shield-check"></i></div>
            <h4 class="fw-bold fs-5 text-dark">EN590 Storage</h4>
            <p class="text-muted small">Specialized EN590 storage facilities integrated with oil &amp; gas logistics expertise to fulfill bulk liquid commodity standards.</p>
          </div>
          <a href="services.php" class="text-teal fw-bold text-decoration-none mt-3 d-inline-block">Read More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <!-- Service 5 -->
      <div class="col-md-6 col-lg-4 col-xl-2-4">
        <div class="feature-card h-100 d-flex flex-column justify-content-between" style="--bg-img: url('images/services-hover.png');">
          <div>
            <div class="feature-icon-box"><i class="bi bi-building-check"></i></div>
            <h4 class="fw-bold fs-5 text-dark">Bulk Logistics</h4>
            <p class="text-muted small">Our secure tank storage terminals provide reliable solutions for bulk fuel and liquid commodities, ensuring safety and efficiency.</p>
          </div>
          <a href="services.php" class="text-teal fw-bold text-decoration-none mt-3 d-inline-block">Read More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

    </div>
  </div>
</section>

  <!-- Video CTA Banner Section -->
  <section class="video-cta-section position-relative py-5 text-dark">
    <div class="container py-4">
      <div class="row align-items-center justify-content-end">
        <div class="col-lg-6 text-lg-end text-center">
          <div class="d-inline-flex align-items-center gap-4 flex-wrap justify-content-center justify-content-lg-end">
            <h2 class="display-6 fw-bold mb-0 text-dark">Watch our videos</h2>
            <a href="https://www.youtube.com/watch?v=YOUR_VIDEO_ID" target="_blank" class="play-btn-circle d-flex align-items-center justify-content-center text-decoration-none" aria-label="Watch Video">
              <i class="bi bi-play-fill"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Company Overview Section -->
  <section class="py-5">
    <div class="container py-3">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <img src="images/about-sm.jpg" alt="SEA FUELS Terminal" class="img-fluid rounded-3 shadow">
        </div>
        <div class="col-lg-6">
          <span class="text-teal fw-bold text-uppercase">KNOW ABOUT SEA FUELS V.O.F.</span>
          <h2 class="display-6 fw-bold text-dark my-3">We Provide Full Range Global Logistics & Tank Storage Solutions</h2>
          <p class="text-muted fs-6">
            Welcome to <strong>SEA FUELS V.O.F.</strong>, your trusted partner for global logistics and secure tank storage solutions. We specialize in providing a full range of services including oil and gas logistics, goods transportation, and state-of-the-art storage facilities.
          </p>
          <div class="row g-3 my-3">
            <div class="col-sm-6 d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-gold fs-5"></i>
              <span class="fw-semibold text-dark">Optimized Tank Rental Cost</span>
            </div>
            <div class="col-sm-6 d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-gold fs-5"></i>
              <span class="fw-semibold text-dark">On-Time Delivery</span>
            </div>
          </div>
          <a href="about.php" class="btn btn-brand btn-lg px-4 mt-2">KNOW MORE ABOUT US</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Challenges & Statistics Section (COLOR FIXED) -->
  <section class="challenges-stats-section py-5">
    <div class="container text-center pt-3 pb-4">
      <p class="text-teal fw-bold text-uppercase tracking-wide mb-2">
        WE SPECIALISE TRANSPORTATION <span class="ms-1">—</span>
      </p>
      <h2 class="display-4 fw-bold text-dark mb-5">We have challenges covered</h2>

      <div class="stats-bar text-white rounded-0 shadow-sm overflow-hidden">
        <div class="row g-0">
          <div class="col-6 col-md-3 stat-box border-end border-secondary border-opacity-25 py-4 px-3">
            <i class="bi bi-geo-alt fs-1 text-white mb-2 d-block"></i>
            <span class="stat-number fw-bold display-5 d-block mb-1">56</span>
            <span class="stat-label fs-5 fw-semibold text-white">Terminals</span>
          </div>

          <div class="col-6 col-md-3 stat-box border-end border-secondary border-opacity-25 py-4 px-3">
            <i class="bi bi-people fs-1 text-white mb-2 d-block"></i>
            <span class="stat-number fw-bold display-5 d-block mb-1">136</span>
            <span class="stat-label fs-5 fw-semibold text-white">People</span>
          </div>

          <div class="col-6 col-md-3 stat-box border-end border-secondary border-opacity-25 py-4 px-3">
            <i class="bi bi-clock-history fs-1 text-white mb-2 d-block"></i>
            <span class="stat-number fw-bold display-5 d-block mb-1">10</span>
            <span class="stat-label fs-5 fw-semibold text-white">Years</span>
          </div>

          <div class="col-6 col-md-3 stat-box py-4 px-3">
            <i class="bi bi-building fs-1 text-white mb-2 d-block"></i>
            <span class="stat-number fw-bold display-5 d-block mb-1">11</span>
            <span class="stat-label fs-5 fw-semibold text-white">Offices</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Tank Storage Terminals Grid -->
  <section class="py-5 bg-white">
    <div class="container py-3">
      <div class="d-flex flex-wrap align-items-end justify-content-between mb-4">
        <div>
          <span class="text-teal fw-bold text-uppercase">Check Out Our Tank Facilities</span>
          <h2 class="display-6 fw-bold text-dark mb-0">State-of-the-Art Tank Storage Terminals</h2>
        </div>
        <a href="terminals.php" class="btn btn-brand-teal mt-3 mt-md-0">VIEW ALL TERMINALS</a>
      </div>

      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="terminal-card">
            <img src="images/immingham.jpg" alt="Port of Immingham">
            <div class="terminal-overlay">
              <span class="capacity-badge">1,644,230 CBM</span>
              <h3 class="terminal-title">Port of Immingham (UK)</h3>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="terminal-card">
            <img src="images/rotterdam.jpg" alt="Port of Rotterdam">
            <div class="terminal-overlay">
              <span class="capacity-badge">2,384,544 CBM</span>
              <h3 class="terminal-title">Port of Rotterdam (NL)</h3>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="terminal-card">
            <img src="images/houston.jpg" alt="Houston Port">
            <div class="terminal-overlay">
              <span class="capacity-badge">1,899,244 CBM</span>
              <h3 class="terminal-title">Houston Port (USA)</h3>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="terminal-card">
            <img src="images/terminal.jpg" alt="Charleston Terminal">
            <div class="terminal-overlay">
              <span class="capacity-badge">1,138,375 CBM</span>
              <h3 class="terminal-title">Charleston Terminal</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Quote & Contact Form Section -->
  <section class="py-5">
    <div class="container py-3">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <span class="text-teal fw-bold text-uppercase">Get In Touch With Us Anytime</span>
          <h2 class="display-6 fw-bold text-dark my-3">Looking for the Best Logistics & Storage Services?</h2>
          <p class="text-muted mb-4">At SEA FUELS V.O.F., we don’t just offer services – we create opportunities for your business to reach its full potential with tailored, innovative global tank storage solutions.</p>
          
          <div class="row g-3">
            <div class="col-6"><i class="bi bi-shield-check text-gold me-2"></i> Safe Packaging</div>
            <div class="col-6"><i class="bi bi-globe me-2 text-gold"></i> Global Tracking</div>
            <div class="col-6"><i class="bi bi-truck me-2 text-gold"></i> Freight Routing</div>
            <div class="col-6"><i class="bi bi-headset me-2 text-gold"></i> 24/7 Support</div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="quote-card p-4 bg-white rounded shadow-sm">
            <h3 class="fw-bold text-dark mb-4">Request a Quote</h3>
            <!-- Alert Messages -->
<?php if (isset($error)): ?>
  <div class="alert alert-danger" role="alert">
    <?= htmlspecialchars($error); ?>
  </div>
<?php endif; ?>

<?php if (isset($success)): ?>
  <div class="alert alert-success" role="alert">
    <?= htmlspecialchars($success); ?>
  </div>
<?php endif; ?>

<form action="proc_home_contact.php" method="POST">
  <div class="row g-3">
    <div class="col-md-6">
      <label for="homeName" class="form-label fw-semibold">Your Name <span class="text-danger">*</span></label>
      <input type="text" name="name" class="form-control py-2" id="homeName" placeholder="John Doe" value="<?= htmlspecialchars($Name); ?>" required>
    </div>

    <div class="col-md-6">
      <label for="homeEmail" class="form-label fw-semibold">Your Email <span class="text-danger">*</span></label>
      <input type="email" name="email" class="form-control py-2" id="homeEmail" placeholder="name@company.com" value="<?= htmlspecialchars($Email); ?>" required>
    </div>

    <div class="col-12">
      <label for="homeSubject" class="form-label fw-semibold">Your Subject <span class="text-danger">*</span></label>
      <input type="text" name="subject" class="form-control py-2" id="homeSubject" placeholder="Tank Leasing Inquiry / Storage Request" value="<?= htmlspecialchars($Subject); ?>" required>
    </div>

    <div class="col-12">
      <label for="homeMessage" class="form-label fw-semibold">Your Message <span class="text-danger">*</span></label>
      <textarea name="message" class="form-control" id="homeMessage" rows="5" placeholder="Provide details about your required storage capacity or logistics needs..." required><?= htmlspecialchars($Message); ?></textarea>
    </div>

    <div class="col-12 pt-2">
      <button type="submit" class="btn btn-brand btn-lg px-4 py-3 text-uppercase fs-6">SEND MESSAGE</button>
      <span class="d-block text-muted small mt-2">* Please complete all required fields.</span>
    </div>
  </div>
</form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Fleet & Pricing Section (COLOR FIXED) -->
  <section class="fleet-section py-5 text-white">
    <div class="container py-4">
      <div class="row align-items-center">
        <!-- Image Column -->
        <div class="col-lg-5 text-center mb-4 mb-lg-0">
          <img src="images/features.png" alt="Shipping Container Fleet" class="img-fluid fleet-img">
        </div>

        <!-- Text Content Column -->
        <div class="col-lg-7 ps-lg-5">
          <h2 class="display-5 fw-bold text-white mb-4">Our Fleet Covers Your Needs &amp; Pricing Range</h2>
          
          <p class="lead text-light-muted mb-4 fs-6">
            At <strong>SEA FUELS V.O.F.</strong>, we understand that every business has unique requirements, which is why our fleet is designed to cover a wide range of global logistics needs and tank storage solutions.
          </p>

          <p class="lead text-light-muted mb-0 fs-6">
            Whether you need efficient oil and gas logistics, secure transportation, or reliable tank storage terminals, our diverse fleet provides flexible options to fit your specific needs and budget.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Latest Blog Posts -->
  <section class="py-5 bg-white">
    <div class="container py-3">
      <div class="text-center mb-5">
        <span class="text-teal fw-bold text-uppercase">News & Insights</span>
        <h2 class="display-6 fw-bold text-dark mt-1">Our News From The Blog</h2>
      </div>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <img src="images/efficient.jpg" class="card-img-top" alt="Oil & Gas Logistics">
            <div class="card-body p-4">
              <span class="text-muted small">June 23, 2026</span>
              <h5 class="card-title fw-bold my-2 text-dark">Efficient Oil and Gas Logistics Solutions</h5>
              <a href="blog.php" class="text-teal fw-bold text-decoration-none">READ MORE <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <img src="images/world.png" class="card-img-top" alt="Storage Terminals">
            <div class="card-body p-4">
              <span class="text-muted small">June 23, 2026</span>
              <h5 class="card-title fw-bold my-2 text-dark">The Future of Modern Tank Storage Terminals</h5>
              <a href="blog.php" class="text-teal fw-bold text-decoration-none">READ MORE <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <img src="images/tank.jpg" class="card-img-top" alt="Sustainable Logistics">
            <div class="card-body p-4">
              <span class="text-muted small">June 23, 2026</span>
              <h5 class="card-title fw-bold my-2 text-dark">Sustainable Logistics: Reducing Carbon Footprint</h5>
              <a href="blog.php" class="text-teal fw-bold text-decoration-none">READ MORE <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="footer-dark-section text-white-50 py-5">
    <div class="container py-4">
      <div class="row g-4 justify-content-between">
        
        <div class="col-lg-4 col-md-6">
          <div class="mb-4">
            <a href="index.php" class="d-inline-block">
              <img src="images/logo.png" alt="SEA FUELS V.O.F. Logo" class="img-fluid" style="max-height: 55px; filter: brightness(0) invert(1);">
            </a>
          </div>
          <p class="text-white-50 mb-4 pe-lg-3 fs-6">
            Leading reliable tank storage operations, marine bunkering solutions, and global energy logistics.
          </p>

          <div class="d-flex flex-column gap-3 fs-6">
            <div class="d-flex align-items-start gap-3">
              <i class="bi bi-telephone text-gold fs-5 mt-1"></i>
              <div>
                <div>Phone: <a href="tel:+31101234567" class="text-white text-decoration-none hover-gold">+31 10 123 4567</a></div>
                <div>WhatsApp: <a href="https://wa.me/31601234567" class="text-white text-decoration-none hover-gold">+31 60 123 4567</a></div>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3">
              <i class="bi bi-envelope text-gold fs-5 mt-1"></i>
              <div>
                <div><a href="mailto:info@seafuelsvof.com" class="text-white-50 text-decoration-none hover-gold">info@seafuelsvof.com</a></div>
                <div><a href="mailto:storage@seafuelsvof.com" class="text-white-50 text-decoration-none hover-gold">storage@seafuelsvof.com</a></div>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3">
              <i class="bi bi-geo-alt text-gold fs-5 mt-1"></i>
              <div>
                <span class="text-white-50">Harbor Terminal Gate 4, Port of Rotterdam, Netherlands</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 ps-lg-4">
          <h4 class="text-white fw-bold mb-4">Quick Links</h4>
          <ul class="list-unstyled d-flex flex-column gap-2 fs-6 mb-0">
            <li><a href="index.php" class="text-white-50 text-decoration-none hover-gold">Home</a></li>
            <li><a href="about.php" class="text-white-50 text-decoration-none hover-gold">About Us</a></li>
            <li><a href="services.php" class="text-white-50 text-decoration-none hover-gold">Our Services</a></li>
            <li><a href="terminals.php" class="text-white-50 text-decoration-none hover-gold">Storage Terminals</a></li>
            <li><a href="blog.php" class="text-white-50 text-decoration-none hover-gold">Latest Blog</a></li>
            <li><a href="contact.php" class="text-white-50 text-decoration-none hover-gold">Contact Us</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4 class="text-white fw-bold mb-4">Subscribe to Updates</h4>
          <form onsubmit="event.preventDefault(); alert('Thank you for subscribing!');" class="mb-4">
            <div class="input-group">
              <input type="email" class="form-control footer-input bg-transparent text-white border-secondary px-3 py-2" placeholder="Your Email Address" required>
              <button class="btn btn-brand-teal fw-bold px-4 text-uppercase" type="submit">JOIN</button>
            </div>
          </form>

          <div class="d-flex gap-2">
            <a href="https://facebook.com" target="_blank" class="social-icon-btn d-flex align-items-center justify-content-center border border-secondary rounded-1"><i class="bi bi-facebook"></i></a>
            <a href="https://twitter.com" target="_blank" class="social-icon-btn d-flex align-items-center justify-content-center border border-secondary rounded-1"><i class="bi bi-twitter-x"></i></a>
            <a href="https://linkedin.com" target="_blank" class="social-icon-btn d-flex align-items-center justify-content-center border border-secondary rounded-1"><i class="bi bi-linkedin"></i></a>
            <a href="https://instagram.com" target="_blank" class="social-icon-btn d-flex align-items-center justify-content-center border border-secondary rounded-1"><i class="bi bi-instagram"></i></a>
          </div>
        </div> 

      </div>

      <hr class="border-secondary my-4">

      <div class="text-center">
        <p class="mb-0 small">&copy; 2026 SEA FUELS V.O.F. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>