<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prak 3</title>
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
        table {
            width: 100%; /* Lebar tabel 100% untuk form */
        }
        td {
            padding: 10px; /* Jarak antar elemen */
        }
        input[type="text"] {
            width: calc(100% - 20px); /* Lebar input mengurangi padding */
            padding: 10px; /* Jarak dalam input */
            border: 2px solid #ff1744; /* Border merah untuk input */
            border-radius: 5px; /* Sudut melengkung pada input */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Bayangan ringan */
        }
        input[type="submit"] {
            background-color: #d50032; /* Warna latar belakang tombol lebih gelap */
            color: white; /* Warna teks putih */
            border: none; /* Tanpa border */
            border-radius: 5px; /* Sudut melengkung pada tombol */
            padding: 10px 15px; /* Jarak dalam tombol */
            cursor: pointer; /* Kursor menjadi pointer */
            font-size: 16px; /* Ukuran font tombol */
        }
        input[type="submit"]:hover {
            background-color: #a2001d; /* Warna tombol saat hover lebih gelap */
        }
    </style>
</head>
<body>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NPM:</td>
                <td><input type="text" name="npm"></td>
            </tr>
            <tr>
                <td>Kelas:</td>
                <td><input type="text" name="kelas"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>
