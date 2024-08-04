
@extends('layouts.base')
@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="style_beranda.css">


<style>

@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Quicksand:wght@300..700&display=swap');

.sruktur-container {
  display: flex;
  justify-content: center;
  align-items: center;

  background-color: transparent;
  color: white;
  overflow: hidden;
}

.swiper {
  width: 100%;
  padding: 0; /* Menghapus padding atas dan bawah */
  margin: 0;  /* Menghapus margin default */
}

.swiper-slide {
  position: relative;
  width: 320px;
  aspect-ratio: 3/4;
  border-radius: 14px;
  /* border: 1px solid rgba(177,177,177,0.4); */
  margin: 0; /* Menghapus margin default */
}

.swiper-slide img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: contain;
  border-radius: 14px;
  /* border: 1px solid rgba(177,177,177,0.4);*/
}

.title1 {
  position: absolute;
  bottom: 5px;
  left: 50%;
  transform: translate(-50%, -20%);
  -ms-transform: translate(-50%, -20%);
  width: max-content;
  text-align: center;
  padding: 10px 18px;
  background: rgba(46, 39, 39, 0.3);
  border-radius: 8px;
  border: 2px solid rgba(177, 177, 177, 0.4);
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  transition: all 0.5s linear;
}

.title1 span {
  font-size: 1.2rem;
  font-weight: 600;
}

.swiper-slide-active .title1 {
  bottom: -10px;
  box-shadow: 0 20px 30px 2px rgba(25, 43, 286, 0.6);
}

.swiper-pagination {
  --swiper-pagination-bottom: -6px;
}

.swiper-pagination-bullet {
  width: 14px;
  height: 14px;
  background-color: #ffff;
  border-radius: 50%;
  transition: all 0.3s ease-in-out;
}

.swiper-pagination-bullet-active {
  width: 32px;
  background-color: rgba(25, 43, 286, 1);
  border-radius: 14px;
}

@media (max-width: 1100px) {
  .swiper-slide {
    width: 300px;
  }

  

  
}

@media (max-width: 900px) {
  .swiper-slide {
    width: 250px;
  }
}

@media (max-width: 700px) {
  .swiper-slide {
    width: 230px;
  }
}

@media (max-width: 610px) {
  .swiper-slide {
    width: 200px;
  }
}
.chart-container {
    position: relative;
    width: 600px;
    height: 300px;
    margin-top: 1%;
    margin-left: auto;
    margin-right: auto; /* Pusatkan container secara horizontal */
    z-index: 1;
}

.arrow {
    position: absolute;
    font-size: 24px;
    cursor: pointer;
    user-select: none;
    color: #ffffff !important;
    bottom: -40px; /* Jarak dari bawah container */
    left: 50%; /* Pusatkan secara horizontal */
    transform: translateX(-50%); /* Sesuaikan elemen agar berada tepat di tengah */
    z-index: 1;
   
}

.arrow-right {
    /* Tidak perlu posisi absolut khusus di sini jika ingin menggunakan gaya umum .arrow */
}
        @media (max-width: 768px) {
    .chart-container {
        width: 100%;
        height: auto; /* Mengatur tinggi otomatis berdasarkan rasio lebar */
        margin-left: 0; /* Menghilangkan margin di layar kecil */
    }
    .yang-ini{
        margin-top: 8%;
    }
}

/* Media query untuk layar dengan lebar maksimum 480px */
@media (max-width: 480px) {
    .chart-container {
        width: 100%;
        height: auto; /* Mengatur tinggi otomatis berdasarkan rasio lebar */
        margin-left: 0; /* Menghilangkan margin di layar kecil */
    }

    .arrow {
        font-size: 18px; /* Mengurangi ukuran font untuk arrow di layar kecil */
    }
}
.container-sj {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 3%;
}

.peta-sj-container {
    z-index: 1;
    position: relative;
    border: solid black;

}

.peta-sj-container img {
    width: 800px;
    height: 400px;
    box-shadow: 4px 4px 4px black;
}

@media(max-width: 800px){
    .container-sj {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 3%;
}


.peta-sj-container {
    z-index: 1;
    position: relative;
    border: solid black;

}

.peta-sj-container img {
    width: 400px;
    height: 400px;
    box-shadow: 4px 4px 4px black;
}
}
.peta {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin: 20px;
    flex-wrap: wrap;
}

.map-container {
    flex: 2;
    margin-right: 10px;
}

.map-container iframe {
    width: 100%;
    height: 500px;
    border: 0;
}

.deskripsi-map {
    margin-top: 1.2%;
    flex: 1;
    background-color: rgb(255, 255, 255);
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    height: 500px; /* Adjusted for better responsiveness */
    
}

.deskripsi-map p {
    display: flex;
    justify-content: space-between;
    margin: 10px 0;
}

.label {
    flex: 1;
    min-width: 150px; /* Adjust as needed */
    color: #232323;

}

.colon {
    flex: 0 0 10px; /* Adjust as needed */
    text-align: center;
}

.value {
    flex: 2;
    color: rgb(65, 65, 65)
}

/* Media query for mobile view */
@media (max-width: 600px) {
    .peta {
        flex-direction: column;
    }

    .map-container {
        margin-right: 0;
        margin-bottom: 20px;
    }

    .deskripsi-map {
        padding: 10px;
    }

    .map-container iframe {
        height: 300px; /* Adjust the height as needed for mobile */
    }
}


