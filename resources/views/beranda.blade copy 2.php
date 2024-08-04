@extends('layouts.base')
@section('content')
<div id="preloader">
    <div class="loader"></div>
</div>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="main.css">

<style>
    body {
        
        margin: 0; /* Remove default margin */
        padding: 0; /* Remove default padding */
    }

    section {
        margin: 0; /* Ensure sections have no margin */
        padding: 0; /* Ensure sections have no padding */
    }

    .slideshow {
    position: relative;
    overflow: hidden;
    margin: 0;
    height: 80vh;
}

.image-container {
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    transition: background-image 0.7s ease-in-out;
}

.overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 20%; /* Covering 1/4 of the bottom */
    background-color: rgba(28, 28, 28, 0.566); /* Semi-transparent black */
    color: white; /* Text color */
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
}

.indicators {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 2;
    display: flex;
    gap: 10px;
}

.indicator {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: rgba(200, 200, 200, 0.7);
    transition: background-color 0.3s ease;
    cursor: pointer;
}

.indicator.active {
    background-color: white;
}

.overlay-text {
    padding: 10px; /* Optional: Padding for text */
    text-transform: capitalize; /* Capitalize text */
    margin: 0; /* Remove default margin */
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); /* Add text shadow */
    font-family: var(--nav-font);
                   
        font-size: 20px;
        font-family: var(--nav-font);
        font-weight: 400;
       
        align-items: center;
       text-transform: uppercase;
        white-space: nowrap;
        transition: 0.3s;
       
        letter-spacing: 1px;
}


.line {
   
   background-color:rgb(8, 8, 8);
    margin: 0; /* Remove margin from the line */
    padding: 0 3%; /* Add padding for spacing from the edges */
    height: 50px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.8); /* Add shadow below the line */
    display: flex;
    align-items: center; /* Center the h1 vertically */
}

.line h1 {
    font-family: var(--nav-font);.
    margin: 0; /* Remove default margin */
    padding: 0;
    font-size: 20px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9); /* Add text shadow */
    font-weight: 400;
    white-space: nowrap;
    letter-spacing: 1px;
    z-index: 1;
    color: #fff; /* Add color for better visibility */
}



    .line .berita {
        color: rgb(255, 255, 255); /* Color for "Berita" */
        
    }

    .line .desa {
        color: white; /* Color for "Desa" */
    }
    .berita {
  padding-bottom: 60px;
  background: linear-gradient(to bottom, rgb(8, 8, 8), rgb(29, 29, 29));
}


    .container{
        background-color: white;
        width: 50px;
        height: 50px;
    }

.desa {
    position: relative;
    display: inline-block;
    padding-right: 20px; /* Adjust spacing as needed */
}

.desa::after {
    content: '';
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    border-left: 10px solid rgb(239, 239, 239); /* Adjust color as needed */
}
.container1 {
    margin-top: 1%;
    display: block; /* Keep as block for vertical stacking */
    gap: 20px; /* Adjust spacing */
    width: 100%; /* Set to 100% for responsiveness */
     /* Optional: Set a max-width for the container */
}

.per-content {
    display: flex; /* Use flexbox for layout */
    align-items: center; /* Center items vertically */
    width: 100%; /* Full width */
    border: 1px solid #2a2a2a; /* Border for clarity */
    padding: 10px; /* Add padding */
    margin: 0 auto; /* Center align the items */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add shadow */
    border-radius: 5px; /* Optional: Add rounded corners */
    gap: 1;
    cursor: pointer;
}


.img-container {
    margin-left: 1%;
    width: 240px; /* Image container size */
    height: 150px; /* Image container size */
    overflow: hidden; /* Hide overflow */
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 10px; /* Space between image and text */
    border-radius: 10px; /* Adjust the value for more or less rounding */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); /* Add shadow */
}


.img-container img {
    width: 100%;    
    height: 100%;
    object-fit: cover; /* Cover the entire container */
    transition: transform 0.5s ease;
    
}
.img-container:hover img {
    transform: scale(1.1); /* Zoom in on hover */
}
.deskripsi {
    flex-grow: 1; /* Take remaining space */
}

/* Custom styles for text elements */
.title {
    font-family: var(--nav-font);
    font-size: 20px; /* Adjust title size */
    color: #e0e0e0d9; /* Title color */
    text-transform: capitalize; /* Capitalize text */
    margin: 0; /* Remove default margin */
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); /* Add text shadow */
    font-family: var(--nav-font);
                   
        font-size: 20px;
        font-family: var(--nav-font);
        font-weight: 400;
       
        align-items: center;
       
        white-space: nowrap;
        transition: 0.3s;
       
        letter-spacing: 1px;
}

