<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
            width: 120px;
            height: 120px;
            margin-bottom: 20px;
            border: 4px solid #ff1744; /* Border merah untuk lingkaran */
            border-radius: 50%; /* Membuat gambar lingkaran */
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
            text-align: left;
            width: 80px; /* Lebar tetap untuk label agar sejajar */
        }
        .value {
            flex: 1;
            text-align: left;
            padding-left: 10px; /* Sedikit jarak antara label dan value */
        }
    </style>
</head>
<body>

    <div class="card">
    <img src="{{ asset('storage/uploads/' . $user->foto) }}" class="card-img-top" alt="">
        <h1>Profil User</h1>

        <div class="info">
            <p class="label">Nama :</p>
            <p class="value">{{$user->nama }}</p> <!-- Proper width for name field -->
        </div>
        <div class="info">
            <p class="label">NPM    :</p>
            <p class="value">{{ $user->npm }}</p> <!-- Proper width for NPM -->
        </div>
        <div class="info">
            <p class="label">Kelas :</p>
            <p class="value">{{ $nama_kelas ?? 'Kelas tidak ditemukan' }}</p> <!-- Proper width for class -->
        </div>
    </div>

</body>
</html>
