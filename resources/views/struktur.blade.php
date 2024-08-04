@extends('layouts.base')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <style>
        .b {
            font-family: "Poppins", sans-serif;
            font-family: "Raleway", sans-serif;
        }
        body {
            background-color: rgb(29, 29, 29);
            margin: 0;
            padding: 0;
            width: auto;
        }
        .tentang {
            background: linear-gradient(to top, rgb(19, 19, 19), rgb(29, 29, 29));
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
            background-image: url('asset/motifjawa12.jpeg');
            background-size: 300px 300px;
            background-repeat: repeat;
            background-position: center;
            opacity: 0.7;
            z-index: 1;
            mix-blend-mode: multiply;
        }

        .tentang .background {
            height: 100vh;
            position: relative;
            z-index: 2;
            width: auto;
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
            overflow: auto;
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
  
    width: 160px;
    background-color: rgba(17, 17, 17, 0.9);
    color: white;
    padding: 20px;
    position: absolute;
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
        .submenu1 {
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
        .submenu1:hover {
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

.deskripsi .details-box {
    background-color: rgba(44, 44, 44, 0.807); /* Semi-transparent box */
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.8);
    width: 800px; /* Ensure the box is not too wide */
    color: rgb(237, 237, 237);
}
.details-content {

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
width: 150px; /* Adjust as needed */
height: 200px; /* Adjust as needed */
border-radius: 5px;
box-shadow: 0px 4px 6px rgba(1, 1, 1, 2);
}
.image-container {
    flex-shrink: 0;
  }

  
  .text-details {
    display: flex;
    flex-direction: column;
    margin-right: 20px; /* Space between text and image */
  }

  .text-details p {
    display: flex;
    justify-content: space-between;
  }

  .text-details .label {
    flex-shrink: 0;
    width: 150px;
  }

  .text-details .value {
    flex-grow: 1;
    text-align: left;
  }
  @media (max-width: 1300px) {
    .sidebar {
        width: 100%; /* Sidebar memenuhi lebar halaman */
        position: relative; /* Ubah posisi menjadi relatif untuk mengikuti alur dokumen */
        margin-top: 0; /* Hilangkan margin atas */
        z-index: 1; /* Pastikan z-index sesuai dengan konten */
        background-color: transparent;
        box-shadow: none;
    }

    .title-page {
    }

    .content {
       
    }

    .tentang .background {
        padding-top: 0; /* Hilangkan padding atas jika tidak diperlukan */
    }

    .tentang h1 {
        font-size: 24px; /* Kurangi ukuran font untuk mode mobile */
        padding-top: 10px; /* Sesuaikan padding atas jika diperlukan */
    }

    .tentang hr {
        width: 80%; /* Sesuaikan lebar garis horizontal */
    }

    .line .content {
        font-size: 10px; /* Kurangi ukuran font pada garis */
        margin-left: 5%; /* Kurangi margin kiri */
    }

    .deskripsi {
        padding: 10px; /* Kurangi padding untuk konten deskripsi */
    }

    .deskripsi .details-box {
        width: 100%; /* Sesuaikan lebar kotak detail */
    }

    .details-content {
        flex-direction: column; /* Ubah arah tata letak menjadi kolom */
        align-items: center; /* Pusatkan konten */
    }

    .details-content {
    position: relative; /* Set the container to be relatively positioned */
}

.image-container {
    position: absolute; /* Position the image container absolutely */
    top: 0;
    right: 0;
    text-align: center; /* Center image horizontally within the container */
}

.image-container img {
    max-width: 120px; /* Ensure the image
     doesn't exceed the container width */
    height: 150px; /* Maintain aspect ratio of the image */
}


    .text-details p {
        font-size: 8px; /* Kurangi ukuran font pada elemen <p> */
    }
    .sidemenu-container .submenu, .sidemenu-container .submenu1 {
    position: relative;
    padding-right: 20px; /* Add space for the caret */
    cursor: pointer; /* Show pointer cursor to indicate clickable area */
}

.sidemenu-container .submenu::after, .sidemenu-container .submenu1::after {
    content: '\25B6'; /* Unicode for a filled caret right */
    
    
}



}




.submenu.active {
    background-color: rgba(70, 70, 70, 0.8);
    /* Add any additional styles you want to apply when the item is active */
}
.submenu1.active {
    background-color: rgba(70, 70, 70, 0.8);
    /* Add any additional styles you want to apply when the item is active */
}


 .details-box {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }

  .details-content {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 100%;
  }



  .sidemenu-container{

  }

    </style>
</head>
<body>
    <div class="content">
        <section class="tentang">
            <div class="background">
                <div class="line">
                    <div class="content">
                        <span>Pemerintahan Desa / </span>
                        <span style="color:rgba(223, 223, 223, 0.893)">Struktur Organisasi</span>
                    </div>
                </div>
                <div class="sidebar">
                    <div class="sidemenu-container">
                        <div class="submenu" onclick="showImage('asset/struktur.jpeg')">Struktur Organisasi</div>
                        @foreach($struktur as $k)
                        <div class="submenu1" onclick="showDetails('{{ $k->jabatan }}', '{{ $k->nama }}', '{{ $k->keterangan }}', '{{ $k->nip }}', '{{ asset('storage/' . $k->gambar) }}')">
                            {{ $k->jabatan }}
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="page-content">
                    <div class="title-page">
                        <h1>Struktur Organisasi</h1>
                    </div>
                    <hr>
                    <div id="details" class="deskripsi">
                        <img src="asset/struktur.jpeg" alt="Struktur Organisasi">
                    </div>
                </div>
            </div>
        </section>
    </div>
    

    <script>
       // Fungsi untuk menandai item sidebar yang aktif
function markActive(item) {
    const sidebarItems = document.querySelectorAll('.submenu');
    sidebarItems.forEach((sidebarItem) => {
        sidebarItem.classList.remove('active');
    });
    item.classList.add('active');
}

function markActive2(item) {
    const sidebarItems = document.querySelectorAll('.submenu1');
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
      <p><span class="label">Jabatan </span> <span class="value">: ${jabatan}</span></p>
      <p><span class="label">Nama Pejabat </span> <span class="value">: ${nama}</span></p>
      <p><span class="label">NIP </span> <span class="value">: ${nip}</span></p>
      <p style="margin-top:50px; text-transform:capitalize;">${keterangan}</p>
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

// Fungsi untuk menampilkan gambar
function showImage(imagePath) {
    const detailsDiv = document.getElementById('details');
    detailsDiv.innerHTML = `
        <img src="${imagePath}" alt="Struktur Organisasi">
    `;
    
    markActive(event.target); // tandai elemen sidebar yang dipilih sebagai aktif
    isManualOverride = true; // aktifkan interaksi manual
    stopAutoSwitch(); // hentikan beralih otomatis
}

// Tambahkan event listener untuk mengatur ulang mode manual setelah klik
document.addEventListener('DOMContentLoaded', () => {
    startAutoSwitch();

    document.querySelectorAll('.submenu').forEach((item) => {
        item.addEventListener('click', () => {
            isManualOverride = true;
            stopAutoSwitch(); // Hentikan otomatis saat klik
            markActive(item); // Tandai item yang diklik sebagai aktif
        });
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
</html>

@endsection
