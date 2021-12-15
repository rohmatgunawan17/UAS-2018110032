<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_tilang extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'barang_bukti',
        'no_stnk_sim',
        'nama',
        'no_kendaraan',
        'tanggal_tilang',
        'tanggal_sidang',
        'status_penilangan',
        // 'pelanggaran',
        // 'total_denda',
        // 'tempat_sidang',
        'alamat',
        'created_at',
        'updated_at',
        // 'keterangan',
        // 'surat_tilang',
    ];
}
