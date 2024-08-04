@extends('layouts.base')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        /* Style umum */
        .b {
            font-family: "Poppins", sans-serif;
            font-family: "Raleway", sans-serif;
        }
        body {
            background-color: rgb(29, 29, 29);
            margin: 0;
            padding: 0;
        }
        .tentang {
            background-color: rgb(29, 29, 29);
            margin: 0;
            padding: 0;
            position: relative;
            overflow: hidden;
        }
        .tentang::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('asset/motifjawa7.png');
            background-size: 300px 300px;
            background-repeat: repeat;
            background-position: center;
            opacity: 0.4;
            z-index: 1;
            mix-blend-mode: multiply;
        }
        .tentang .background {
            height: 100vh;
            position: relative;
            z-index: 2;
        }
        .tentang h1 {
            padding-top: 30px;
            font-size: 38px;
            font-weight: 700;
            font-family: var(--heading-font);
            text-align: center;
            color: rgb(237, 237, 237);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9);
        }
        .tentang hr {
            width: 50%;
            margin: 20px auto;
            border: 2px solid rgb(130, 130, 130);
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5);
        }
        .line {
            background-color: rgba(17, 17, 17, 0.668);
            height: 30px;
            display: flex;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.8);
        }
        .line .content {
            display: flex;
            align-items: center;
            color: rgb(146, 144, 144);
            font-family: var(--nav-font);
            font-size: 13px;
            margin-left: 2.3%;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9);
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
            margin-right: 5px;
        }
        .line .content span {
            margin-left: 2px;
        }
        .deskripsi {
            display: flex;
            justify-content: center;
            height: 400px;
            overflow: auto;
            padding: 20px;
        }
        .deskripsi img {
            max-width: 100%;
            max-height: 100%;
        }
        .deskripsi .details-box {
            background-color: rgba(17, 17, 17, 0.264); /* Semi-transparent box */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.8);
            width: 800px; /* Ensure the box is not too wide */
            color: rgb(237, 237, 237);
        }
        .deskripsi h3, .deskripsi p {
            margin: 10px 0;
            color: rgb(237, 237, 237);
        }
        .sidebar {
            margin-top: 6%;
            width: 200px;
            background-color: rgba(17, 17, 17, 0.9);
            color: white;
            padding: 20px;
            position: fixed;
            top: 0;
            bottom: 0;
            box-shadow: 0px 4px 6px rgba(1, 1, 1, 2);
            overflow-y: auto;
            background-image: url('path/to/your/background-image.jpg'); /* Path to your background image */
            background-size: cover; /* Cover the entire sidebar */
            background-repeat: no-repeat; /* Do not repeat the background image */
            background-position: center; /* Center the background image */
            z-index: 10; /* Ensure the sidebar is above the content */
        }
        .content {
            margin-left: 201px;
            color: white;
            z-index: 1; /* Ensure the content is below the sidebar */
            position: relative; /* Make sure z-index is applied correctly */
        }
        .submenu {
            cursor: pointer;
            margin: 10px 0;
            padding: 10px;
            background-color: rgba(50, 50, 50, 0.8);
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 1);
            font-size: 14px;
            font-family: var(--nav-font);
            font-weight: 400;
            display: flex;
            align-items: center;
            justify-content: space-between;
            white-space: normal; /* This ensures text wraps within the box */
            transition: 0.3s;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .submenu:hover {
            background-color: rgba(70, 70, 70, 0.8);
        }
        #details p {
            font-size: 14px;
            font-family: var(--nav-font);
            font-weight: 400;
            display: flex;
            align-items: center;
            justify-content: space-between;
            white-space: normal; /* This ensures text wraps within the box */
            transition: 0.3s;
            letter-spacing: 1px;
            text-transform: uppercase;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9);
        }
        .details-content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }
        .text-details {
            flex: 1;
        }
        .image-container {
            flex-shrink: 0;
            margin-left: 20px;
        }
        .image-container img {
            max-width: 150px; /* Adjust as needed */
            max-height: 100px; /* Adjust as needed */
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(1, 1, 1, 2);
        }
        .submenu.active {
            background-color: rgba(70, 70, 70, 0.8);
            /* Add any additional styles you want to apply when the item is active */
        }   
        .container1,
        .container2,
        .container3 {
            width: 363px;
            height: 400px;
            background-color: rgb(30, 30, 30);
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5);
            position: absolute;
            filter: brightness(60%);
            transition: all 0.5s ease; /* Animasi perpindahan */
        }
        .container1 img,
        .container2 img,
        .container3 img {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 100px;
            height: 100px;
            border-radius: 50%;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 1);
            object-fit: cover;
        }
        .container3 {
            height: 440px; /* Ukuran berbeda untuk fokus utama */
        }
        .container2 {
            right: 3%;
            top: 10%;
        }
        .container1 {
            left: 3%;
            top: 10%;
        }
        .container3 {
            left: 36%;
            top: 7%;
            filter: none; /* Tanpa reduksi kecerahan */
        }
        .swiper {
            left: 5%;
            top: 40%;
            align-content: center;
            position: absolute;
            width: 1300px;
            height: 600px;
            background-color: rgba(0, 0, 0, 0.47);
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5);
        }
        /* Tambahan CSS untuk testimonials agar tidak terpotong */
        .testimonials {
            padding-bottom: 50px; /* Pastikan ada ruang di bawah untuk elemen scroll-top */
        }
        #scroll-top {
            position: fixed;
            right: 20px;
            bottom: 20px;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5);
            cursor: pointer;
        }
        #scroll-top i {
            font-size: 24px;
        }
    </style>

    <div class="sidebar">
        @foreach($kkn as $k)
        <div class="submenu" onclick="showDetails('{{ $k->universitas }}', '{{ $k->angkatan }}', '{{ $k->tahun }}', '{{ $k->nama }}')">
            Angkatan {{ $k->angkatan }}
        </div>
        @endforeach
    </div>

    <div class="content">
        <section class="tentang">
            <div class="background">
                <div class="line">
                    <div class="content">
                        <span>Informasi Publik / </span>
                        <span style="color:rgba(223, 223, 223, 0.893)">KKN Desa</span>
                    </div>
                </div>
                <h1>PROFIL KKN</h1>
                <hr>
                <div id="details" class="deskripsi">
                    <!-- Konten detail -->
                </div>
            </div>
    
            <!-- Testimonials Section -->
            <div id="testimonials" class="testimonials section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Testimonials</h2>
                    <p>What they are saying</p>
                </div>
                <!-- End Section Title -->
    
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper init-swiper">
                        <script type="application/json" class="swiper-config">
                        {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000
                            },
                            "slidesPerView": "auto",
                            "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                            },
                            "breakpoints": {
                                "320": {
                                    "slidesPerView": 1,
                                    "spaceBetween": 40
                                },
                                "1200": {
                                    "slidesPerView": 3,
                                    "spaceBetween": 1
                                }
                            }
                        }
                        </script>
                        <div class="swiper-wrapper">
                            @foreach($search as $s)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    </div>
                                    <p>{{ $s->nama }}</p>
                                    <div class="profile mt-auto">
                                        <img src="{{ $s->gambar }}" class="testimonial-img" alt="">
                                        <h3>{{ $s->nama }}</h3>
                                        <h4>{{ $s->nama }}</h4>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <a id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
                    <i class="bi bi-arrow-up-short"></i>
                </a>
            </div>
            <!-- End Testimonials Section -->
        </section>
    </div>
    
    <script src="assets/js/main.js"></script>
    <script>
        // Fungsi untuk menandai item sidebar yang aktif
        function markActive(item) {
            const sidebarItems = document.querySelectorAll('.submenu');
            sidebarItems.forEach((sidebarItem) => {
                sidebarItem.classList.remove('active');
            });
            item.classList.add('active');
        }

        // Fungsi untuk menampilkan detail berdasarkan sidebar yang dipilih
        function showDetails(jabatan, nama, keterangan, nip, gambar) {
            const detailsDiv = document.getElementById('details');
            
            // Tentukan sumber gambar default
            const defaultImage = 'asset/defaultpp.jpg';
            
            // Tentukan sumber gambar yang akan digunakan
            const imageUrl = gambar && gambar.trim() !== "" ? gambar : defaultImage;
            
            detailsDiv.innerHTML = `
                <div class="details-box">
                    <div class="details-content">
                        <div class="text-details">
                            <p>Jabatan : ${jabatan}</p>
                            <p>Nama Pejabat  : ${nama}</p>
                            <p>NIP     : ${nip}</p> 
                            <p style="margin-top:50px;text-transform: capitalize;">${keterangan}</p>
                        </div>
                        <div class="image-container">
                            <img src="${imageUrl}" alt="Gambar Detail">
                        </div>
                    </div>
                </div>
            `;
            
            markActive(event.target); // tandai elemen sidebar yang dipilih sebagai aktif
            isManualOverride = true; // aktifkan interaksi manual
            stopAutoSwitch(); // hentikan beralih otomatis
        }

        document.addEventListener('DOMContentLoaded', () => {
            // Panggil showDetails untuk submenu pertama saat halaman dimuat
            const firstSubmenu = document.querySelector('.submenu');
            if (firstSubmenu) {
                firstSubmenu.click();
            }
        });
    </script>
@endsection
