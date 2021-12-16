<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarTilangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_tilangs', function (Blueprint $table) {
            // $table->id();
            $table->string('barang_bukti')->nullabel();
            $table->integer('no_stnk_sim');
            $table->string('nama');
            $table->string('no_kendaraan');
            $table->date('tanggal_tilang');
            $table->date('tanggal_sidang');
            $table->string('status_penilangan');
            $table->string('pelanggaran')->nullabel();
            $table->integer('total_denda')->nullabel();
            $table->string('tempat_sidang')->nullabel();
            $table->string('alamat');
            $table->string('keterangan')->nullabel();
            $table->string('surat_tilang')->nullabel();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_tilangs');
    }
}
