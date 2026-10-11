<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggans';

    protected $fillable = [
        'nama_pelanggan',
        'email',
        'no_telepon',
        'alamat',
    ];
}
