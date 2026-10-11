```php
@extends('layouts.admin')

@section('content')
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
<div class="page-heading">
    <h3>Tambah Menu</h3>
</div>

<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4>Form Tambah Menu</h4>
            </div>

            <div class="card-body">
              <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
    <label>Foto Menu</label>
    <input type="file" name="gambar" class="form-control"
           accept="image/*" required>
           @error('gambar')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>


                    <div class="form-group mb-3">
                        <label>Nama Menu</label>
                        <input type="text" name="nama_menu" class="form-control"
                               value="{{ old('nama_menu') }}" required>
                         @error('nama_menu')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label>Kategori</label>
                        <input type="text" name="kategori" class="form-control"
                               value="{{ old('kategori') }}" required>
                               @error('kategori')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label>Harga</label>
                        <input type="number" name="harga" class="form-control"
                               value="{{ old('harga') }}" min="0" required>
                               @error('harga')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="3">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('menus.index') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
```
