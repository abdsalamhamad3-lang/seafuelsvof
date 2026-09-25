<?php
// Prevent undefined variable warnings
$Name    = $Name ?? '';
$Email   = $Email ?? '';
$Subject = $Subject ?? '';
$Message = $Message ?? '';

// Reset fields if message was successfully sent
if (isset($success)) {
    $Name = $Email = $Subject = $Message = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | SEA FUELS V.O.F.</title>

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

    /* Contact Cards & Form Styling */
    .contact-card {
      border: none;
      border-radius: 8px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
      height: 100%;
    }

    .form-control:focus, .form-select:focus {
      border-color: var(--brand-teal);
      box-shadow: 0 0 0 0.25rem rgba(0, 128, 138, 0.25);
    }

    /* Map Responsive iFrame Container */
    .map-container {
      position: relative;
      width: 100%;
      height: 400px;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }

    .map-container iframe {
      width: 100%;
      height: 100%;
      border: 0;
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
                <a href="mailto:info@seafuelsvof.com" data-config-href="email" data-config="email" class="fw-semibold text-dark text-decoration-none fs-6 mt-1 d-block hover-gold">info@seafuelsvof.com</a>
              </div>
            </div>

            <!-- Call -->
            <div class="d-flex align-items-center gap-3">
              <div class="contact-icon-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-telephone fs-5"></i>
              </div>
              <div>
                <div class="text-muted small lh-1">Call Us</div>
                <a href="tel:+31101234567" data-config-href="phone" data-config="phone" class="fw-semibold text-dark text-decoration-none fs-6 mt-1 d-block hover-gold">+31 10 123 4567</a>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </header>

  <!-- Sticky Main Navbar -->
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

          <li class="nav-item"><a class="nav-link nav-link-custom" href="terminals.php">Storage Terminals</a></li>
          <li class="nav-item"><a class="nav-link nav-link-custom" href="blog.php">Blog</a></li>
          <li class="nav-item"><a class="nav-link nav-link-custom active" href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Title & Breadcrumb Banner -->
  <div class="page-title-banner text-white">
    <div class="container">
      <h1 class="display-5 fw-bold mb-2">Contact Us</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.php" data-config="companyName">SEA FUELS V.O.F.</a></li>
          <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Contact Form & Info Cards Section -->
  <section class="py-5">
    <div class="container py-3">
      <div class="row g-4">

        <!-- Left Column: Message Form -->
        <div class="col-lg-7">
          <div class="card contact-card p-4 p-md-5 bg-white">
            <span class="text-teal fw-bold text-uppercase tracking-wide mb-1">Contact Us Now</span>
            <h2 class="display-6 fw-bold text-dark mb-3">Write us a message</h2>
            <p class="text-muted mb-4">
              Get in touch with <strong data-config="companyName" class="text-dark">SEA FUELS V.O.F.</strong> today! Our team is ready to provide reliable oil and gas logistics and tank storage solutions tailored to your needs.
            </p>

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

<form action="proc_contact.php" method="POST">
  <div class="row g-3">
    <div class="col-md-6">
      <label for="userName" class="form-label fw-semibold">Your Name <span class="text-danger">*</span></label>
      <input type="text" name="name" class="form-control py-2" id="userName" placeholder="John Doe" value="<?= htmlspecialchars($Name ?? ''); ?>" required>
    </div>

    <div class="col-md-6">
      <label for="userEmail" class="form-label fw-semibold">Your Email <span class="text-danger">*</span></label>
      <input type="email" name="email" class="form-control py-2" id="userEmail" placeholder="name@company.com" value="<?= htmlspecialchars($Email ?? ''); ?>" required>
    </div>

    <div class="col-12">
      <label for="userSubject" class="form-label fw-semibold">Your Subject <span class="text-danger">*</span></label>
      <input type="text" name="subject" class="form-control py-2" id="userSubject" placeholder="Tank Leasing Inquiry / Storage Request" value="<?= htmlspecialchars($Subject ?? ''); ?>" required>
    </div>

    <div class="col-12">
      <label for="userMessage" class="form-label fw-semibold">Your Message <span class="text-danger">*</span></label>
      <textarea name="message" class="form-control" id="userMessage" rows="5" placeholder="Provide details about your required storage capacity or logistics needs..." required><?= htmlspecialchars($Message ?? ''); ?></textarea>
    </div>

    <div class="col-12 pt-2">
      <button type="submit" class="btn btn-brand btn-lg px-4 py-3 text-uppercase fs-6">SEND MESSAGE</button>
      <span class="d-block text-muted small mt-2">* Please complete all required fields.</span>
    </div>
  </div>
</form>
          </div>
        </div>

        <!-- Right Column: Company Info & Details -->
        <div class="col-lg-5">
          <div class="d-flex flex-column gap-4 h-100">

            <!-- Card 1: About Company Brief -->
            <div class="card contact-card p-4 bg-white">
              <h3 class="h5 fw-bold text-dark border-bottom pb-3 mb-3">
                <i class="bi bi-building text-teal me-2"></i>About <span data-config="companyName">SEA FUELS V.O.F.</span>
              </h3>
              <p class="text-muted mb-0">
                For over 13 years, <strong data-config="companyName" class="text-dark">SEA FUELS V.O.F.</strong> has focused on satisfying global energy clients through bulk liquid storage solutions and value-added services tailored to meet their operational needs.
              </p>
            </div>

            <!-- Card 2: Contact Details -->
            <div class="card contact-card p-4 bg-white">
              <h3 class="h5 fw-bold text-dark border-bottom pb-3 mb-3">
                <i class="bi bi-geo-alt text-teal me-2"></i>Our Address & Details
              </h3>
              
              <div class="d-flex flex-column gap-3 fs-6">
                <div class="d-flex align-items-start gap-3">
                  <div class="contact-icon-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-geo-alt-fill"></i>
                  </div>
                  <div>
                    <div class="text-muted small">Headquarters Address</div>
                    <div class="fw-semibold text-dark" data-config="address">Harbor Terminal Gate 4, Port of Rotterdam, Netherlands</div>
                  </div>
                </div>

                <div class="d-flex align-items-start gap-3">
                  <div class="contact-icon-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-telephone-fill"></i>
                  </div>
                  <div>
                    <div class="text-muted small">Direct Lines</div>
                    <div>Phone: <a href="tel:+31101234567" data-config-href="phone" data-config="phone" class="fw-semibold text-dark text-decoration-none hover-gold">+31 10 123 4567</a></div>
                    <div>WhatsApp: <a href="https://wa.me/31601234567" data-config-href="whatsapp" data-config="whatsapp" class="fw-semibold text-dark text-decoration-none hover-gold">+31 60 123 4567</a></div>
                  </div>
                </div>

                <div class="d-flex align-items-start gap-3">
                  <div class="contact-icon-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-envelope-fill"></i>
                  </div>
                  <div>
                    <div class="text-muted small">Email Departments</div>
                    <div><a href="mailto:info@seafuelsvof.com" data-config-href="email" data-config="email" class="text-dark text-decoration-none hover-gold fw-medium">info@seafuelsvof.com</a></div>
                    <div><a href="mailto:storage@seafuelsvof.com" class="text-dark text-decoration-none hover-gold fw-medium">storage@seafuelsvof.com</a></div>
                    <div><a href="mailto:shipping@seafuelsvof.com" class="text-dark text-decoration-none hover-gold fw-medium">shipping@seafuelsvof.com</a></div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Interactive Map Section -->
  <section class="pb-5">
    <div class="container">
      <div class="map-container">
        <!-- Google Map Embed (Centered on Rotterdam Port / Global Terminal Hub) -->
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d157297.80942555318!2d4.248386413281249!3d51.9529323!2m3!1f0!0f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c4333917409213%3A0x6b4f71a069720448!2sPort%20of%20Rotterdam!5e0!3m2!1sen!2snl!4v1700000000000!5m2!1sen!2snl" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
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