@extends('layouts.base')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        .b {
            font-family: "Poppins", sans-serif;
            font-family: "Raleway", sans-serif;
        }
        body {
            background-color: rgb(29, 29, 29);
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
            
        }
        .tentang {
     background: linear-gradient(to top, rgb(8, 8, 8), rgb(29, 29, 29));

    margin: 0;
    padding: 0;
    position: relative; /* Untuk mengatur posisi elemen */
    overflow: hidden; /* Mencegah elemen keluar dari batas */
    min-height: 200vh;
}

.tentang::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url('asset/motifjawa12.jpeg'); /* Ganti dengan path gambar */
    background-size: 300px 300px; /* Ukuran kecil untuk motif */
    background-repeat: repeat; /* Mengulang gambar */
    background-position: center; /* Posisi tengah */
    opacity: 0.7; /* Transparansi background */
    z-index: 1; /* Letakkan background di bawah elemen lain */
    mix-blend-mode: multiply; 

}

.tentang .background {
    position: relative; /* Menetapkan posisi relative untuk konten */
    z-index: 2; /* Konten di atas background */
}


        .tentang h1 {
            padding-top: 30px;  
            font-size: 38px;
            font-weight: 700;
            font-family: var(--heading-font);
            text-align: center;  
            color: rgb(237, 237, 237);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9); /* Add text shadow */
        }
        .tentang hr {
            width: 50%;
            margin: 20px auto;
            border: 2px solid rgb(130, 130, 130); /* Customize the border color */
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5); /* Customize the shadow */
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
    margin-left: 13.9%; /* You might want to adjust or remove this */
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
.deskripsi {
    display: flex;
    justify-content: center; /* Pusatkan secara horizontal */
     /* Pusatkan secara vertikal */
    height: 100vh;           /* Tinggi penuh layar, bisa disesuaikan */
}

.deskripsi h2 {
    font-family: var(--nav-font);
    padding: 18px 15px;
    font-size: 14px;
    font-weight: 400;
    white-space: nowrap;
    transition: 0.3s;
    letter-spacing: 1px;
    text-align: center;      /* Pusatkan teks dalam elemen h2 */
}
footer{   text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); /* Add text shadow */
    font-family: var(--nav-font);
                   
        font-size: 13px;
        font-family: var(--nav-font);
        font-weight: 400;
       
        align-items: center;
       
        white-space: nowrap;
        transition: 0.3s;
       
        letter-spacing: 1px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.8); /* Add shadow below the line */
}
.container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px; /* Gap between images */
    margin-left:17%;
    padding-bottom: 20px;
}

.image-container {
    width: 200px; /* Adjust as needed */
    text-align: center; /* Center the text */
}

.container-img {
    width: 100%;
    height: 200px; /* Adjust as needed */
    background-size: cover;
    background-position: center;
    box-shadow: 4px 4px 4px black;
}

.image-caption {
    background-color: #171717c1; /* Background color for the caption */
    padding: 18px 15px; /* Space around the text */
    font-size: 14px; /* Adjust font size as needed */
    color: #ffffff; /* Text color */
    border-top: 1px solid #000000; /* Optional border on top */
    box-shadow: 4px 4px 4px black;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9); /* Add text shadow */
    font-family: var(--nav-font);
    font-weight: 400;
    display: flex;
    align-items: center; /* Center text vertically */
    justify-content: center; /* Center text horizontally */
    white-space: nowrap; /* Prevent text wrapping */
    transition: 0.3s;
    letter-spacing: 1px; /* Space between letters */
}



@media (max-width: 768px) {
 .container{
    margin-left:0;
 }
  }
    </style>
</head>
<body>
    <section class="tentang">
        <div class="background">
            <div class="line">
                <div class="content">
                    <span>Profil Desa / </span>
                    <span style="color:rgba(223, 223, 223, 0.893)">Galeri Desa</span>
                </div>
            </div>
            <h1>Galeri Sumber Rejo</h1>
            <hr>
            <div class="container">
                @foreach($results as $p)
                    <div class="image-container">
                        <div class="container-img" style="background-image: url('{{ asset('storage/' . $p->gambar) }}');"></div>
                        <div class="image-caption">{{ $p->deskripsi }}</div> <!-- Tambahkan judul gambar di sini -->
                    </div>
                @endforeach
            </div>
            
        </div>
       

      
    </div>
    </section>
    
</body>
<footer style="background-color: #141414cd; color: white; padding: 20px; text-align: center;">
    <p>Website Desa Sumber Rejo</p>
    <p style="margin-top: 10px;">&copy;MAHASISWA UNIVERSITAS MULAWARMAN KKN 50 KUBAR 36</p>
    <a href="https://www.instagram.com/yourprofile" target="_blank" style="display: inline-block; margin-top: 10px; color: white; text-decoration: none;">
        <a href="https://www.instagram.com/kkn50_sumber.rejo/" class="instagram"><i style="color:white;"class="bi bi-instagram"></i></a>
    </a>
</footer>
</html>

@endsection
