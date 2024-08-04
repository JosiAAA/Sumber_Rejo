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
        <form id="inputForm" method="POST" action="{{ route('upload_galeri/store') }}" enctype="multipart/form-data">
            @csrf
    
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" required></textarea>
            </div>
            
            <div class="form-group">
                <label for="gambar">Gambar:</label>
                <div class="image-container" id="imageContainer">
                    <img id="selectedImage" alt="Selected Image" style="display:none;">
                    <button type="button" class="btn-upload" onclick="document.getElementById('gambar').click()">Pilih Gambar</button>
                    <input type="file" id="gambar" name="gambar" accept="image/*" required>
                </div>
            </div>
    
            <button type="submit">Kirim</button>
        </form>
    </div>
    
    <script>
        document.getElementById('gambar').addEventListener('change', function(event) {
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
    </script>
    

</body>
</html>