.owner {
    font-size: 1em; /* Adjust owner size */
    color: #666; /* Owner color */
    text-transform: capitalize; /* Capitalize text */
    margin: 5px 0; /* Margin for spacing */
}

.likes {
    font-size: 0.9em; /* Adjust likes size */
    color: #999; /* Likes color */
    margin: 5px 0; /* Margin for spacing */
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); /* Add text shadow */

}

.location {
    font-size: 0.9em; /* Adjust location size */
    color: #444; /* Location color */
    margin: 5px 0; /* Margin for spacing */
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); /* Add text shadow */
}
.map-container{
    padding-top:20px;
    margin-left: 3%;

    padding-bottom: 10px;
}
.peta{
    background-color: rgb(29, 29, 29);

}
.pagination-wrapper {
    text-align: center;
    margin-top: 20px;
  
}

.pagination {
    display: inline-block;
    padding-left: 0;
    list-style: none;
    border-radius: 0.25rem;
}

.pagination li {
    display: inline;
    margin: 0 5px;
}

.pagination li a, .pagination li span {
    position: relative;
    display: block;
    padding: 0.5rem 0.75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #007bff;
    background-color: #fff;
    border: 1px solid #dee2e6;
    text-decoration: none;
}

.pagination li a:hover {
    color: #0056b3;
    text-decoration: none;
    background-color: #e9ecef;
    border-color: #dee2e6;
}

.pagination li.active span {
    z-index: 1;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}

.pagination li.disabled span {
    color: #6c757d;
    pointer-events: none;
    cursor: auto;
    background-color: #fff;
    border-color: #dee2e6;
}

/* Customizing the arrow size */
.pagination li svg {
    width: 1em;
    height: 1em;
    vertical-align: -0.125em;
    fill: currentColor;
}
section, .section{
    color: black;
}
a {
    color: black;
}
.berita {
    position: relative; /* Untuk mengatur posisi relative */
    padding-bottom: 60px;
    background-color: rgb(29, 29, 29);
}

.berita::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url('asset/motif.jpg'); /* Ganti dengan path gambar */
    background-size: 300px 300px;
    background-repeat: repeat;
    background-position: center;
    opacity: 0.25; /* Transparansi background */
    z-index: 1; /* Letakkan background di bawah elemen lain */
    mix-blend-mode: multiply; 


}

.berita .container1 {
    position: relative; /* Menetapkan posisi relative untuk konten */
    z-index: 2; /* Konten di atas background */
}

.peta-section {
    position: relative; /* Untuk mengatur posisi relative */
}

.peta-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url('asset/motif.jpg'); /* Ganti dengan path gambar */
    background-size: 300px 300px;
    background-repeat: repeat;
    background-position: center;
    opacity: 0.2; /* Transparansi background */
    z-index: 1; /* Letakkan background di bawah elemen lain */
    mix-blend-mode: multiply; 

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
.peta {
    position: relative; /* Menetapkan posisi relative untuk konten */
    z-index: 2; /* Konten di atas background */
}
.line-galeri {
    cursor: pointer;
    background-color: rgb(8,8,8);
    margin-top: 2%; /* Remove margin from the line */
    padding: 0 3%; /* Add padding for spacing from the edges */
    height: 50px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.8); /* Add shadow below the line */
    display: flex;
    align-items: center; /* Center the h1 vertically */
    z-index: 1;
}

.line-galeri h1 {
    font-family: var(--nav-font);
    margin: 0; /* Remove default margin */
    padding: 0;
    font-size: 20px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9); /* Add text shadow */
    font-weight: 400;
    white-space: nowrap;
    letter-spacing: 1px;
    z-index: 1;
    color: #fff; /* Add color for better visibility */
}
.slider {
    position: relative; /* Make .slider positioned */
    z-index: 1;
    width: 100%;
    height: var(--height);
    overflow: hidden;
    mask-image: linear-gradient(to right, transparent, #000 10% 90%, transparent);
    margin-bottom: 30px; /* Add space below the slider */
}

.slider .list {
    margin-top: 20px; /* Add space above the items in the slider */
    display: flex;
    width: 100%;
    min-width: calc(var(--width) * var(--quantity));
    position: relative; /* Make .list positioned */
    z-index: 2; /* Ensure it appears above the slider */
}

.slider .list .item {
    position: absolute;
    width: var(--width);
    height: var(--height);
    left: 100%;
    animation: autoRun 10s linear infinite;
    transition: filter 0.5s, transform 0.5s ease; /* Add transform transition */
    animation-delay: calc((10s / var(--quantity)) * (var(--position) - 1)) !important;
}

.slider .list .item img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensure image is fully visible */
    box-shadow: 4px 4px 6px rgba(0, 0, 0, 1); /* Add shadow below the line */
    filter: brightness(0.6); /* Membuat gambar lebih gelap */


}

