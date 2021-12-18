<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftars', function (Blueprint $table) {
            $table->id();
            $table->string('barang_bukti', 50);
            $table->string('no', 15);
            $table->string('nama', 50);
            $table->string('alamat', 200);
            $table->date('tanggal_tilang');
            $table->date('tanggal_sidang');
            $table->string('pelanggaran', 255);
            $table->integer('total_denda');
            $table->string('tempat_sidang', 255);
            $table->string('status_penilangan', 50);
            $table->string('pelaku', 100);
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
        Schema::dropIfExists('daftars');
    }
}
