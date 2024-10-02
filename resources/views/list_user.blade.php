@extends('layouts.app')

@section('content')
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
        background-color: #b71c1c; /* Latar belakang merah tua khas Deadpool */
    }

    .container {
        background-color: white; /* Latar belakang kontainer */
        border-radius: 15px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2); /* Bayangan */
        padding: 30px;
        width: 90%; /* Mengatur lebar kontainer */
        max-width: 800px; /* Mengatur lebar maksimum */
        margin: 20px auto; /* Margin atas dan bawah untuk spasi */
        overflow-x: auto; /* Menambahkan scroll horizontal jika diperlukan */
    }

    h2 {
        text-align: center; /* Memusatkan judul */
        color: #ff1744; /* Warna judul sesuai tema Deadpool */
        margin-bottom: 20px; /* Jarak antara judul dan tabel */
    }

    .table {
        width: 100%; /* Lebar tabel 100% dari kontainer */
        border-collapse: collapse; /* Menghilangkan jarak antar border */
    }

    .table th, .table td {
        padding: 15px; /* Jarak dalam sel */
        text-align: left; /* Rata kiri untuk teks */
        border-bottom: 1px solid #ff1744; /* Garis bawah sel */
    }

    .table th {
        background-color: #ff1744; /* Warna latar belakang header tabel */
        color: white; /* Warna teks header */
    }

    .table td {
        color: #333; /* Warna teks sel */
    }

    .table tr:hover {
        background-color: #ff6f40; /* Warna saat hover */
        color: white; /* Warna teks saat hover */
    }

    .btn-primary {
        background-color: #ff1744; /* Warna tombol sesuai tema Deadpool */
        border: none; /* Tanpa border */
        color: white; /* Warna teks tombol */
        padding: 8px 12px; /* Jarak dalam tombol */
        border-radius: 5px; /* Sudut melengkung pada tombol */
        transition: background-color 0.3s; /* Efek transisi saat hover */
    }

    .btn-primary:hover {
        background-color: #a2001d; /* Warna tombol saat hover lebih gelap */
        cursor: pointer; /* Mengubah kursor saat hover */
    }

    /* Responsif */
    @media (max-width: 768px) {
        .container {
            padding: 15px; /* Mengurangi padding pada layar kecil */
        }
        
        .table th, .table td {
            padding: 10px; /* Mengurangi padding pada sel */
        }

        .btn-primary {
            padding: 6px 10px; /* Mengurangi padding pada tombol */
        }
    }
</style>

<div class="container">
    <h2>Daftar Pengguna</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->npm }}</td>
                <td>{{ $user->nama_kelas }}</td>
                <td><button class="btn btn-primary">Aksi</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
