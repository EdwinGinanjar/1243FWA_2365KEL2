<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelDokter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokter', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('nama',50);
            $table->date('ttl');
            $table->string('jenkel',10);
            $table->string('tlp',15);
            $table->string('alamat');
            $table->integer('spesialis_id',false,true);
            $table->foreign('spesialis_id')->references('id')->on('spesialis')->onDelete('cascade')->onUpdate('cascade');
             $table->integer('jadwal_id',false,true);
            $table->foreign('jadwal_id')->references('id')->on('jadwal')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('pengguna_id',false,true);
            $table->foreign('pengguna_id')->references('id')->on('pengguna')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('dokter');
    }
}
