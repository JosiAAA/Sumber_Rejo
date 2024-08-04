@extends('layouts.base')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <style>
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
            background: linear-gradient(to bottom, rgb(19, 19, 19), rgb(29, 29, 29));
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
            background-image: url('asset/motif.jpg');
            background-size: 300px 300px;
            background-repeat: repeat;
            background-position: center;
            opacity: 0.2;
            z-index: 1;
            mix-blend-mode: multiply;
        }

        .tentang .background {
            height: auto;
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
            margin-left:10.5%;
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
            overflow: hidden;
            padding: 20px;
        }

        .deskripsi img {
            max-width: 100%;
            max-height: 100%;
        }

        

        
.deskripsi h3, .deskripsi p {
    margin: 10px 0;
    color: rgb(237, 237, 237);
}

        .sidebar {
           position: absolute;
            width: 160px;
    background-color: rgba(17, 17, 17, 0.9);
    color: white;
    padding: 20.1px;
    
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
    margin-left:0px;
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
            font-size: 12px;
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
        #details p{
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
        .deskripsi .details-box {
    background-color: rgba(50, 50, 50, 0.838); /* Semi-transparent box */
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.8);
    max-width: 100%;    color: rgb(237, 237, 237);
}

.details-content {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}
@media (max-width: 768px) {
  .details-content {
    flex-direction: column;
    align-items: center;
  }

  .image-container {
    display: none;
  }

  .text-details {
    font-size: 0.9em; /* Adjust as needed for smaller text */
  }
}
.text-details {
    flex: 1;
}

.image-container {
    flex-shrink: 0;
    margin-left: 20px;
}

.image-container img {
    width: 170px; /* Adjust as needed */
    height: 200px; /* Adjust as needed */
    border-radius: 5px;
    box-shadow: 0px 4px 6px rgba(1, 1, 1, 2);
}
.submenu.active {
    background-color: rgba(70, 70, 70, 0.8);
    /* Add any additional styles you want to apply when the item is active */
}   

/* Atur ukuran container dan gambar */

@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
*{
    margin: 0;
    padding: 0;
    font-family:"Montserrat",sans-serif;
    box-sizing: border-box;
}
.kkn-content{
    top: 0;
    margin: 0;
    background-color: transparent;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}

.card-list .card-item {
    color: #fff;
    user-select: none;
    width: 400px;
    padding: 35px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border-radius: 8px;
    background: rgb(29, 29, 29);
    box-shadow: 0px 4px 6px rgba(1, 1, 1, 2);


}

.card-list .card-item .user-image{
    width: 150px;
    height: 150px;
    border-radius: 50%;
margin-bottom: 40px;
border: 1px solid rgb(2, 2, 2);
padding: 4px;
box-shadow: 0px 4px 6px rgba(1, 1, 1, 2);


}
.card-list .card-item .fakultas{
    font-size:1.15rem;
    color: white;
    font-weight: 500;
    margin: 14px 0 40px;

}
.card-list .card-item .prodi{
    font-size:1.15rem;
    color: white;
    font-weight: 500;
    margin: 14px 0 40px;

}
.card-list .card-item .lihat{
    font-size:1.25rem;
  padding: 10px 35px;
  color: #030728;
  border-radius: 6px;
  font-weight: 500;
  cursor: pointer;
  background: #fff;
  border: 1px solid transparent;
  transition: 0.2 ease;
  text-transform: uppercase;
    
}
.card-list .card-item .lihat:hover{
   background: rgba(255,255, 255,0.1);
   border:1px  solid white;
   color: #fff;

    
}
.slide-wrapper{
    overflow: hidden;
    max-width: 1200px;
    margin:0 70px 55px;
}

.slide-wrapper .swiper-pagination-bullet{
    background: #fff;
    height: 15px;
    width:15px;
}
.slide-wrapper .swiper-slide-button{
    color: #fff;
    margin-top:-50px;
    transition: 0.2 ease;

}
.slide-wrapper .swiper-slide-button:hover {
color: #4658ff;
}

@media (max-width:768px){
    .slide-wrapper{
        margin:0 10px 40px;
    }
}
@import url('https://fonts.cdnfonts.com/css/ica-rubrik-black');
@import url('https://fonts.cdnfonts.com/css/poppins');

.banner{
    width: 100%;
    height: 200vh;
    text-align: center;
    overflow: hidden;
    position: relative;
}
.banner .slider{
    position: absolute;
    width: 127px;
    height: 200px;
    top: 10%;
    left: calc(50% - 80px);
    transform-style: preserve-3d;
    transform: perspective(1000px);
    animation: autoRun 30s linear infinite;
    z-index: 2;
}
@keyframes autoRun{
    from{
        transform: perspective(1000px) rotateX(-16deg) rotateY(0deg);
    }to{
        transform: perspective(1000px) rotateX(-16deg) rotateY(360deg);
    }
}

.banner .slider .item{
    position: absolute;
    inset: 0 0 0 0;
    transform: 
        rotateY(calc( (var(--position) - 1) * (360 / var(--quantity)) * 1deg))
        translateZ(460px);
        cursor: pointer;
}
.banner .slider .item img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    filter: brightness(0.7); /* Darkens the image */
    box-shadow: 4px 4px 8px rgba(0, 0, 0, 1); /* Adds a subtle shadow */
    border-radius: 4px;
}