@keyframes autoRun {
    from {
        left: 100%;
    }
    to {
        left: calc(var(--width) * -1);
    }
}

.slider:hover .item {
    animation-play-state: paused !important;
    filter: grayscale(1);
}

.slider .item:hover {
    filter: grayscale(0);
    transform: scale(1.05); /* Slightly enlarge on hover */
    z-index: 10; /* Ensure hovered item appears above others */
    
}

.slider[reverse="true"] .item {
    animation: reversePlay 10s linear infinite;
}

@keyframes reversePlay {
    from {
        left: calc(var(--width) * -1);
    }
    to {
        left: 100%;
    }
}
#galeri-link {
    cursor: pointer;
    position: relative;
}

.tooltip {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    margin-top: 8px;
    background-color: #333;
    color: #fff;
    padding: 5px;
    border-radius: 3px;
    white-space: nowrap;
    z-index: 10;
}

#galeri-link:hover .tooltip {
    display: block;
}
#berita-link {
    cursor: pointer;
    position: relative;
}
.slider1{
    height: 100vh;
    margin-top: -50px;
    position: relative;
}
.slider1 .list .item{
    position: absolute;
    inset: 0 0 0 0;
    overflow: hidden;
    opacity: 0;
    transition: .5s;
}
.slider1 .list .item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
   
    filter: brightness(0.8); /* Membuat gambar lebih gelap */
}

