@extends('layouts.base')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
    
        body {
            background-color: rgb(29, 29, 29);
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif, "Raleway", sans-serif;
        }

        .tentang {
    background: linear-gradient(
        to top, 
        rgb(8, 8, 8) 0%, /* Warna pertama dimulai dari 0% */
        rgb(8, 8, 8) 35%, /* Tetap hitam hingga 25% */
        rgb(29, 29, 29) 100% /* Warna kedua mulai dari 25% hingga 100% */
    );
    margin: 0;
    padding: 0;
    position: relative;
    overflow: hidden;
    padding-bottom: 20px;
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
            min-height: 100vh;
            position: relative;
            z-index: 2;
            overflow-y: auto;
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
            margin-left: 13.9%;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9);
            padding: 18px 15px;
            font-size: 14px;
            font-weight: 400;
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

        .berita {
            
            align-items: center;
            z-index: 2;
        }

        .berita .per-content {
            margin-left: 8%;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            background-color: rgba(39, 38, 38, 0.16);
            border-radius: 10px;
            padding: 10px;
            width: 80%;
            max-width: 900px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .berita .img-container {
            flex: 0 0 300px;
            height: 150px;
            overflow: hidden;
            border-radius: 10px;
            margin-right: 20px;
        }

        .berita .img-container img {
            width: 300px;
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .berita .img-container img:hover {
    transform: scale(1.1); /* Zoom in on hover */
}

        .berita .deskripsi {
            flex: 1;
            padding: 10px;
            color: rgb(237, 237, 237);
        }

        .berita .deskripsi .title {
            font-size: 18px;
            font-weight: 600;
            margin: 10px 0;
        }

        .berita .deskripsi .owner,
        .berita .deskripsi .likes,
        .berita .deskripsi .location {
            font-size: 14px;
            margin: 5px 0;
        }

        @media (max-width: 830px) {
    .berita .img-container {
        flex: 0 0 160px; /* Mengurangi ukuran kontainer gambar */
        margin-right: 0px; /* Mengurangi jarak antara gambar dan teks */
    }

    .berita .img-container img {
        width: 150px; /* Mengurangi lebar gambar */
    }

    .berita .deskripsi .title {
        font-size: 13px; /* Mengurangi ukuran font pada title */
    }

    .berita .deskripsi .owner,
    .berita .deskripsi .likes,
    .berita .deskripsi .location {
        font-size: 9px; /* Mengurangi ukuran font pada elemen lainnya */
    }
}
        #noResultsMessage {
            display: none;
            text-align: center;
            margin-top: 20px;
            font-size: 20px;
            color: rgb(19, 19, 19);
        }

        .search-bar {
            display: flex;
            justify-content: center;
            padding: 20px;
           
        }

        .search-bar input[type="text"] {
       
            width: 60%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        @media (max-width: 830px) {
    .search-bar {
        justify-content: flex-start; /* Rata kiri pada mobile */
        
    }
    .pagination{
        width: 15%;
    }

    .search-bar input[type="text"] {
        width: 90%; /* Memastikan input mengisi lebar container pada mobile */
    }
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
.side-news {
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.8); /* Add shadow below the line */
    margin-right: 5%;
    background-color: rgba(255, 255, 255, 0.062);
    position: absolute;
    top: 0;
    right: 0;
    margin-top: 10%;
    width: 500px; /* Sesuaikan lebar sesuai kebutuhan */
    padding: 20px;
}

.dynamic-image-container {
    width: 100%;
    height: 300px; /* Atur tinggi sesuai kebutuhan */
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 20px;
    position: relative;
    border: solid black;
    box-shadow: 4px 4px 8px rgb(0, 0, 0); /* Add shadow below the line */
}

.dynamic-image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(80%);
    border: solid black;
    box-shadow: 4px 4px 8px rgb(0, 0, 0); /* Add shadow below the line */
    transition: transform 0.5s ease;
}

.dynamic-image-container img:hover {
    transform: scale(1.1);
}

.dynamic-image-container .title-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 25%;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 10px;
    font-size: 14px;
    font-family: var(--nav-font);
            font-weight: 400;

            white-space: nowrap;
            transition: 0.3s;
            letter-spacing: 1px;
}
.tentang hr {
            width: 82%;
            margin: 20px auto;
            border: 2px solid rgb(130, 130, 130); /* Customize the border color */
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0,   0, 0.5); /* Customize the shadow */
        }

        @media (max-width: 830px) {
    .side-news {
        display: none;

    
    }
    .line .content{
        margin-left: 7%;
    }
}
.pagination svg {
    display: none;
}
.pagination .hidden-svg {
    display: none;
}
.pagination a{
    color: black;
    text-decoration: none;
    font-weight: bold;
    
}
.pagination {
    margin-top: 2%;
    margin-left: 10%;
    align-content: center;
    justify-content: center;
    display: flex;
    width: 14.4%   ;
    color: black;
    background-color: rgba(255, 255, 255, 0.432);
    text-decoration: none;
    font-weight: bold;
       
}
.deskripsi .title {
  transition: transform 0.5s ease;
}

