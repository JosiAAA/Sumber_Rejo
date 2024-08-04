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
            height: 200vh;
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
            margin-left:2.3%;
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
    width: 800px;/* Ensure the box is not too wide */
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
    background-color: rgba(17, 17, 17, 0.264); /* Semi-transparent box */
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.8);
    width: 800px; /* Ensure the box is not too wide */
    color: rgb(237, 237, 237);
}

.details-content {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}

.text-details {
    flex: 1;
    color: black;
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

/* Atur ukuran container dan gambar */

@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
*{
    margin: 0;
    padding: 0;
    font-family:"Montserrat",sans-serif;
    box-sizing: border-box;
}
.kkn-content{
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

</style>
</head>
<body>
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
                   
                </div>
                <section class="kkn-content">
                <div class="container swiper">
                    <div class="slide-wrapper">
                        <div class="card-list swiper-wrapper">
                            <div class="card-item swiper-slide">
                                <img src="asset/jokowi.jpg" alt="" class="user-image">
                                <h2 class="user-name">Tes</h2>
                                <p class="fakultas"></p>
                                <p class="prodi"></p>
                                <button class="lihat">lihat</button>
                            </div>

                            <div class="card-item swiper-slide">
                                <img src="asset/logoKubar.png" alt="" class="user-image">

                                <h2 class="user-name">Tes2</h2>
                                <p class="fakultas"></p>
                                <p class="prodi"></p>
                                <button class="lihat">lihat</button>
                            </div>

                            <div class="card-item swiper-slide">
                                <img src="asset/logoKubar.png" alt="" class="user-image">

                                <h2 class="user-name">Tes3</h2>
                                <p class="fakultas"></p>
                                <p class="prodi"></p>
                                <button class="lihat">lihat</button>
                            </div>
                            <div class="card-item swiper-slide">
                                <img src="asset/logoKubar.png" alt="" class="user-image">

                                <h2 class="user-name">Tes3</h2>
                                <p class="fakultas"></p>
                                <p class="prodi"></p>
                                <button class="lihat">lihat</button>
                            </div>
                            <div class="card-item swiper-slide">
                                <img src="asset/logoKubar.png" alt="" class="user-image">

                                <h2 class="user-name">Tes3</h2>
                                <p class="fakultas"></p>
                                <p class="prodi"></p>
                                <button class="lihat">lihat</button>
                            </div>
                            <div class="card-item swiper-slide">
                                <img src="asset/logoKubar.png" alt="" class="user-image">

                                <h2 class="user-name">Tes3</h2>
                                <p class="fakultas"></p>
                                <p class="prodi"></p>
                                <button class="lihat">lihat</button>
                            </div>

                        </div>

                        <div class="swiper-pagination"></div>
                        <div class="swiper-slide-button swiper-button-prev"></div>
                        <div class="swiper-slide-button swiper-button-next"></div>
                    </div>
                    

                </div>
            </section>
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
                            <p>Universitas : ${jabatan}</p>
                            <p>Angkatan KKN  : ${nama}</p>
                            <p>Kelompok KKN    : ${nip}</p> 
                            <p>KKN Tahun    : ${keterangan}</p> 

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
