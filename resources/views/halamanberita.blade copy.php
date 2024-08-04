<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portal Sumber Rejo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <!-- Favicons -->
<link href="{{ asset('asset/logoKubar.png') }}" rel="icon">
<link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Cardo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
 
  <link rel="stylesheet" href="{{ asset('main.css') }}">
  @yield('additional-css') <!-- Jika ada CSS tambahan per halaman -->
  <style>
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

    .news {
      background-color: rgb(29, 29, 29);
      background: linear-gradient(
        to top, 
        rgb(8, 8, 8) 0%, /* Warna pertama dimulai dari 0% */
        rgb(8, 8, 8) 25%, /* Tetap hitam hingga 25% */
        rgb(29, 29, 29) 100% /* Warna kedua mulai dari 25% hingga 100% */
    );
    margin: 0;
    padding: 0;
    position: relative;
    overflow: hidden;
    height: 200vh; /* Tinggi penuh layar */
}

.news::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url('{{ asset('asset/motif.jpg') }}');
    background-size: 300px 300px;
    background-repeat: repeat;
    background-position: center;
    opacity: 0.2;
    z-index: 1;
    mix-blend-mode: multiply;
}

.container-gmbr {
  border-radius: 5px;
  width:750px;
  height: 430px;
    position: relative;
    z-index: 2;
    overflow: hidden; /* Hide overflow content */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5); /* Add shadow effect */
    margin-top: 10px;
}

.container-gmbr img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease; /* Smooth scaling transition */
}

.container-gmbr:hover img {
    transform: scale(1.1); /* Scale image to 110% on hover */
} 
.judul {

    position: relative;
    z-index: 2;
    color: #e8e8e8f4;
    font-weight: 700;
    text-transform: capitalize;
    white-space: normal; /* Allow text to wrap to the next line */
    overflow: visible; /* Ensure the text isn't clipped or hidden */
    text-overflow: clip; /* Prevent truncation of the text */
    line-height: 1.2; /* Adjust line spacing if necessary */
    max-width: 100%; /* Ensure the text container doesn't exceed the parent's width */
    text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.293);
}


.page {
  width: 750px;
    display: flex;
    /* background-color: rgba(0, 0, 0, 0.259); */
    flex-direction: column;
    position: absolute;
    height: 100%;
    margin-left: 12.3%;
    margin-top: 1%;
}

.line {
            background-color: rgba(17, 17, 17, 0.668);
            height: 30px; /* Increased height to accommodate icon and text */
            display: flex;
            
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.8); /* Add shadow below the line */
        }
        .line .content {
    display: flex;
    align-items: center;
    color: rgb(146, 144, 144);
    font-family: var(--nav-font);    
    font-size: 13px;
    margin-left: 13.8%; /* You might want to adjust or remove this */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9); /* Add text shadow */
    font-family: var(--nav-font);
                        padding: 18px 15px;
        font-size: 14px;
        font-family: var(--nav-font);
        font-weight: 400;
        display: flex;
        align-items: center;
        justify-content: space-between;
        white-space: nowrap;
        transition: 0.3s;
       
        letter-spacing: 1px;
}
.line .content svg {
    width: 24px;
    height: 24px;
    margin-right: 5px; /* Reduced margin */
}

.line .content span {
    margin-left: 2px; /* Reduced margin */
}
button{ 
  z-index: 1;
  width: 100px;
  height: 100px;
  background-color: red;
  margin-top: 10%;
}
.info-container {
    display: flex;
  margin-bottom: 5px;
    gap: 10px; /* Adjust spacing as needed */
}

.info-item {
    display: flex;
    align-items: center;
    gap: 8px; /* Space between icon and text */
    margin-left: 5px;
    z-index: 9;
  }



.info-item p {
    margin: 0; /* Remove default margin from paragraphs */
    font-size: 0.7em; /* Adjust text size as needed */
    color: #989696; /* Adjust text color as needed */
   

        font-family: var(--nav-font);
        font-weight: 700;
       
        align-items: center;
       text-transform: uppercase;
        white-space: nowrap;
        transition: 0.3s;
       
        letter-spacing: 1px;
        text-shadow: 4px 4px 4px black;

}
.deskripsi{
  z-index: 2;
}

@media (max-width: 768px) {
  .container-gmbr {
    width: calc(100% - 20px); /* Adjust width to fit within the screen */
    height: auto; /* Adjust height as needed */
    margin: 0 auto; /* Center align the container */
  }
  .line .content{
    margin-left:0;
  }
  .info-container{
    margin-bottom: 10px;
  }
  .news{
   padding-left: 10px;

  }
 
  .page {
    width: calc(100% - 20px); /* Adjust width to fit within the screen */
    margin-left: auto; /* Center align the container */
    margin-right: auto; /* Center align the container */
    margin-top: 10px; /* Adjust margin for mobile */
  }

  .line .content {
    font-size: 8px; /* Adjust font size for mobile */
     /* Adjust margin for mobile */
  }

  button {
    width: 80px;
    height: 80px;
  }

  .info-item p {
    font-size: 0.6em; /* Adjust text size for mobile */
  }

}


