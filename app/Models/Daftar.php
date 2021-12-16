<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;
    protected $fillable = [
        'barang_bukti',
        'no',
        'nama',
        'alamat',
        'tanggal_tilang',
        'tanggal_sidang',
        'pelanggaran',
        'total_denda',
        'tempat_sidang',
        'status_penilangan',
        'pelaku'

    ];
}
