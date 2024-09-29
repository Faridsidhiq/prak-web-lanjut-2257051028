<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prak2</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #b71c1c; /* Latar belakang merah tua khas Deadpool */
        }
        .card {
            background-color: white; /* Box tetap putih */
            border-radius: 15px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2); /* Bayangan */
            padding: 30px;
            text-align: center;
            width: 350px; /* Lebar card */
            border: 2px solid #ff1744; /* Border merah */
        }
        .card img {
            border-radius: 50%; /* Membuat gambar lingkaran */
            width: 120px;
            height: 120px;
            margin-bottom: 20px;
            border: 4px solid #ff1744; /* Border merah untuk lingkaran */
        }
        .info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f2f2f2; /* Warna abu-abu terang untuk box info */
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 10px;
            color: black; /* Teks warna hitam */
        }
        .info p {
            margin: 0;
            font-size: 18px; /* Ukuran font */
        }
        .label {
            color: #ff1744; /* Warna teks merah sesuai tema Deadpool */
            font-weight: bold;
            flex: 1; /* Label menempati satu bagian */
        }
        .value {
            flex: 2; /* Nilai menempati dua bagian */
            text-align: left;
        }
    </style>
</head>
<body>

    <div class="card">
        <img src="https://i.pinimg.com/736x/09/7e/ef/097eefc0841bed88ddba155bad43d2e6.jpg" alt="Avatar"> <!-- Avatar Deadpool -->
        
        <div class="info">
            <p class="label">Nama:</p>
            <p class="value">Farid Sidhiq S</p> <!-- Nama ditampilkan di sini -->
        </div>
        <div class="info">
            <p class="label">Kelas:</p>
            <p class="value">B</p> <!-- Kelas ditampilkan di sini -->
        </div>
        <div class="info">
            <p class="label">NPM:</p>
            <p class="value">2257051028</p> <!-- NPM ditampilkan di sini -->
        </div>
    </div>

</body>
</html>
