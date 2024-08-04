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
    
    background-color: rgb(29, 29, 29);
    margin: 0;
    padding: 0;
    position: relative; /* Untuk mengatur posisi elemen */
    overflow: hidden; /* Mencegah elemen keluar dari batas */
}

.tentang::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url('asset/motif.jpg'); /* Ganti dengan path gambar */
    background-size: 300px 300px; /* Ukuran kecil untuk motif */
    background-repeat: repeat; /* Mengulang gambar */
    background-position: center; /* Posisi tengah */
    opacity: 0.2; /* Transparansi background */
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
    margin-left: 16.2%; /* You might want to adjust or remove this */
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
 
.chart {
            display: flex;
            justify-content: space-around;
            align-items: flex-end;
            height: 200px;
            margin: 20px;
        }
        .bar {
            width: 50px;
            margin: 0 10px;
            background-color: #4CAF50;
            text-align: center;
            color: white;
            transition: height 0.3s ease;
        }
        .label {
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <section class="tentang">
        <div class="background">
            <div class="line">
                <div class="content">
                    <span>Profil Desa / </span>
                    <span style="color:rgba(223, 223, 223, 0.893)">Visi & Misi</span>
                </div>
            </div>
            <h1>Visi & Misi Sumber Rejo</h1>
            <hr>
           <div class="deskripsi" >
                <h2>Sumber Rejo adalah sebuah kampung yang.....</h2>
           </div>
        </div>
        <h1>Kantor</h1>
        <hr>
       <div class="deskripsi" >
            <h2>Sumber Rejo adalah sebuah kampung yang.....</h2>
       </div>

      
    </div>
    </section>
    
<h1>Diagram Balok</h1>
<div class="chart" id="chart"></div>

<script>
    const data = {
        "Laki-laki": 10,
        "Perempuan": 10
    };

    const chart = document.getElementById('chart');
    
    Object.keys(data).forEach(key => {
        const bar = document.createElement('div');
        bar.classList.add('bar');
        bar.style.height = data[key] * 10 + 'px'; // Skala tinggi
        bar.textContent = data[key];
        chart.appendChild(bar);

        const label = document.createElement('div');
        label.classList.add('label');
        label.textContent = key;
        chart.appendChild(label);
    });
</script>
</body>
</html>

@endsection
