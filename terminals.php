<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Storage Terminals | SEA FUELS V.O.F.</title>

  <!-- Bootstrap 5 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <style>
    /* Color Palette Extracted Directly From Logo */
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

    /* Nav Links Hover Effect */
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

    @media (min-width: 992px) {
      .nav-item.dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
      }
    }

    /* Primary Gold Button with Teal Hover Transition */
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

    /* Secondary Teal Button with Gold Hover Transition */
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

    /* Page Title Banner */
    .page-title-banner {
      background: linear-gradient(rgba(10, 37, 64, 0.88), rgba(10, 37, 64, 0.88)), 
                  url('https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
      padding: 60px 0;
    }

    /* Angled Background for Logo Section */
    .bg-teal-badge {
      background-color: var(--brand-teal);
      clip-path: polygon(0 0, 88% 0, 100% 100%, 0% 100%);
    }

    @media (max-width: 991px) {
      .bg-teal-badge {
        clip-path: none;
      }
    }

    /* Breadcrumb Links */
    .breadcrumb-item a {
      color: var(--brand-gold);
      text-decoration: none;
    }
    .breadcrumb-item a:hover {
      color: var(--brand-teal);
    }
    .breadcrumb-item.active {
      color: #ffffff;
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

    .terminal-title {
      font-size: 1.2rem;
      font-weight: 700;
      margin-bottom: 0;
    }

    /* CTA Section Banner */
    .cta-banner {
      background: linear-gradient(rgba(10, 37, 64, 0.92), rgba(0, 128, 138, 0.85)),
                  url('https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
    }

    /* Dark Footer */
    .footer-dark-section {
      background-color: var(--brand-navy);
      border-top: 4px solid var(--brand-teal);
    }

    /* Input Focus State */
    .footer-input::placeholder {
      color: #94a3b8;
    }
    .footer-input:focus {
      background-color: transparent;
      color: #fff;
      border-color: var(--brand-gold);
      box-shadow: none;
    }

    /* Social Media Circle Buttons */
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

    /* Colors and Utilities */
    .text-teal { color: var(--brand-teal) !important; }
    .text-gold { color: var(--brand-gold) !important; }
    .hover-gold:hover { color: var(--brand-gold) !important; }
  </style>
</head>
<body>

  <!-- Top Contact Header -->
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
            
            <!-- Hours -->
            <div class="d-flex align-items-center gap-3">
              <div class="contact-icon-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-clock fs-5"></i>
              </div>
              <div>
                <div class="text-muted small lh-1">Opening Hours</div>
                <div class="fw-semibold text-dark fs-6 mt-1">Mon - Sat: 9.00 - 18.00</div>
              </div>
            </div>

            <!-- Email -->
            <div class="d-flex align-items-center gap-3">
              <div class="contact-icon-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-envelope fs-5"></i>
              </div>
              <div>
                <div class="text-muted small lh-1">Email Us</div>
                <a href="mailto:info@seafuelsvof.com" class="fw-semibold text-dark text-decoration-none fs-6 mt-1 d-block hover-gold">info@seafuelsvof.com</a>
              </div>
            </div>

            <!-- Call -->
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

  <!-- Sticky Main Navbar with Page Connections -->
  <nav class="navbar navbar-expand-lg nav-dark-strip sticky-top py-2">
    <div class="container">
      <button class="navbar-toggler text-white border-white ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
        <span class="navbar-toggler-icon navbar-toggler-icon-white"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="mainNavbar">
        <ul class="navbar-nav gap-lg-2 text-center fw-semibold fs-6">
          <li class="nav-item"><a class="nav-link nav-link-custom" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link nav-link-custom" href="about.php">About Us</a></li>
          
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

          <li class="nav-item"><a class="nav-link nav-link-custom active" href="terminals.php">Storage Terminals</a></li>
          <li class="nav-item"><a class="nav-link nav-link-custom" href="blog.php">Blog</a></li>
          <li class="nav-item"><a class="nav-link nav-link-custom" href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Title & Breadcrumb Navigation -->
  <div class="page-title-banner text-white">
    <div class="container">
      <h1 class="display-5 fw-bold mb-2">Storage Terminals</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.php" data-config="companyName">SEA FUELS V.O.F.</a></li>
          <li class="breadcrumb-item active" aria-current="page">Storage Terminals</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Page Introduction -->
  <section class="py-5 bg-white">
    <div class="container py-2 text-center" style="max-width: 800px;">
      <span class="text-teal fw-bold text-uppercase tracking-wide">Global Storage Network</span>
      <h2 class="display-6 fw-bold my-3 text-dark">Secure & Efficient Storage Solutions</h2>
      <p class="text-muted lead fs-6">
        Discover reliable storage terminals for bulk fuels, liquids, and other commodities[cite: 16]. 
        <strong data-config="companyName" class="text-dark">SEA FUELS V.O.F.</strong> offers secure, flexible, and state-of-the-art storage solutions tailored to your needs[cite: 16].
      </p>
    </div>
  </section>

  <!-- Terminals Grid -->
  <section class="py-5">
    <div class="container">
      <div class="row g-4">

        <!-- Terminal 1: Port of Immingham -->
        <div class="col-md-6 col-lg-3">
          <div class="terminal-card">
            <img src="https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=600&q=80" alt="Port of Immingham">
            <div class="terminal-overlay">
              <span class="capacity-badge">1,644,230 CBM</span>
              <h3 class="terminal-title">Port of Immingham (UK)</h3>
            </div>
          </div>
        </div>

        <!-- Terminal 2: Port of Rotterdam -->
        <div class="col-md-6 col-lg-3">
          <div class="terminal-card">
            <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=600&q=80" alt="Port of Rotterdam">
            <div class="terminal-overlay">
              <span class="capacity-badge">644,000 CBM</span>
              <h3 class="terminal-title">Port of Rotterdam (Netherlands)</h3>
            </div>
          </div>
        </div>

        <!-- Terminal 3: Houston Port -->
        <div class="col-md-6 col-lg-3">
          <div class="terminal-card">
            <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=600&q=80" alt="Houston Port">
            <div class="terminal-overlay">
              <span class="capacity-badge">1,899,244 CBM</span>
              <h3 class="terminal-title">Houston Port (Texas, USA)</h3>
            </div>
          </div>
        </div>

        <!-- Terminal 4: Fujairah Port -->
        <div class="col-md-6 col-lg-3">
          <div class="terminal-card">
            <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=600&q=80" alt="Fujairah Port">
            <div class="terminal-overlay">
              <span class="capacity-badge">643,187 CBM</span>
              <h3 class="terminal-title">Fujairah Port (UAE)</h3>
            </div>
          </div>
        </div>

        <!-- Terminal 5: Jurong Port -->
        <div class="col-md-6 col-lg-3">
          <div class="terminal-card">
            <img src="https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=600&q=80" alt="Jurong Port">
            <div class="terminal-overlay">
              <span class="capacity-badge">1,914,704 CBM</span>
              <h3 class="terminal-title">Jurong Port (Singapore)</h3>
            </div>
          </div>
        </div>

        <!-- Terminal 6: Ningbo-Zhoushan Port -->
        <div class="col-md-6 col-lg-3">
          <div class="terminal-card">
            <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=600&q=80" alt="Ningbo-Zhoushan Port">
            <div class="terminal-overlay">
              <span class="capacity-badge">466,978 CBM</span>
              <h3 class="terminal-title">Ningbo-Zhoushan Port (China)</h3>
            </div>
          </div>
        </div>

        <!-- Terminal 7: Port of Qingdao -->
        <div class="col-md-6 col-lg-3">
          <div class="terminal-card">
            <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=600&q=80" alt="Port of Qingdao">
            <div class="terminal-overlay">
              <span class="capacity-badge">285,106 CBM</span>
              <h3 class="terminal-title">Port of Qingdao (China)</h3>
            </div>
          </div>
        </div>

        <!-- Terminal 8: Mina Al Ahmadi Port -->
        <div class="col-md-6 col-lg-3">
          <div class="terminal-card">
            <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=600&q=80" alt="Mina Al Ahmadi Port">
            <div class="terminal-overlay">
              <span class="capacity-badge">98,378 CBM</span>
              <h3 class="terminal-title">Mina Al Ahmadi Port (Kuwait)</h3>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section id="quote" class="cta-banner py-5 text-white">
    <div class="container py-4">
      <div class="row align-items-center justify-content-between g-4">
        <div class="col-lg-8">
          <h2 class="display-6 fw-bold mb-2">We're best transport and tank storage company</h2>
          <p class="lead mb-0 opacity-90">Reach out to our operations team to discuss tank reservations or global vessel transport.</p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a href="contact.php" class="btn btn-brand btn-lg px-4 py-3 shadow">REQUEST QUOTE</a>
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

  <!-- Configuration Script -->
  <script>
    const SITE_CONFIG = {
      companyName: "SEA FUELS V.O.F.",
      email: "info@seafuelsvof.com",
      phone: "+31 10 123 4567",
      whatsapp: "+31601234567",
      address: "Harbor Terminal Gate 4, Port of Rotterdam, Netherlands"
    };

    document.addEventListener("DOMContentLoaded", () => {
      document.querySelectorAll("[data-config]").forEach((el) => {
        const key = el.getAttribute("data-config");
        if (SITE_CONFIG[key]) el.textContent = SITE_CONFIG[key];
      });

      document.querySelectorAll("[data-config-href]").forEach((el) => {
        const key = el.getAttribute("data-config-href");
        if (SITE_CONFIG[key]) {
          if (key === 'email') el.href = `mailto:${SITE_CONFIG[key]}`;
          if (key === 'phone') el.href = `tel:${SITE_CONFIG[key]}`;
          if (key === 'whatsapp') el.href = `https://wa.me/${SITE_CONFIG[key]}`;
        }
      });
    });
  </script>
</body>
</html>