.deskripsi{
  margin-top: 10px;

}
.others {
  cursor: pointer;
  margin-right: 50px;
  margin-top: 150px;
  margin-left: auto;
  padding: 20px;
  max-width: 300px;
  position: relative;
  z-index: 1;
  background-color: rgba(54, 54, 54, 0.258);
  border-radius: 10px;
  box-shadow: 4px 4px 4px black;
}

.item {
  display: flex;
  flex-direction: column; /* Aligns children in a column */
  border: solid rgba(149, 149, 149, 0.167);
  padding: 2px 2px 2px;
  border-radius: 4px;
  box-shadow: 4px 4px 4px black;  
  margin-bottom: 10px;
}

.item img {
  width: 100px;
  height: auto;
  max-height: 66px;
  margin-right: 10px; /* Reduced margin */
  border-radius: 6px;
}

.details {
  display: flex;
  flex-direction: column; /* Aligns judul-others vertically with image */
  margin: 0; /* Removes default margin */
}
.judul-others{
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9); /* Add text shadow */
    font-family: var(--nav-font);

        font-size: 10px;
        font-family: var(--nav-font);
        font-weight: 400;
       
      text-transform: capitalize;
       
        transition: 0.3s;
       
        letter-spacing: 1px;
}

.info {
  display: flex;
  flex-direction: row; /* Displays items in a row */
  align-items: center; /* Aligns items vertically centered */
  gap: 5px; /* Reduced space between items in info */
  margin-top: 5px; /* Reduced space above info */
}

.other-item {
  display: flex;
  align-items: center; /* Aligns icon and text vertically */
  margin: 0; /* Removes default margin */
}

.calendar-icon, .viewer-icon {
  margin-right: 3px; /* Reduced space between icon and text */
}

.other-item p {
  margin: 0; /* Remove default margin from paragraphs */
  font-size: 0.7em; /* Adjust text size as needed */
  color: #989696; /* Adjust text color as needed */
  font-family: var(--nav-font);
  font-weight: 700;
  text-transform: uppercase;
  white-space: nowrap;
  transition: 0.3s;
  letter-spacing: 1px;
  text-shadow: 4px 4px 4px black;
}

.image-and-details {
  display: flex;
  align-items: flex-start; /* Aligns image and details at the top */
  margin-bottom: 5px; /* Reduces space between image/details and info */
}

.image-and-details img {
  margin-right: 10px; /* Reduced space between image and details */
}
a{
  color: white;
}
a:hover{
  color: rgba(254, 254, 254, 0.853)
}
/* Aturan untuk perangkat mobile */
@media (max-width: 1283px) {
  .others {
    display: none;
  }
  .others2 {
    display: block;
  }
}

/* Aturan untuk perangkat desktop dan tablet */
@media (min-width: 1283px) {
  .others2 {
    display: none;
  }
}


.others2 {
  cursor: pointer;

  margin-top: 200px;
  position: relative;
  z-index: 1000;
  background-color: rgba(54, 54, 54, 0.258);
  border-radius: 10px;
  box-shadow: 4px 4px 4px black;
}

.comment-section{
  background-color: white;

  position: relative;
  z-index: 1;

}
.comment-section {
  background-color: #f9f9f9;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  padding: 16px;
  max-width: 800px;
  margin: 0 auto;
}

.comment-header h2 {
  font-size: 1.5em;
  border-bottom: 2px solid #ddd;
  padding-bottom: 8px;
  margin-bottom: 16px;
}

.comment-list {
  margin-bottom: 16px;
}

.comment-item {
  display: flex;
  margin-bottom: 16px;
  padding: 12px;
  border: 1px solid #ddd;
  border-radius: 8px;
  background-color: #fff;
}

.comment-avatar img {
  border-radius: 50%;
  width: 50px;
  height: 50px;
  object-fit: cover;
  margin-right: 12px;
}

.comment-content {
  flex: 1;
}

.comment-author {
  font-weight: bold;
  margin: 0;
}

.comment-text {
  margin: 8px 0 0;
}

.comment-form textarea {
  width: calc(100% - 20px);
  height: 80px;
  padding: 10px;
  border-radius: 8px;
  border: 1px solid #ddd;
  resize: none;
  margin-bottom: 12px;
}

.comment-form button {
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 8px;
  padding: 10px 20px;
  cursor: pointer;
  font-size: 1em;
}

.comment-form button:hover {
  background-color: #0056b3;
}

  </style>

</head>
<body class="about-page">
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
      <img src="{{ asset('asset/logoKubar.png') }}" alt="" style="height: 70px; margin-left: 2%;">
      <a href="/beranda" class="logo d-flex flex-column align-items-start me-auto me-xl-0">
        <h1 class="sitename">Portal Sumber Rejo</h1>
        <h2 class="sub-title">kec. Sekolaq Darat, kab. Kutai Barat</h2>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/beranda" >Beranda</a></li>
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
          <li class="dropdown active">
            <a href="#" class="active"><span>Informasi Publik</span> <i class="bi bi-chevron-down toggle-dropdown active"></i></a>
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
  <div class="line">
    <div class="content">
        <span class="profil-desa">Profil Desa / </span>
        <span >Berita Desa /</span>
        @foreach($result as $p)
        <span style="color: rgba(223, 223, 223, 0.893); text-transform: capitalize;">{{$p->judul}}</span>
        @endforeach
    </div>
