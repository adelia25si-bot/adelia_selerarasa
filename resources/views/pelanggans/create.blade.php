
@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h3 class="mb-4">Tambah Pelanggan</h3>

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
            <form action="{{ route('pelanggans.store') }}" method="POST">
                @csrf

                <div class="form-group mb-3">
                    <label>Nama Pelanggan</label>
                    <input type="text"
                           name="nama_pelanggan"
                           class="form-control"
                           value="{{ old('nama_pelanggan') }}"
                           required>

                    @error('nama_pelanggan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Email</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           value="{{ old('email') }}">

                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>No. Telepon</label>
                    <input type="text"
                           name="no_telepon"
                           class="form-control"
                           value="{{ old('no_telepon') }}">

                    @error('no_telepon')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat"
                              class="form-control"
                              rows="3">{{ old('alamat') }}</textarea>

                    @error('alamat')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan Pelanggan
                </button>

                <a href="{{ route('pelanggans.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
