
@extends('layouts.admin')

@section('content')
<div class="page-heading">
    <h3>Kelola Menu</h3>
</div>

<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4>Daftar Menu Selera Rasa</h4>
                <a href="{{ route('menus.create') }}"
                   class="btn btn-primary">
                    + Tambah Menu
                </a>
            </div>

            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama Menu</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                        <tbody>
                            @forelse ($menus as $menu)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

<td>
    @if ($menu->gambar)
        <img src="{{ asset('storage/' . $menu->gambar) }}"
             alt="{{ $menu->nama_menu }}"
             width="80"
             height="60"
             style="object-fit: cover; border-radius: 8px;">
    @else
        Belum ada foto
    @endif
</td>

                                    <td>{{ $menu->nama_menu }}</td>
                                    <td>{{ $menu->kategori }}</td>
                                    <td>
                                        Rp {{ number_format($menu->harga, 0, ',', '.') }}
                                    </td>
                                    <td>{{ $menu->deskripsi ?? '-' }}</td>
                                    <td>
                                    <a href="{{ route('menus.edit', $menu->id) }}"
                                    class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('menus.destroy', $menu->id) }}"
                                        method="POST"
                                        style="display:inline;"
                                        onsubmit="return confirm('Yakin ingin menghapus menu ini?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7">
                                        Belum ada data menu.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
