@extends('layouts.base')
@section('content')
<div id="preloader">
    <div class="loader"></div>
</div>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="style_beranda.css">



<div class="slider1">
    <!-- list Items -->
    <div class="list">
        <div class="item active">
            <img src="asset/sumbertest.jpeg">
            <div class="content">
                <p></p>
                <h2>KKN</h2>
                <p>
                   Kegiatan Mahasiswa....
                </p>
            </div>
        </div>
        <div class="item">
            <img src="asset/sumbertest2.jpeg">
            <div class="content">
                <p></p>
                <h2>KKN</h2>
                <p>
                    Kegiatan Mahasiswa....?
                  
                </p>
            </div>
        </div>
        <div class="item">
            <img src="asset/sumbertest3.jpeg">
            <div class="content">
                <p></p>
                <h2>KKN</h2>
                <p>
                    Sosialisasi TPU bersama dinas kesehatan
                </p>
            </div>
        </div>
      
    </div>
    <!-- button arrows -->
    <div class="arrows">    
        <button id="prev"><</button>
        <button id="next">></button>
    </div>
    <!-- thumbnail -->
    <div class="thumbnail">
        <div class="item active">
            <img src="asset/sumbertest.jpeg">
            <div class="content">
                Name Slider
            </div>
        </div>
        <div class="item">
            <img src="asset/sumbertest2.jpeg">
            <div class="content">
                Name Slider
            </div>
        </div>
        <div class="item">
            <img src="asset/sumbertest3.jpeg">
            <div class="content">
                Name Slider
            </div>
        </div>
    </div>
   
</div>

<section class="berita">
    <div class="line">
        <h1 id="berita-link">
            <span id="berita">BERITA</span>
            <span class="desa">DESA</span>
            <span class="tooltip">Lihat lainnya</span>
        </h1>
    </div>
    
    <div class='container1'>
        @foreach($search as $p)
      
        <a href="{{ url('halamanberita', ['id' => $p->id]) }}" class="donation-link">
           
            <div class="per-content" data-judul="{{ strtolower($p->judul) }}" data-pemilik="{{ strtolower($p->pemilik) }}" data-wilayah="{{ strtolower($p->wilayah) }}" data-id="{{ $p->id }}">
                <div class="img-container">
                    <img src="{{ $p->gambar }}" alt="">
                </div>
                <div class="deskripsi">
                    <h2 class="title">{{ $p->judul }}</h2>
                    <p class="owner">By {{ $p->role_pemilik }}</p>
                    <p class="likes">telah dilihat {{ $p->viewer }} kali </p>
                    <p class="location"> {{ $p->tanggal }}</p>
                </div>
            </div>
        </a>
        @endforeach
        <div class="pagination-wrapper">
            {{ $search->links() }}
        </div>
        
    </div>
    <div class="line-galeri">
        <h1 id="galeri-link">
            <span id="berita">GALERI</span>
            <span class="desa">DESA</span>
            <span class="tooltip">Lihat lainnya</span>
        </h1>
    </div>
    
    <div class="slider"  style="
    --width: 200px;
    --height: 250px;
    --quantity: 9;
    ">
    <div class="list">
        <div class="item" style="--position: 1"><img src="asset/images/1.jpeg" alt=""loading="lazy"></div>
        <div class="item" style="--position: 2"><img src="asset/images/2.jpeg" alt=""loading="lazy"></div>
        <div class="item" style="--position: 3"><img src="asset/images/3.jpeg" alt=""loading="lazy"></div>
        <div class="item" style="--position: 4"><img src="asset/images/4.jpeg" alt=""loading="lazy"></div>
        <div class="item" style="--position: 5"><img src="asset/images/5.jpeg" alt=""loading="lazy"></div>
        <div class="item" style="--position: 6"><img src="asset/images/6.jpeg" alt=""loading="lazy"></div>
        <div class="item" style="--position: 7"><img src="asset/images/7.jpeg" alt=""loading="lazy"></div>
        <div class="item" style="--position: 8"><img src="asset/images/8.jpeg" alt=""loading="lazy"></div>
        <div class="item" style="--position: 9"><img src="asset/images/6.jpeg" alt=""loading="lazy"></div>
    </div>
