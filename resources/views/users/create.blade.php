@extends('layouts.admin')

@section('content')
<div class="page-heading">
    <h3>Tambah User</h3>
</div>

<div class="page-content">
    <div class="card">
        <div class="card-header">
            <h4>Form Tambah User</h4>
        </div>

        <div class="card-body">

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

            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <div class="form-group mb-3">
                    <label>Nama</label>
                    <input type="text" name="name"
                        class="form-control"
                        value="{{ old('name') }}" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Email</label>
                    <input type="email" name="email"
                        class="form-control"
                        value="{{ old('email') }}" required>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Password</label>
                    <input type="password" name="password"
                        class="form-control" required>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Konfirmasi Password</label>
                    <input type="password" name="password_confirmation"
                        class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>

                <a href="{{ route('users.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
            </form>

        </div>
    </div>
</div>
@endsection
