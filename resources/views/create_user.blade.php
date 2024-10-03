@extends('layouts.app')

@section('content')
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
        width: 350px;
        border: 2px solid #ff1744; /* Border merah */
    }
    
    label {
        color: #ff1744; /* Warna label sesuai tema Deadpool */
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }
    
    input[type="text"], select {
        width: 100%;
        padding: 10px;
        border: 2px solid #ff1744;
        border-radius: 5px;
        margin-bottom: 15px;
    }

    button[type="submit"] {
        background-color: #d50032;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 15px;
        cursor: pointer;
        font-size: 16px;
        width: 100%;
        border: 2px solid #ff1744;
    }

    button[type="submit"]:hover {
        background-color: #a2001d;
        border: 2px solid #ff6f40;
    }

    .text-danger {
        color: red;
        font-size: 14px;
        margin: 5px 0;
    }
</style>

<div class="card">
    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        @foreach($errors->get('nama') as $msg)
        <p class="text-danger">{{ $msg }}</p>
        @endforeach

        <label for="npm">NPM :</label>
        <input type="text" id="npm" name="npm">
        @foreach($errors->get('npm') as $msg)
        <p class="text-danger">{{ $msg }}</p>
        @endforeach

        <label for="kelas">Kelas :</label>
        <select name="kelas_id" id="kelas_id">
            @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}"> {{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select>
        <label for="foto">Foto : </label>
        <input type="file" id="foto" name="foto"><br><br>
        <button type="submit">Submit</button><br>
    </form>
</div>
@endsection
