<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Create</title>
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
        form {
            background-color: #ffffff; /* Warna latar belakang form tetap putih */
            border-radius: 15px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2); /* Bayangan */
            padding: 30px;
            width: 350px; /* Lebar form */
            border: 2px solid #ff1744; /* Border merah */
        }
        label {
            color: #ff1744; /* Warna label sesuai tema Deadpool */
            font-weight: bold;
            display: block; /* Memastikan label berada di atas input */
            margin-bottom: 5px; /* Jarak antara label dan input */
        }
        input[type="text"], select {
            width: calc(100% - 20px); /* Lebar input dan select mengurangi padding */
            padding: 10px; /* Jarak dalam input */
            border: 2px solid #ff1744; /* Border merah untuk input */
            border-radius: 5px; /* Sudut melengkung pada input dan select */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Bayangan ringan */
            margin-bottom: 15px; /* Jarak antara elemen input */
        }
        input[type="submit"] {
            background-color: #d50032; /* Warna latar belakang tombol lebih gelap */
            color: white; /* Warna teks putih */
            border: none; /* Tanpa border */
            border-radius: 5px; /* Sudut melengkung pada tombol */
            padding: 10px 15px; /* Jarak dalam tombol */
            cursor: pointer; /* Kursor menjadi pointer */
            font-size: 16px; /* Ukuran font tombol */
            width: 100%; /* Lebar tombol 100% */
            border: 2px solid #ff1744; /* Border merah untuk tombol */
        }
        input[type="submit"]:hover {
            background-color: #a2001d; /* Warna tombol saat hover lebih gelap */
            border: 2px solid #ff6f40; /* Border tombol saat hover */
        }
        .text-danger {
            color: red; /* Warna merah untuk pesan error */
            font-size: 14px; /* Ukuran font untuk pesan error */
            margin: 5px 0; /* Jarak antara pesan error dan elemen lainnya */
        }
    </style>
</head>
<body>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        @foreach($errors->get('nama') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach

        <label for="npm">NPM:</label>
        <input type="text" id="npm" name="npm">
        @foreach($errors->get('npm') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach

        <label for="kelas">Kelas :</label>
        <select name="kelas_id" id="kelas_id">
            @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
