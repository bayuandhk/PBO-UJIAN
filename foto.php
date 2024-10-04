<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Foto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .gallery {
            display: flex;
            gap: 20px;
        }
        .gallery img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .button-container {
            text-align: center; 
            margin-top: 30px; 
        }
        .button {
            font-size: 18px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="gallery">
        <img src="megatrus.jpeg" alt="Foto 1">
        <img src="megatrus1.jpeg" alt="Foto 2">
    </div>
    <a href="beranda.php" class="button">kembali ke halaman beranda</a>
</body>
</html>
