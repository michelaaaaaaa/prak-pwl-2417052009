@extends('layouts.app')

@section('content')

<style>
    .pixel-page {
        text-align: center;
        padding: 30px 0;
    }

    .pixel-title {
        font-family: monospace;
        font-weight: bold;
        color: #1557a6;
        text-shadow: 2px 2px #aee3ff;
        letter-spacing: 2px;
        margin-bottom: 8px;
    }

    .pixel-subtitle {
        font-family: monospace;
        color: #555;
        margin-bottom: 25px;
    }

    .pixel-card {
        width: 80%;
        max-width: 900px;
        margin: 0 auto;
        padding: 25px;
        background: #e8f6ff;
        border: 4px solid #1557a6;
        box-shadow: 6px 6px 0 #b8dfff;
    }

    .pixel-btn {
        font-family: monospace;
        font-weight: bold;
        font-size: 16px;
        padding: 10px 18px;
        border: 3px solid #1557a6;
        border-radius: 10px;
        box-shadow: 4px 4px 0 #1557a6;
    }

    .pixel-table {
        width: 100%;
        font-family: monospace;
        border: 3px solid #1557a6;
        margin: 0 auto;
    }

    .pixel-table th {
        background: #1557a6;
        color: white;
        text-align: center;
        padding: 12px;
    }

    .pixel-table td {
        text-align: center;
        padding: 12px;
        background: white;
    }

    .pixel-table tbody tr:nth-child(even) td {
        background: #fce6ff;
    }
</style>

<div class="pixel-page">

    <h1 class="pixel-title">DAFTAR PENGGUNA</h1>

    <p class="pixel-subtitle">
        Data mahasiswa yang terdaftar
    </p>

    <div class="pixel-card">

       <div class="d-flex justify-content-end mb-4">
            <a href="/user/create" class="btn btn-primary pixel-btn">
                + TAMBAH USER
            </a>
        </div>

        <x-userTable :users="$users" />

    </div>

</div>

@endsection