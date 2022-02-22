<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensiSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi_siswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kode_pertemuan')->nullable();
            $table->foreignId('kode_siswa')->nullable();
            $table->foreignId('kode_kehadiran')->nullable();
            $table->timestamps();
        });

        Schema::table('absensi_siswa', function($table) {
            $table->foreign('kode_siswa')->references('id')->on('siswa')->onDelete('cascade');
            $table->foreign('kode_kehadiran')->references('id')->on('kehadiran')->onDelete('cascade');
            $table->foreign('kode_pertemuan')->references('id')->on('pertemuan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensi_siswa');
    }
}