</div>

<section class="news">
  @foreach($result as $p)
  <div class="page">
      <h1 class="judul">{{$p->judul}}</h1>
      <div class="info-container">
        <div class="info-item">
          <img src="{{ asset('asset/calender.svg') }}" alt="Kalender" class="calendar-icon" style="width: 20px;">
          <p class="tanggal">{{ $p->tanggal }}</p>
        </div>
        <div class="info-item">
          <img src="{{ asset('asset/user.svg') }}" alt="admin" class="admin-icon" style="width: 20px; ">
          <p class="role">{{ $p->role_pemilik }}</p>
        </div>
        <div class="info-item">
          <img src="{{ asset('asset/eye-solid.svg') }}" alt="viewer" class="viewer-icon" style="width: 20px; ">
          <p class="viewer">{{ $p->viewer }}</p>
        </div>
      </div>
    
      <div class="container-gmbr">
          <img src="{{$p->gambar}}" alt="">
      </div>
      
      <div class="deskripsi">
        <p>{{ $p->deskripsi }}
        </p>
      </div>
      <div class="comment-section">
        <div class="comment-header">
          <h2>Comments</h2>
        </div>
        <div class="comment-list">
          <div class="comment-item">
            <div class="comment-avatar">
              <img src="{{ asset('asset/logoKubar.png') }}" alt="User Avatar">
            </div>
            <div class="comment-content">
              <p class="comment-author">John Doe</p>
              <p class="comment-text">This is a sample comment. It looks clean and elegant!</p>
            </div>
          </div>
          <!-- More comment items can be added here -->
        </div>
        <div class="comment-form">
          <textarea placeholder="Add a comment..."></textarea>
          <button type="submit">Post Comment</button>
        </div>
      </div>
      
      
  <div class="others2">
    <h1>Berita Lainnya</h1>
    @foreach($beritaLain as $b)
   
    <a href="{{ url('halamanberita', ['id' => $b->id]) }}" class="donation-link">
    <div class="item">
      <div class="image-and-details">
        <img src="{{$b->gambar}}" alt="">
        <div class="details">
          <p class="judul-others">{{$b->judul}}</p>
        </div>
      </div>
      <div class="info">
        <div class="other-item">
          <img src="{{ asset('asset/calender.svg') }}" alt="Kalender" class="calendar-icon" style="width: 15px;">
          <p class="tanggal-others">{{$b->tanggal}}</p>
        </div>
        <div class="other-item">
          <img src="{{ asset('asset/eye-solid.svg') }}" alt="viewer" class="viewer-icon" style="width: 15px;">
          <p class="viewer-others">{{$b->viewer}}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  </div>
  @endforeach
  <div class="others">
    <h1>Berita Lainnya</h1>
    @foreach($beritaLain as $b)
   
    <a href="{{ url('halamanberita', ['id' => $b->id]) }}" class="donation-link">
    <div class="item">
      <div class="image-and-details">
        <img src="{{$b->gambar}}" alt="">
        <div class="details">
          <p class="judul-others">{{$b->judul}}</p>
        </div>
      </div>
      <div class="info">
        <div class="other-item">
          <img src="{{ asset('asset/calender.svg') }}" alt="Kalender" class="calendar-icon" style="width: 15px;">
          <p class="tanggal-others">{{$b->tanggal}}</p>
        </div>
        <div class="other-item">
          <img src="{{ asset('asset/eye-solid.svg') }}" alt="viewer" class="viewer-icon" style="width: 15px;">
          <p class="viewer-others">{{$b->viewer}}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</a>
 
  
</section>



<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<!-- Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>
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
  <script>
     document.addEventListener('DOMContentLoaded', function() {
        // Seleksi semua elemen dengan kelas 'judul'
        const titles = document.querySelectorAll('.judul');

        titles.forEach(title => {
            // Ubah isi teks setiap judul
            title.innerHTML = title.innerHTML.split(' ').map(word => {
                // Ubah menjadi huruf besar jika kata adalah 'KKN'
                return word.toUpperCase() === 'KKN' ? 'KKN' : word;
            }).join(' ');
        });
    });
  </script>
</body>
<footer style="
    background-color: #141414;
    color: white;
    padding: 20px;
    text-align: center;
    position: relative;
    font-family: Arial, sans-serif;
">
    <p style="margin: 0;">Website Desa Sumber Rejo</p>
    <p style="margin: 10px 0 0;">&copy; MAHASISWA UNIVERSITAS MULAWARMAN KKN 50 KUBAR 36</p>
    <a href="https://www.instagram.com/kkn50_sumber.rejo/" target="_blank" style="
        display: inline-block;
        margin-top: 10px;
        color: white;
        text-decoration: none;
        font-size: 24px;
    ">
        <i class="bi bi-instagram" style="color: white;"></i>
    </a>
</footer>

</html>
