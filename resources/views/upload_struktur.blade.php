<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
    <style>
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .image-container {
            width: 100%;
            height: 200px;
            border: 2px solid #ccc;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-size: cover;
            background-position: center;
            margin-bottom: 10px;
            position: relative;
            overflow: hidden;
        }
        .image-container img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            display: none;
        }
        .image-container .btn-upload {
            position: absolute;
            bottom: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
        }
        .image-container input[type="file"] {
            display: none;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group textarea {
            width: 100%;
            height: 100px;
            resize: vertical;
        }
        .form-group #title {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="form-container">
    <form id="inputForm" method="POST" action="{{ route('submit_struktur/store') }}" enctype="multipart/form-data">
    @csrf
 
    <div class="form-group">
        <label for="jabatan">Jabatan:</label>
        <input type="text" id="jabatan" name="jabatan" required>
    </div>
    
    <div class="form-group">
        <label for="keterangan">Keterangan:</label>
        <textarea id="keterangan" name="keterangan" required></textarea>
    </div>
    
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
    </div>
    
    <div class="form-group">
        <label for="nip">NIP:</label>
        <input type="text" id="nip" name="nip" required>
    </div>
    
    <div class="form-group">
        <label for="image">Gambar:</label>
        <input type="file" id="gambar" name="gambar" accept="image/*">
    </div>
    
    <button type="submit">Kirim</button>
</form>

    </div>
    
    <script>
        window.onload = function() {
            var tanggalInput = document.getElementById('tanggal');
            var jamInput = document.getElementById('jam');
            
            // Dapatkan tanggal sekarang
            var date = new Date();  
            
            // Format tanggal menjadi "11 November 2023"
            var options = { day: 'numeric', month: 'long', year: 'numeric' };
            var tanggalFormatted = date.toLocaleDateString('id-ID', options);
            
            // Dapatkan jam sekarang
            var jamSekarang = date.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit' });
    
            // Isi nilai pada input hidden
            tanggalInput.value = tanggalFormatted;
            jamInput.value = jamSekarang;
        };
    
        document.getElementById('image').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) { 
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.getElementById('selectedImage');
                    img.src = e.target.result;
                    img.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        });
    
        document.getElementById('inputForm').addEventListener('submit', function(event) {
            const fileInput = document.getElementById('image');
            if (!fileInput.files.length) {
                alert('Harap pilih gambar sebelum mengirimkan formulir.');
                event.preventDefault(); // Mencegah pengiriman formulir jika file belum dipilih
            }
        });
    </script>
    
</body>
</html>
