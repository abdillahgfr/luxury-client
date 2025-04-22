<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePoOnline extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('po_online', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('no_telp');
            $table->string('jk');
            $table->string('nama_instansi');
            $table->string('wilayah_instansi');
            $table->string('tgl_pelaksanaan');
            $table->string('kota_pelaksanaan');
            $table->string('jml_peserta');
            $table->string('paket');
            $table->string('berkas_po');
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
        //
        Schema::dropIfExists('po_online');
    }
}
