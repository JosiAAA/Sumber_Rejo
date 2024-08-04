<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portal Sumber Rejo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="apple.mobile-web-app-capable"content="yes"/>

  <!-- Favicons -->
  <link href="asset/logoKubar.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Cardo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="{{ asset('main.css') }}">
  
  <style>

    html,body{
      width: 100%;
      overflow-x: hidden;
    }
    a {
      text-decoration: none; /* Remove underline from all links */
    }
    a:hover {
      text-decoration: none; /* Ensure underline does not appear on hover */
    }
    .logo {
      text-align: left; /* Ensure text aligns to the left */
      margin: 0; /* Remove default margin */
    }
    .sitename {
      margin: 0; /* Remove default margin */
      font-size: 1.5em; /* Adjust font size as needed */
    }
    .sub-title {
      margin: 0; /* Remove default margin */
      font-size: 1em; /* Make the font size smaller */
      color: #666; /* Optional: change color for better contrast */
    }
    img {
      margin: 0; /* Ensure there's no margin around the image */
    }
    .container-fluid {
      padding: 0; /* Remove any default padding */
    }
  </style>

  
</head>
<body class="about-page">
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
      <img src="asset/logoKubar.png" alt="" style="height: 70px; margin-left: 2%;">
      <a href="/beranda" class="logo d-flex flex-column align-items-start me-auto me-xl-0">
        <h1 class="sitename">Portal Sumber Rejo</h1>
        <h2 class="sub-title">kec. Sekolaq Darat, kab. Kutai Barat</h2>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/beranda">Beranda</a></li>
          <li class="dropdown">
            <a href="#"><span>Profil Desa</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="/tentang">Tentang Kami</a></li>
              <li><a href="/sejarah">Sejarah Desa</a></li>
              <li><a href="/visimisi">Visi & Misi</a></li>
              <li><a href="/geografis">Geografis Desa</a></li>
              <li><a href="/demografi">Demografi & Sosial Ekonomi Desa</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#"><span>Pemerintahan Desa</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="/struktur">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li><a href="/peta">Peta</a></li>
          <li class="dropdown">
            <a href="#"><span>Informasi Publik</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="/berita">Berita Desa</a></li>
              <li><a href="/galeri">Galeri Desa</a></li>
              <li><a href="/kkn">KKN Desa</a></li>
            </ul>
          </li>
          <li><a href="admin">ADMIN</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </header>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  
  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Dapatkan URL halaman saat ini
      var currentUrl = window.location.pathname;
  
      // Dapatkan semua elemen <a> dalam navbar
      var navLinks = document.querySelectorAll("#navmenu a");
  
      // Fungsi untuk menghapus kelas 'active' dari semua link
      function removeActiveClass() {
        navLinks.forEach(function (link) {
          link.classList.remove("active");
        });
      }
  
      // Loop melalui setiap link dan tambahkan kelas 'active' jika cocok dengan URL
      navLinks.forEach(function (link) {
        var linkPath = link.getAttribute("href");
        
        if (linkPath === currentUrl) {
          removeActiveClass();
          link.classList.add("active");
        }
  
        // Periksa jika link adalah bagian dari dropdown
        var parentDropdown = link.closest(".dropdown");
        if (parentDropdown) {
          var dropdownLinks = parentDropdown.querySelectorAll("ul li a");
          dropdownLinks.forEach(function (dropdownLink) {
            if (dropdownLink.getAttribute("href") === currentUrl) {
              removeActiveClass();
              parentDropdown.querySelector("a").classList.add("active");
            }
          });
        }
      });
    });
  </script>
  

  @yield("content")
</body>
</html>
