@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Mata Kuliah</h1>

        <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama_mk">Nama Mata Kuliah</label>
                <input type="text" class="form-control" id="nama_mk" name="nama_mk" value="{{ $mk->nama_mk }}" required><br><br>
            </div>

            <div class="form-group">
                <label for="sks">SKS</label>
                <input type="number" class="form-control" id="sks" name="sks" value="{{ $mk->sks }}" required><br><br>
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection