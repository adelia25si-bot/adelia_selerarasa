@extends('layouts.admin')

@section('content')
<div class="page-heading">
    <h3>Edit Menu</h3>
</div>

<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4>Form Edit Menu</h4>
            </div>

            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('menus.update', $menu->id) }}"
                      method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label>Nama Menu</label>
                        <input type="text"
                               name="nama_menu"
                               class="form-control"
                               value="{{ old('nama_menu', $menu->nama_menu) }}"
                               required>
                                @error('nama_menu')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label>Kategori</label>
                        <input type="text"
                               name="kategori"
                               class="form-control"
                               value="{{ old('kategori', $menu->kategori) }}"
                               required>
                                @error('kategori')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label>Harga (Rp)</label>
                        <input type="number"
                               name="harga"
                               class="form-control"
                               value="{{ old('harga', $menu->harga) }}"
                               min="0"
                               step="0.01"
                               required>
                                @error('harga')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi"
                                  class="form-control"
                                  rows="3">{{ old('deskripsi', $menu->deskripsi) }}</textarea>
                                  @error('deskripsi')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label>Foto Menu Saat Ini</label><br>

                        @if ($menu->gambar)
                            <img src="{{ asset('storage/' . $menu->gambar) }}"
                                 alt="{{ $menu->nama_menu }}"
                                 width="150"
                                 style="border-radius: 8px; margin-bottom: 10px;">
                        @else
                            <p>Belum ada foto.</p>
                        @endif
                    </div>

                    <div class="form-group mb-3">
                        <label>Ganti Foto Menu (opsional)</label>
                        <input type="file"
                               name="gambar"
                               class="form-control"
                               accept=".jpg,.jpeg,.png,.webp">
                               @error('gambar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                        <small class="text-muted">
                            Format JPG, JPEG, PNG, atau WEBP. Maksimal 2 MB.
                        </small>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Simpan Perubahan
                    </button>

                    <a href="{{ route('menus.index') }}"
                       class="btn btn-secondary">
                        Batal
                    </a>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