</div>

<div class="line">
    <h1><span id="berita">STRUKTUR</span> <span class="desa">DESA</span></h1>
</div>
</section>

<section class="peta-section">

    <div class="line">
        <h1><span id="berita">BPU Kampung Sumber</span> <span class="desa">Rejo</span></h1>
    </div>
    <div class="peta">
     
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31918.160201112834!2d115.70379363488102!3d-0.28191196638975674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df78da32ece8949%3A0x3907d0df3ff06f5e!2sBPU%20Kampung%20Sumber%20Rejo!5e0!3m2!1sid!2sid!4v1721053342737!5m2!1sid!2sid" width="1600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div> 
</section>

<footer style="background-color: #141414cd; color: white; padding: 20px; text-align: center;">
    <p>Website Desa Sumber Rejo</p>
    <p style="margin-top: 10px;">&copy;MAHASISWA UNIVERSITAS MULAWARMAN KKN 50 KUBAR 36</p>
    <a href="https://www.instagram.com/yourprofile" target="_blank" style="display: inline-block; margin-top: 10px; color: white; text-decoration: none;">
        <a href="https://www.instagram.com/kkn50_sumber.rejo/" class="instagram"><i style="color:white;"class="bi bi-instagram"></i></a>
    </a>
</footer>
  </section>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
<script>
        document.addEventListener('DOMContentLoaded', function () {
            // Select and remove specific SVG elements
            document.querySelectorAll('svg.w-5.h-5').forEach(function(svg) {
                svg.remove();
            });

            // Select and remove the specific div element
            const divToRemove = document.querySelector('.hidden.sm\\:flex-1.sm\\:flex.sm\\:items-center.sm\\:justify-between');
            if (divToRemove) {
                divToRemove.remove();
            }
        });

        document.getElementById('galeri-link').onclick = function() {
    window.location.href = 'galeri'; // Ganti dengan URL tujuan
}
document.getElementById('berita-link').onclick = function() {
    window.location.href = 'berita'; // Ganti dengan URL tujuan untuk halaman BERITA DESA
}

let items = document.querySelectorAll('.slider1 .list .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let thumbnails = document.querySelectorAll('.thumbnail .item');

// config param
let countItem = items.length;
let itemActive = 0;
// event next click
next.onclick = function(){
    itemActive = itemActive + 1;
    if(itemActive >= countItem){
        itemActive = 0;
    }
    showSlider();
}
//event prev click
prev.onclick = function(){
    itemActive = itemActive - 1;
    if(itemActive < 0){
        itemActive = countItem - 1;
    }
    showSlider();
}
// auto run slider
let refreshInterval = setInterval(() => {
    next.click();
}, 5000)
function showSlider(){
    // remove item active old
    let itemActiveOld = document.querySelector('.slider1 .list .item.active');
    let thumbnailActiveOld = document.querySelector('.thumbnail .item.active');
    itemActiveOld.classList.remove('active');
    thumbnailActiveOld.classList.remove('active');

    // active new item
    items[itemActive].classList.add('active');
    thumbnails[itemActive].classList.add('active');

    // clear auto time run slider
    clearInterval(refreshInterval);
    refreshInterval = setInterval(() => {
        next.click();
    }, 5000)
}

// click thumbnail
thumbnails.forEach((thumbnail, index) => {
    thumbnail.addEventListener('click', () => {
        itemActive = index;
        showSlider();
    })
})

$(window).on('load', function() {
        $('#preloader').fadeOut('slow', function() {
            $(this).remove();
        });
    });

    </script>


@endsection
