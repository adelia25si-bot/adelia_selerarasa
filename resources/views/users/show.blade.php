@extends('layouts.admin')

@section('content')
<div class="page-heading">
    <h3>Detail User</h3>
</div>

<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4>Informasi User</h4>
            </div>

            <div class="card-body">
                <p><strong>Nama:</strong> {{ $user->name }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>

                <a href="{{ route('users.index') }}" class="btn btn-secondary">
                    Kembali
                </a>

                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">
                    Edit
                </a>
            </div>
        </div>
    </section>
</div>
@endsection
