<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelPasienDokter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien_dokter', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pasien_id',false,true);
            $table->foreign('pasien_id')->references('id')->on('pasien')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('dokter_id',false,true);
            $table->foreign('dokter_id')->references('id')->on('dokter')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('layanan_id',false,true);
            $table->foreign('layanan_id')->references('id')->on('layanan')->onDelete('cascade')->onUpdate('cascade');
            $table->date('tanggal');
            $table->longText('keterangan');
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
        Schema::drop('pasien_dokter');
    }
}