.slider1 .list .item::after{
    content: '';
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    bottom: 0;
    background-image: linear-gradient(
        to top, rgb(8, 8, 8) 2%, transparent
    );
}
.slider1 .list .item .content{
    position: absolute;
    left: 10%;
    top: 20%;
    width: 500px;
    max-width: 80%;
    z-index: 1;
}
.slider1 .list .item .content p:nth-child(1){
    text-transform: uppercase;
    letter-spacing: 10px;
}
.slider1 .list .item .content h2{
    font-size: 100px;
    margin: 0;
}
.slider1 .list .item.active{
    opacity: 1;
    z-index: 10;
}
@keyframes showContent {
    to{
        transform: translateY(0);
        filter: blur(0);
        opacity: 1;
    }
}
.slider1 .list .item.active p:nth-child(1),
.slider1 .list .item.active h2,
.slider1 .list .item.active p:nth-child(3){
    transform: translateY(30px);
    filter: blur(20px);
    opacity: 0;
    animation: showContent .5s .7s ease-in-out 1 forwards;
}
.slider1 .list .item.active h2{
    animation-delay: 1s;
}
.slider1 .list .item.active p:nth-child(3){
    animation-duration: 1.3s;
}
.arrows{
    position: absolute;
    top: 30%;
    right: 50px;
    z-index: 100;
}
.arrows button{
    background-color: #eee5;
    border: none;
    font-family: monospace;
    width: 40px;
    height: 40px;
    border-radius: 5px;
    font-size: x-large;
    color: #eee;
    transition: .5s;
}
.arrows button:hover{
    background-color: #eee;
    color: black;
}
.thumbnail{
    position: absolute;
    bottom: 50px;
    z-index: 11;
    display: flex;
    gap: 10px;
    width: 100%;
    height: 250px;
    padding: 0 50px;
    box-sizing: border-box;
    overflow: auto;
    justify-content: center;
}
.thumbnail::-webkit-scrollbar{
    width: 0;
}
.thumbnail .item{
    width: 150px;
    height: 220px;
    filter: brightness(.5);
    transition: .5s;
    flex-shrink: 0;
}
.thumbnail .item img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
}
.thumbnail .item.active{
    filter: brightness(1.5);
}
.thumbnail .item .content{
    position: absolute;
    inset: auto 10px 10px 10px;
}
@media screen and (max-width: 678px) {
    .thumbnail{
        justify-content: start;
    }
    .slider1 .list .item .content h2{
        font-size: 60px;
    }
    .arrows{
        top: 10%;
    }
}
.thumbnail{
   display: none;
}
#preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
    }

    .loader {
        border: 5px solid #f3f3f3;
        border-top: 5px solid #3498db;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
.deskripsi .title{  
    color: rgba(255, 255, 255, 0.936);
}

.deskripsi .title:hover{
    color: rgba(255, 255, 255, 0.722);

}
    .deskripsi .owner,
.deskripsi .likes,
.deskripsi .location {
  color: rgba(255, 255, 255, 0.732); /* A darker shade of white */
}
.container2{
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #232533;
    overflow-x: hidden;
    height: 100vh;
    
}
a{
    text-decoration: none;
}
input{
    display: none;
}

.struktur-container{
    width: 100%;
    height: 100%;
    max-width: 600px;
    max-height: 600px;
    display: flex;
    justify-content: center;
    align-items: center;
    transform-style: preserve-3d;
    flex-direction: column;
    margin-bottom: 100px;
    z-index: 2;
}

.cards{
    position: relative;
    height: 500px;
    width: 430px;
    margin-bottom: 20px;
    perspective: 1000px;
    transform-style: preserve-3d;
    z-index: 2; /* Menambahkan z-index di sini */

}

.cards label{
    position: absolute;
    width: 430px;
    left: 0;
    right: 0;
    margin: auto;
    cursor: pointer;
    transition: transform 0.55s ease;
    z-index: 2;
}

.cards .card{
    position: relative;
    height: 100%;
    background-color: #323444;
    border-radius: 10px;
    padding: 30px 35px;
    z-index: 2;

}

.cards .image{
    display: flex;
    justify-content: space-between;
    z-index: 2;
}

.cards .card img{
    border-radius: 5px;
    box-shadow: 15px 15px 40px rgba(0,0,0,50%);
    margin-top: 23px;
    width: 86%;
    height: 220px;
    object-fit: cover;
    transition: all .7s;
    z-index: 2;
}

.cards .image img:hover{
    transform: scale(1.05);
}

cards .image .dots{
    text-align: center;
}

.dots div{
    width: 10px;
    height:10px;
    border-radius: 50%;
    margin-bottom: 10px;

}
.dots div:nth-child(1){
    background-color: var(--current-color1);
}
.dots div:nth-child(2){
    background-color: #5b85f9;
}.dots div:nth-child(3){
    background-color: #000;
}
.card .infos{
    display: block;
    text-align: end;
    padding-top: 60px;
}
.card .infos span{
    display: block;
}

.infos .name{
    font-size: 30px;
    color: var(--current-color1);
    letter-spacing: 8px;
    margin-bottom: 20px;
    padding-left: 25%;
    transition: all .6 ease;


}
.card .lorem{
    font-size: 15.5px;
    color: #eceaed;
    letter-spacing: 3px;
}
.card .btn-details{
    width: 100%;
    height: 60px;
    margin: 35px auto;
    border-radius: 5px;
    background-color: var(--current-color1);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 25px;
    letter-spacing: 10px;
    font-weight: 700;
    transition: all .7 ease;

}

.card .btn-details{
    transform: scale(1.09);
}
#s1:checked ~ .cards #slide4,
#s2:checked ~ .cards #slide5,
#s3:checked ~ .cards #slide1,
#s4:checked ~ .cards #slide2,
#s5:checked ~ .cards #slide3 {
    box-shadow: 0 15px 30px rgba(0,0,0,0.45); /* Corrected opacity format */
    transform: translate3d(-70%, 0, -220px);
    --current-color1: #eceaed;
    --current-color2: #404457;
}

/* Style for specific slides when checkboxes are checked */
#s1:checked ~ .cards #slide5,
#s2:checked ~ .cards #slide1,
#s3:checked ~ .cards #slide2,
#s4:checked ~ .cards #slide3,
#s5:checked ~ .cards #slide4 {
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.45);
    transform: translate3d(-35%, 0, -120px);
    --current-color1: #eceaed;
    --current-color2: #404457;
}

/* Style for the main slide when checkboxes are checked */
#s1:checked ~ .cards #slide1,
#s2:checked ~ .cards #slide2,
#s3:checked ~ .cards #slide3,
#s4:checked ~ .cards #slide4,
#s5:checked ~ .cards #slide5 {
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.50);
    transform: translate3d(0, 0, 0);
    --current-color1: #fad00c;
    --current-color2: #eceaed;
}

/* Style for secondary slides when checkboxes are checked */
#s1:checked ~ .cards #slide2,
#s2:checked ~ .cards #slide3,
#s3:checked ~ .cards #slide4,
#s4:checked ~ .cards #slide5,
#s5:checked ~ .cards #slide1 {
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.45);
    transform: translate3d(35%, 0, -120px);
    --current-color1: #eceaed;
    --current-color2: #404457;
}

