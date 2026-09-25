<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | SEA FUELS V.O.F. - Petroleum & Bulk Liquid Storage</title>

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

    /* Page Banner Header */
    .page-banner {
      background: linear-gradient(rgba(10, 37, 64, 0.85), rgba(10, 37, 64, 0.85)), 
                  url('images/about-lg.jpg') center/cover no-repeat;
      padding: 80px 0;
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

    /* Core Values Cards */
    .value-card {
      background: #ffffff;
      border-radius: 8px;
      padding: 24px;
      height: 100%;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      border-bottom: 3px solid transparent;
      transition: all 0.3s ease;
    }

    .value-card:hover {
      border-bottom-color: var(--brand-gold);
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .value-icon {
      width: 50px;
      height: 50px;
      background-color: rgba(0, 128, 138, 0.1);
      color: var(--brand-teal);
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      margin-bottom: 15px;
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
          <a class="nav-link nav-link-custom" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-custom active" href="about.php">About Us</a>
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

  <!-- Page Header Banner -->
  <section class="page-banner text-white text-center">
    <div class="container">
      <h1 class="display-4 fw-bold mb-2">About Us</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center mb-0">
          <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none hover-gold">Home</a></li>
          <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
        </ol>
      </nav>
    </div>
  </section>

 <!-- Primary About Section -->
<section class="py-5 bg-white">
  <div class="container py-3">
    <div class="row align-items-center g-5">
      
      <!-- Text Content Column (Left Side) -->
      <div class="col-lg-6">
        <span class="text-danger fw-bold text-uppercase tracking-wider small">KNOW ABOUT SEAFUELSVOF.COM</span>
        
        <h2 class="display-5 fw-bold text-dark my-3 lh-sm">
          We give you control of your shipments and storage
        </h2>
        
        <p class="text-danger fs-5 fw-medium lh-base mb-4">
          Operating safely and bringing the highest level of stewardship to our customer's products are the cornerstones of Seafuelsvof.com business philosophy.
        </p>
        
        <p class="text-secondary lh-lg mb-4">
          For 13 years, Seafuelsvof.com has focused on satisfying customers through bulk liquid storage solutions and value-added services tailored to meet their needs. We currently operate 22 strategically located bulk liquid storage terminals consisting of over 20 million tonnes of storage capacity with direct access to major population centers and ports across the world.
        </p>

        <p class="text-secondary lh-lg mb-4">
          The Seafuelsvof.com facilities are equipped to store a wide range of liquid products including renewable fuels, feedstocks, chemical, petroleum, and agricultural products. Our success has enabled us to respond to customer needs by continually expanding our network, facilities, and service.
        </p>

        <div class="pt-2">
          <a href="services.php" class="btn btn-danger btn-lg px-4 py-2 text-uppercase fw-semibold shadow-sm">
            EXPLORE MORE
          </a>
        </div>
      </div>

      <!-- Image Column (Right Side) -->
      <div class="col-lg-6">
        <div class="position-relative overflow-hidden rounded-3 shadow-lg">
          <img src="images/about-2-lg.jpg" alt="Seafuelsvof.com Storage Terminal Operations" class="img-fluid w-100 h-100 object-fit-cover" style="min-height: 480px;">
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Team & Field Operations Section -->
<section class="py-5 bg-white">
  <div class="container-fluid py-2">
    
    <!-- Top Row: Images 1 & 2 -->
    <div class="row g-4 mb-4">
      <!-- Left Image Column -->
      <div class="col-md-6">
        <div class="rounded-3 overflow-hidden shadow-sm h-100">
          <img 
            src="images/one.jpg" 
            alt="Seafuelsvof.com Field Technicians Operating Railcar Valves" 
            class="img-fluid w-100 h-100 object-fit-cover"
            style="min-height: 350px;"
          >
        </div>
      </div>

      <!-- Right Image Column -->
      <div class="col-md-6">
        <div class="rounded-3 overflow-hidden shadow-sm h-100">
          <img 
            src="images/two.jpg" 
            alt="Seafuelsvof.com Safety Team at Tank Terminal" 
            class="img-fluid w-100 h-100 object-fit-cover"
            style="min-height: 350px;"
          >
        </div>
      </div>
    </div>

    <!-- Bottom Row: Images 3 & 4 -->
    <div class="row g-4">
      <!-- Left Image Column -->
      <div class="col-md-6">
        <div class="rounded-3 overflow-hidden shadow-sm h-100">
          <img 
            src="images/three.png" 
            alt="Seafuelsvof.com Office & Desk Operations" 
            class="img-fluid w-100 h-100 object-fit-cover"
            style="min-height: 350px;"
          >
        </div>
      </div>

      <!-- Right Image Column -->
      <div class="col-md-6">
        <div class="rounded-3 overflow-hidden shadow-sm h-100">
          <img 
            src="images/four.png" 
            alt="Seafuelsvof.com Terminal Logistics Facilities" 
            class="img-fluid w-100 h-100 object-fit-cover"
            style="min-height: 350px;"
          >
        </div>
      </div>
    </div>

  </div>
</section>

  <!-- Dynamic Service Opportunities Section (From Source Page 2) -->
  <section class="py-5 bg-light">
    <div class="container py-3">
      <div class="row align-items-center g-5">
        <div class="col-lg-6 order-lg-2">
          <img src="images/choose-2-left.jpg" alt="SEA FUELS Facility Building and Terminal" class="img-fluid rounded-3 shadow">
        </div>
        <div class="col-lg-6 order-lg-1">
          <span class="text-teal fw-bold text-uppercase">WE CREATE AN OPPORTUNITY</span>
          <h2 class="display-6 fw-bold text-dark my-3">Reach your full potential with reliable storage</h2>
          <p class="text-muted fs-6 lh-lg mb-4">
            At SEA FUELS V.O.F., we pride ourselves on being a dynamic provider. With years of experience and a commitment to technology, we ensure efficient transportation and quality handling of goods, including petroleum products and bulk liquids.
          </p>

          <div class="d-flex align-items-start gap-3 mb-4">
            <div class="contact-icon-circle d-flex align-items-center justify-content-center mt-1">
              <i class="bi bi-fuel-pump fs-4"></i>
            </div>
            <div>
              <h5 class="fw-bold text-dark mb-1">Oil &amp; Gas Logistics</h5>
              <p class="text-muted small mb-0">Safe and timely delivery of energy products across domestic and international trade routes.</p>
            </div>
          </div>

          <div class="d-flex align-items-start gap-3">
            <div class="contact-icon-circle d-flex align-items-center justify-content-center mt-1">
              <i class="bi bi-diagram-3 fs-4"></i>
            </div>
            <div>
              <h5 class="fw-bold text-dark mb-1">Storage Terminals</h5>
              <p class="text-muted small mb-0">State-of-the-art storage facilities offering secure and sustainable solutions for bulk fuels and commodities.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Mission & Core Values Section (From Source Page 2) -->
  <section class="py-5 bg-white">
    <div class="container py-3">
      
      <!-- Our Mission Header -->
      <div class="text-center mb-5" style="max-width: 800px; margin: 0 auto;">
        <span class="text-teal fw-bold text-uppercase">OUR PURPOSE</span>
        <h2 class="display-6 fw-bold text-dark mt-1">Our Mission</h2>
        <p class="text-muted fs-6 lh-lg mt-3">
          At SEA FUELS V.O.F., our mission is to revolutionize the logistics industry by delivering innovative, sustainable, and customer-centric solutions. We aim to provide exceptional oil and gas logistics, global freight services, and secure tank storage solutions that empower businesses to achieve their goals with efficiency and reliability.
        </p>
      </div>

      <!-- Core Values Grid -->
      <div class="text-center mb-4">
        <span class="text-teal fw-bold text-uppercase">WHAT DRIVES US</span>
        <h3 class="fw-bold text-dark">Our Core Values</h3>
      </div>

      <div class="row g-4 justify-content-center">
        <!-- Value 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="value-card">
            <div class="value-icon"><i class="bi bi-person-check-fill"></i></div>
            <h4 class="fw-bold fs-5 text-dark">1. Customer Focus</h4>
            <p class="text-muted small mb-0 lh-lg">We prioritize our clients' needs, delivering tailored solutions that drive their success.</p>
          </div>
        </div>

        <!-- Value 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="value-card">
            <div class="value-icon"><i class="bi bi-shield-lock-fill"></i></div>
            <h4 class="fw-bold fs-5 text-dark">2. Reliability</h4>
            <p class="text-muted small mb-0 lh-lg">We ensure consistent and dependable logistics and storage services that you can trust.</p>
          </div>
        </div>

        <!-- Value 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="value-card">
            <div class="value-icon"><i class="bi bi-tree-fill"></i></div>
            <h4 class="fw-bold fs-5 text-dark">3. Sustainability</h4>
            <p class="text-muted small mb-0 lh-lg">We are committed to minimizing our environmental impact through eco-friendly practices and innovative technology.</p>
          </div>
        </div>

        <!-- Value 4 -->
        <div class="col-md-6 col-lg-4">
          <div class="value-card">
            <div class="value-icon"><i class="bi bi-file-earmark-text-fill"></i></div>
            <h4 class="fw-bold fs-5 text-dark">4. Integrity</h4>
            <p class="text-muted small mb-0 lh-lg">Transparency and honesty are at the core of every service we provide.</p>
          </div>
        </div>

        <!-- Value 5 -->
        <div class="col-md-6 col-lg-4">
          <div class="value-card">
            <div class="value-icon"><i class="bi bi-lightbulb-fill"></i></div>
            <h4 class="fw-bold fs-5 text-dark">5. Innovation</h4>
            <p class="text-muted small mb-0 lh-lg">By embracing technology and continuous improvement, we stay ahead in delivering cutting-edge logistics solutions.</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Tank Storage Terminals Showcase (From Source Page 1 & 2) -->
  <section class="py-5 bg-light">
    <div class="container py-3">
      <div class="d-flex flex-wrap align-items-end justify-content-between mb-4">
        <div>
          <span class="text-teal fw-bold text-uppercase">CHECKOUT OUR TANK STORAGE TERMINALS</span>
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
              <h3 class="terminal-title fs-5">Port of Immingham (UK)</h3>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="terminal-card">
            <img src="images/rotterdam.jpg" alt="Port of Rotterdam">
            <div class="terminal-overlay">
              <span class="capacity-badge">2,384,544 CBM</span>
              <h3 class="terminal-title fs-5">Port of Rotterdam (Netherlands)</h3>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="terminal-card">
            <img src="images/houston.jpg" alt="Houston Port">
            <div class="terminal-overlay">
              <span class="capacity-badge">1,199,244 CBM</span>
              <h3 class="terminal-title fs-5">Houston Port (Texas, USA)</h3>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="terminal-card">
            <img src="images/terminal.jpg" alt="Charleston Terminal">
            <div class="terminal-overlay">
              <span class="capacity-badge">1,138,378 CBM</span>
              <h3 class="terminal-title fs-5">Charleston Terminal</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Request Banner -->
  <section class="py-5 bg-teal text-white" style="background-color: var(--brand-teal);">
    <div class="container py-2">
      <div class="row align-items-center justify-content-between g-4">
        <div class="col-lg-8 text-center text-lg-start">
          <span class="text-uppercase fw-bold text-gold">We're best transport and tank storage company</span>
          <h2 class="display-6 fw-bold mb-0 mt-1">Reliable Goods Logistics, Oil &amp; Gas Solutions, and Secure Tank Storage Terminals</h2>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
          <a href="contact.php" class="btn btn-brand btn-lg px-4 text-uppercase">REQUEST QUOTE</a>
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