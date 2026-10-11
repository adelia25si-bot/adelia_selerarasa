
@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h3 class="mb-4">Tambah Kategori</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Periksa kembali input kamu!</strong>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('kategoris.store') }}" method="POST">
                @csrf

                <div class="form-group mb-3">
                    <label>Nama Kategori</label>
                    <input type="text"
                           name="nama_kategori"
                           class="form-control"
                           value="{{ old('nama_kategori') }}"
                           required>

                    @error('nama_kategori')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi"
                              class="form-control"
                              rows="3">{{ old('deskripsi') }}</textarea>

                    @error('deskripsi')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan Kategori
                </button>

                <a href="{{ route('kategoris.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