/* Style for tertiary slides when checkboxes are checked */
#s1:checked ~ .cards #slide3,
#s2:checked ~ .cards #slide4,
#s3:checked ~ .cards #slide5,
#s4:checked ~ .cards #slide1,
#s5:checked ~ .cards #slide2 {
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.45);
    transform: translate3d(70%, 0, -220px);
    --current-color1: #eceaed;
    --current-color2: #404457;
}

</style>


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
        <div class="item" style="--position: 1"><img src="asset/images/1.jpeg" alt=""></div>
        <div class="item" style="--position: 2"><img src="asset/images/2.jpeg" alt=""></div>
        <div class="item" style="--position: 3"><img src="asset/images/3.jpeg" alt=""></div>
        <div class="item" style="--position: 4"><img src="asset/images/4.jpeg" alt=""></div>
        <div class="item" style="--position: 5"><img src="asset/images/5.jpeg" alt=""></div>
        <div class="item" style="--position: 6"><img src="asset/images/6.jpeg" alt=""></div>
        <div class="item" style="--position: 7"><img src="asset/images/7.jpeg" alt=""></div>
        <div class="item" style="--position: 8"><img src="asset/images/8.jpeg" alt=""></div>
        <div class="item" style="--position: 9"><img src="asset/images/6.jpeg" alt=""></div>
    </div>
</div>

<div class="line">
    <h1><span id="berita">STRUKTUR</span> <span class="desa">DESA</span></h1>
</div>
<div class="container2">
<div class="struktur-container">
    <input type="radio"name="slider" id="s1" checked>
    <input type="radio"name="slider" id="s2">
    <input type="radio"name="slider" id="s3">
    <input type="radio"name="slider" id="s4">
    <input type="radio"name="slider" id="s5">

    <div class="cards">
        <label for="s1"id="slide1 ">

            <div class="card">
                <div class="image">
                    <img src="asset/kkn/1.png" alt="">
                    <div class="dots">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class="infos">
                    <span class="name">tes</span>
                    <span class="lorem">tes</span>
                    <a href="/tes" class="btn-details"></a>
                    <div class="actions">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <i class="fa-regular fa-heart"></i>
                        <i class="fa-regular fa-bookmark"></i>
                        <i class="fa-solid fa-share-nodes"></i>
                    </div>
                </div>
            </div>
        </label>
        <label for="s2"id="slide2">

            <div class="card">
                <div class="image">
                    <img src="asset/kkn/2.png" alt="">
                    <div class="dots">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class="infos">
                    <span class="name">tes</span>
                    <span class="lorem">tes</span>
                    <a href="" class="btn-details"></a>
                    <div class="actions">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <i class="fa-regular fa-heart"></i>
                        <i class="fa-regular fa-bookmark"></i>
                        <i class="fa-solid fa-share-nodes"></i>



                    </div>
                </div>
            </div>
        </label>
        <label for="s3"id="slide3">

            <div class="card">
                <div class="image">
                    <img src="asset/kkn/3.png" alt="">
                    <div class="dots">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class="infos">
                    <span class="name">tes</span>
                    <span class="lorem">tes</span>
                    <a href="" class="btn-details"></a>
                    <div class="actions">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <i class="fa-regular fa-heart"></i>
                        <i class="fa-regular fa-bookmark"></i>
                        <i class="fa-solid fa-share-nodes"></i>



                    </div>
                </div>
            </div>
        </label>
        <label for="s4"id="slide4">

            <div class="card">
                <div class="image">
                    <img src="asset/kkn/4.png" alt="">
                    <div class="dots">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class="infos">
                    <span class="name">tes</span>
                    <span class="lorem">tes</span>
                    <a href="" class="btn-details"></a>
                    <div class="actions">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <i class="fa-regular fa-heart"></i>
                        <i class="fa-regular fa-bookmark"></i>
                        <i class="fa-solid fa-share-nodes"></i>
                    </div>
                </div>
            </div>
        </label>
        <label for="s5"id="slide5">

            <div class="card">
            <div class="image">
                <img src="asset/kkn/6.png" alt="">
                <div class="dots">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="infos">
                <span class="name">tes</span>
                <span class="lorem">tes</span>
                <a href="" class="btn-details"></a>
                <div class="actions">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <i class="fa-regular fa-heart"></i>
                    <i class="fa-regular fa-bookmark"></i>
                    <i class="fa-solid fa-share-nodes"></i>
                </div>
            </div>
            </div>
        </label>
    </div>

</div>

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