</style>
<div class="slider1">
   <div class="list">
    @foreach($tampilan as $item)
        <div class="item @if($loop->first) active @endif">
            <img src="{{ asset('storage/' . $item->gambar) }}" alt="">
            <div class="content">
                <p></p>
                <h2>{{ $item->judul }}</h2>
                <p>{{ $item->deskripsi }}</p>
            </div>
        </div>
    @endforeach
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
                    <img src="{{ asset('storage/' . $p->gambar) }}" alt="">
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
    
    <div class="slider" style="
    --width: 200px;
    --height: 250px;
    --quantity: {{ $galeriImages->count() }};
  ">
    <div class="list">
      @foreach($galeriImages as $index => $g)
        <div class="item" style="--position: {{ $index + 1 }}">
          <img src="{{ asset('storage/' . $g->gambar) }}" alt="">
        </div>
      @endforeach
    </div>
  </div>
  

<div class="line">
    <h1><span id="berita">PERANGKAT</span> <span class="desa">DESA</span></h1>
</div>
<div class="sruktur-container">
<div class="swiper">
   
    <div class="swiper-wrapper">
        <div class="swiper-slide">  
            <img src="asset/kkn/1.png" alt="">
            <div class="title1">
                <span>Tes3</span>
            </div>
        </div>
      <div class="swiper-slide">
        <img src="asset/kkn/5.png" alt="">
        <div class="title1">
            <span>Tes1</span>
        </div>
      </div>
      <div class="swiper-slide">
        <img src="asset/kkn/6.png" alt="">
        <div class="title1">
            <span>Tes2</span>
        </div>
      </div>
      <div class="swiper-slide">  
        <img src="asset/kkn/10.png" alt="">
        <div class="title1">
            <span>Tes3</span>
        </div>
    </div>
    <div class="swiper-slide">  
        <img src="asset/kkn/7.png" alt="">
        <div class="title1">
            <span>Tes3</span>
        </div>
    </div>
    <div class="swiper-slide">  
        <img src="asset/kkn/8.png" alt="">
        <div class="title1">
            <span>Tes3</span>
        </div>
    </div>
    </div>

  </div>
  
</div>
<div class="line">
    <h1><span id="berita">DATA</span> <span class="desa">DESA</span></h1>
</div>
<div class="chart-container">
                    
    <canvas id="myChart" ></canvas>
    
    <span class="arrow arrow-right" onclick="changeChart(1)" style="color: white">Selanjutnya &#9654;</span>
</div>
<div class="line yang-ini" >
    <h1><span id="berita">PETA</span> <span class="desa">DESA SUMBER REJO</span></h1>
</div>
<div class="container-sj">
    <div class="peta-sj-container">
        <img src="asset/peta.jpg" alt="">
    </div>
</div>

</section>  

<section class="peta-section">

    <div class="line">
        <h1><span id="berita">BPU Kampung Sumber</span> <span class="desa">Rejo</span></h1>
    </div>
    <div class="peta">
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31918.160201112834!2d115.70379363488102!3d-0.28191196638975674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df78da32ece8949%3A0x3907d0df3ff06f5e!2sBPU%20Kampung%20Sumber%20Rejo!5e0!3m2!1sid!2sid!4v1721053342737!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="deskripsi-map">
            <p><span class="label">SEBELAH UTARA</span><span class="colon">:</span><span class="value">SEKOLAQ MULIAQ</span></p>
            <p><span class="label">SEBELAH SELATAN</span><span class="colon">:</span><span class="value">SEKOLAQ DARAT</span></p>
            <p><span class="label">SEBELAH TIMUR</span><span class="colon">:</span><span class="value">EMPAS</span></p>
            <p><span class="label">SEBELAH BARAT</span><span class="colon">:</span><span class="value">SRI MULYO</span></p>
           
        </div>
    </div>
    
    
    
</section>
<footer style="
    background-color: #141414;
    color: white;
    padding: 20px;
    text-align: center;
    position: relative;
    font-family: Arial, sans-serif;
    font-size: 13px;
    font-weight: 400;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.8);
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    white-space: nowrap;
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

  </section>
  <script>"https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"</script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
<script>
    const chartsData = [
            {
                labels: ['0-4', '05-09', '10-14', '15-19', '20-24', '25-29', '30-34', '35-39', '40-44', '45-49', '50-54', '55-59', '60-64', '65-69', '70-74', '75+'],
                datasets: [{
                    label: 'Jumlah Penduduk: 590',
                    data: [59, 69, 47, 39, 45, 42, 40, 51, 56, 35, 21, 28, 34, 12, 5, 7],
                    backgroundColor: '#36A2EB',
                    borderColor: '#1E3A8A',
                    borderWidth: 1
                }]
            },
            {
                labels: ['Islam', 'Kristen'],
                datasets: [{
                    label: 'Data Agama',
                    data: [585, 5],
                    backgroundColor: ['#FF6384', '#36A2EB'],
                    borderColor: ['#FF6384', '#36A2EB'],
                    borderWidth: 1
                }]
            },
            {
                labels: ['Pelajar', 'IRT', 'Petani', 'PNS', 'TNI', 'POLRI', 'Lainnya', 'Belum/Tidak Bekerja'],
                datasets: [{
                    label: 'Data Pekerjaan',
                    data: [236, 128, 90, 11, 2, 2, 113, 8],
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#E6B0AA', '#A2D9CE', '#D5DBDB', '#D7BDE2', '#F7DC6F'],
                    borderColor: ['#FF6384', '#36A2EB', '#FFCE56', '#E6B0AA', '#A2D9CE', '#D5DBDB', '#D7BDE2', '#F7DC6F'],
                    borderWidth: 1
                }]
            }
        ];

        let currentIndex = 0;

        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: chartsData[currentIndex],
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const label = context.label || '';
                                const value = context.raw || 0;
                                return `${label}: ${value}`;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        beginAtZero: true
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        function changeChart(direction) {
            currentIndex = (currentIndex + direction + chartsData.length) % chartsData.length;
            myChart.data = chartsData[currentIndex];
            myChart.update();
        }

</script>

@endsection