@media screen and (max-width: 1023px) {
    .banner .slider{
        width: 160px;
        height: 200px;
        left: calc(50% - 80px);
    }
    .banner .slider .item{
        transform: 
            rotateY(calc( (var(--position) - 1) * (360 / var(--quantity)) * 1deg))
            translateZ(300px);
    }
    .banner .content h1{
        text-align: center;
        width: 100%;
        text-shadow: 0 10px 20px #000;
        font-size: 7em;
    }
    .banner .content .author{
        color: #fff;
        padding: 20px;
        text-shadow: 0 10px 20px #000;
        z-index: 2;
        max-width: unset;
        width: 100%;
        text-align: center;
        padding: 0 30px;
    }
}
@media screen and (max-width: 767px) {
    .banner .slider{
        width: 100px;
        height: 150px;
        left: calc(50% - 50px);
    }
    .banner .slider .item{
        transform: 
            rotateY(calc( (var(--position) - 1) * (360 / var(--quantity)) * 1deg))
            translateZ(180px);
    }
    .banner .content h1{
        font-size: 5em;
    }
}
@media (max-width: 768px) {
    .sidebar {  
        width: 100%; /* Sidebar memenuhi lebar halaman */
        position: relative; /* Ubah posisi menjadi relatif untuk mengikuti alur dokumen */
        margin-top: 0; /* Hilangkan margin atas */
        z-index: 1; /* Pastikan z-index sesuai dengan konten */
        background-color: transparent;
        box-shadow: none;
    }
    .content {
    margin-left: 0;
    color: white;
    z-index: 1; /* Ensure the content is below the sidebar */
    position: relative; /* Make sure z-index is applied correctly */
}
}

.text-details {
    display: flex;
    flex-direction: column;
  }
  .text-details p {
    display: flex;
    justify-content: space-between;
  }
  .text-details .label {
    flex-shrink: 0; /* Prevents label from shrinking */
    width: 150px;   /* Set a consistent width */
  }
  .text-details .value {
    flex-grow: 1;   /* Allows value to take up remaining space */
    text-align: left;
  }
  
</style>
</head>
<body>
    <div class="content">
        <section class="tentang">
            <div class="background">
                <div class="line">
                    <div class="content">
                        <span>Informasi Publik / </span>
                        <span style="color:rgba(223, 223, 223, 0.893)">KKN Desa</span>
                    </div>
                </div>
                <div class="sidebar">
    
                    @foreach($kkn as $k)
                    <div class="submenu" onclick="showDetails('{{ $k->universitas }}', '{{ $k->angkatan }}', '{{ $k->tahun }}', '{{ $k->nama }}', '{{ $k->nama }}','{{ $k->dpl }}')">
                        Angkatan {{ $k->angkatan }}
                    </div>
                @endforeach
                
                </div>
                <div class="title-page">
                    <h1>PROFIL KKN</h1>
                </div>
                <hr>
                
                <div id="details" class="deskripsi">
                   
                </div>
          
                <hr>
                <div class="page-content">
                <h1>ANGGOTA</h1>
                <section class="kkn-content">
                    <div class="banner">
                        <div class="slider" style="--quantity: 11">
                            <div class="item" style="--position: 1"><img src="asset/kkn/1.png" alt=""></div>
                            <div class="item" style="--position: 2"><img src="asset/kkn/2.png" alt=""></div>
                            <div class="item" style="--position: 3"><img src="asset/kkn/3.png" alt=""></div>
                            <div class="item" style="--position: 4"><img src="asset/kkn/4.png" alt=""></div>
                            <div class="item" style="--position: 5"><img src="asset/kkn/5.png" alt=""></div>
                            <div class="item" style="--position: 6"><img src="asset/kkn/6.png" alt=""></div>
                            <div class="item" style="--position: 7"><img src="asset/kkn/7.png" alt=""></div>
                            <div class="item" style="--position: 8"><img src="asset/kkn/8.png" alt=""></div>
                            <div class="item" style="--position: 9"><img src="asset/kkn/9.png" alt=""></div>
                            <div class="item" style="--position: 10"><img src="asset/kkn/10.png" alt=""></div>
                            <div class="item" style="--position: 11"><img src="asset/kkn/11.png" alt=""></div>

                        </div>
                    </div>
            </section>
        </div>
            
            </div>
          
        
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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
        function showDetails(jabatan, nama, keterangan, nip, gambar,dpl) {
            console.log('dpl:', dpl);
            const detailsDiv = document.getElementById('details');
            
            // Tentukan sumber gambar default
            const defaultImage = 'asset/defaultpp.jpg';
            
            // Tentukan sumber gambar yang akan digunakan
            const imageUrl = gambar && gambar.trim() !== "" ? gambar : defaultImage;
            
            detailsDiv.innerHTML = `
              <div class="details-box">
  <div class="details-content">
    <div class="text-details">
      <p><span class="label">Universitas </span> <span class="value">: ${jabatan}</span></p>
      <p><span class="label">Angkatan KKN </span> <span class="value">: ${nama}</span></p>
      <p><span class="label">Kelompok KKN </span> <span class="value">: ${nip}</span></p>
          <p><span class="label">DPL</span> <span class="value">: ${dpl}</span></p>

      <p><span class="label">KKN Tahun </span> <span class="value">: ${keterangan}</span></p>
 

      <p style="margin-top:50px; text-transform:capitalize;"></p>
    </div>
    <div class="image-container">
      <img src="asset/dpl2.png" alt="Gambar Detail">
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
      
        const swiper = new Swiper('.slide-wrapper', {

  loop: true,
  grabCursor:true,
  spaceBetween:30,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable:true,
    dynamicBullets:true

  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
breakpoints:{
    0:{
        slidesPerView:1
    },
    768:{
        slidesPerView:2
    },
    1024:{
        slidesPerView:3
    }
}
 
 
});

    </script>
    
    
    
</body>
</html>

@endsection