.deskripsi .title:hover {
  color: rgba(255, 255, 255, 0.848);
  transform: scale(1.0); /* Example transformation */
}

.deskripsi .owner,
.deskripsi .likes,
.deskripsi .location {
  color: rgba(255, 255, 255, 0.755); /* A darker shade of white */
}

.map-container img{
    width: 460px;
    height: 300px;
    border: solid black;
    box-shadow: 4px 4px 10px black;

}
.chart-container {
            position: relative;
            width: 400px;
            height: 200px;
            margin: auto;
        }
        .arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 24px;
            cursor: pointer;
            user-select: none;
        }
        
        .arrow-right {
            right: 0;
        }

    </style>
</head>
<body>
    <section class="tentang">
        <div class="background">
            <div class="line">
                <div class="content">
                    <span>Profil Desa / </span>
                    <span style="color:rgba(223, 223, 223, 0.893)">Berita Desa</span>
                </div>
            </div>
            <div class="search-bar">
                <input type="text" id="searchInput" placeholder="Cari judul berita...">
            </div>
            <hr>
            <div class="side-news">
                <a id="dynamicImageLink" href="#">
                    <div class="dynamic-image-container" id="dynamicImageContainer">
                        <img id="dynamicImage" src="" alt="">
                        <div class="title-overlay" id="titleOverlay"></div>
                    </div>
                </a>
                <div class="map-container">
                    <img src="asset/peta.jpg" alt="">
                </div>
                <div class="chart-container">
                    
                    <canvas id="myChart" width="400" height="200"></canvas>
                    <span class="arrow arrow-right" onclick="changeChart(1)">&#9654;</span>
                </div>
            
            </div>  
            <div class='berita' id="beritaContainer">
                @foreach($search as $p)
      
                <a href="{{ url('halamanberita', ['id' => $p->id]) }}" class="donation-link">
                   
                    <div class="per-content" data-judul="{{ strtolower($p->judul) }}" data-pemilik="{{ strtolower($p->pemilik) }}" data-wilayah="{{ strtolower($p->wilayah) }}" data-id="{{ $p->id }}" data-link-gambar="{{ asset('storage/' . $p->gambar) }}" data-id="{{$p->id}}">
                        <div class="img-container">
                            <img src="{{ asset('storage/' . $p->gambar) }}" alt="">
                        </div>
                        <div class="deskripsi">
                            <h2 class="title" style="text-transform: capitalize">{{ $p->judul }}</h2>
                            <p class="owner">By {{ $p->role_pemilik }}</p>
                            <p class="likes">Telah dilihat {{ $p->viewer }} kali </p>
                            <p class="location"> {{ $p->tanggal }}</p>
                        </div>
                    </div>
                    
                    
                </a>
                @endforeach
                <div id="noResultsMessage">
                    Pencarian tidak ditemukan...
                    <br>
                    <p>Silahkan Coba Pencarian Lain</p>
                </div>
            </div>
                <div class="pagination">
                    {{ $search->links() }}
                </div>
            
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        document.getElementById('searchInput').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const beritaItems = document.querySelectorAll('.per-content');
            let found = false;

            beritaItems.forEach(item => {
                const title = item.getAttribute('data-judul').toLowerCase();
                if (title.includes(searchTerm)) {
                    item.style.display = 'flex';
                    found = true;
                } else {
                    item.style.display = 'none';
                }
            });

            const noResultsMessage = document.getElementById('noResultsMessage');
            const paginationElements = document.querySelectorAll('.pagination'); // Select elements by class name

    if (found) {
        noResultsMessage.style.display = 'none';
        paginationElements.style.display = 'block'; // Show pagination if results are found
    } else {
        noResultsMessage.style.display = 'block';
        paginationElements.style.display = 'none'; // Hide pagination if no results are found
    }
        }); 

        // Array untuk menyimpan URL gambar dan judul
        const beritaItems = Array.from(document.querySelectorAll('.per-content'));
        const imageUrls = beritaItems.map(item => item.getAttribute('data-link-gambar'));
        const titles = beritaItems.map(item => item.getAttribute('data-judul'));
        const ids = beritaItems.map(item => item.getAttribute('data-id'));

        let currentImageIndex = 0;

        function loadDynamicImage() {
            if (imageUrls.length === 0) return;

            // Set gambar dan judul saat ini
            const imageUrl = imageUrls[currentImageIndex];
            const imageTitle = titles[currentImageIndex];
            const newsId = ids[currentImageIndex];

            const dynamicImageLink = document.getElementById('dynamicImageLink');
            dynamicImageLink.href = `halamanberita/${newsId}`;

            document.getElementById('dynamicImage').src = imageUrl;
            document.getElementById('titleOverlay').textContent = imageTitle;

            // Ganti gambar setiap 5 detik (5000ms)
            currentImageIndex = (currentImageIndex + 1) % imageUrls.length;
            setTimeout(loadDynamicImage, 5000);
        }

        // Muat gambar saat halaman dimuat
        window.onload = loadDynamicImage;
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
