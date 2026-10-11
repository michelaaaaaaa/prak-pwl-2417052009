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
        max-width: 700px;
        margin: 0 auto;
        padding: 25px;
        background: #e8f6ff;
        border: 4px solid #1557a6;
        box-shadow: 6px 6px 0 #b8dfff;
        text-align: left;
    }

    .pixel-card label {
        font-family: monospace;
        font-weight: bold;
        color: #1557a6;
    }

    .pixel-input {
        border: 2px solid #1557a6;
        border-radius: 6px;
        padding: 10px;
    }

    .pixel-btn {
        font-family: monospace;
        font-weight: bold;
        border: 2px solid #1557a6;
        box-shadow: 3px 3px 0 #1557a6;
    }
</style>

<div class="pixel-page">

    <h1 class="pixel-title">EDIT PENGGUNA</h1>

    <p class="pixel-subtitle">
        Perbarui data mahasiswa
    </p>

    @if (session('success'))
        <div class="alert alert-success mx-auto mb-4" style="max-width: 700px;">
            ✨ {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger mx-auto mb-4" style="max-width: 700px;">
            <strong>Oops! Ada kesalahan.</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="pixel-card">

        <form action="{{ route('user.update', $user->uuid) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama" class="form-label">NAMA MAHASISWA</label>
                <input
                    type="text"
                    id="nama"
                    name="nama"
                    class="form-control pixel-input"
                    value="{{ old('nama', $user->nama) }}"
                    required
                >
            </div>

            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input
                    type="text"
                    id="npm"
                    name="npm"
                    class="form-control pixel-input"
                    value="{{ old('npm', $user->npm) }}"
                    required
                >
            </div>

            <div class="mb-4">
                <label for="kelas_id" class="form-label">KELAS</label>
                <select
                    id="kelas_id"
                    name="kelas_id"
                    class="form-select pixel-input"
                    required
                >
                    <option value="">-- Pilih Kelas --</option>

                    @foreach ($kelas as $item)
                        <option
                            value="{{ $item->id }}"
                            {{ old('kelas_id', $user->kelas_id) == $item->id ? 'selected' : '' }}
                        >
                            {{ $item->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="d-flex justify-content-between flex-wrap gap-3">
                <a href="{{ route('user.index') }}" class="btn btn-secondary pixel-btn">
                    ← KEMBALI
                </a>

                <button type="submit" class="btn btn-primary pixel-btn">
                    💾 SIMPAN PERUBAHAN
                </button>
            </div>

        </form>

    </div>

</div>

@endsection
