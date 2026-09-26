@extends('layouts.app')

@section('content')

<style>
    body {
        background: #eee8f8;
    }

    .pixel-page {
        text-align: center;
        padding: 30px 0;
    }

    .pixel-title {
        font-family: monospace;
        font-weight: bold;
        color: #6b5b95;
        text-shadow: 2px 2px #d8d0e8;
        letter-spacing: 2px;
        margin-bottom: 8px;
    }

    .pixel-subtitle {
        font-family: monospace;
        color: #666078;
        margin-bottom: 25px;
    }

    .pixel-card {
        width: 80%;
        max-width: 700px;
        margin: 0 auto;
        padding: 30px;
        background: #e1f2f0;
        border: 4px solid #8b7bb5;
        box-shadow: 6px 6px 0 #c5deda;
        text-align: left;
    }

    .pixel-form label {
        font-family: monospace;
        font-weight: bold;
        color: #6b5b95;
    }

    .pixel-form input,
    .pixel-form select {
        width: 100%;
        padding: 10px;
        border: 3px solid #8b7bb5;
        border-radius: 8px;
        font-family: monospace;
        margin-top: 5px;
        margin-bottom: 20px;
    }

    .pixel-btn {
        font-family: monospace;
        font-weight: bold;
        font-size: 16px;
        padding: 10px 20px;
        border: 3px solid #6b5b95;
        border-radius: 10px;
        box-shadow: 4px 4px 0 #8b7bb5;
    }
</style>

<div class="pixel-page">

    <h1 class="pixel-title">BUAT PENGGUNA BARU</h1>

    <p class="pixel-subtitle">
        Tambahkan data mahasiswa baru
    </p>

    <div class="pixel-card">

        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <div class="pixel-form">

                <label for="nama">NAMA</label><br>
                <input type="text" id="nama" name="nama" required>

                <label for="npm">NPM</label><br>
                <input type="text" id="npm" name="npm" required>

                <label for="kelas_id">KELAS</label><br>

                <select name="kelas_id" id="kelas_id" required>
                    <option value="">-- Pilih Kelas --</option>

                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">
                            {{ $kelasItem->nama_kelas }}
                        </option>
                    @endforeach
                </select>

            </div>

            <div class="text-end">

                <button type="submit" class="btn btn-primary pixel-btn">
                    SIMPAN
                </button>

            </div>

        </form>

    </div>

</div>

@endsection