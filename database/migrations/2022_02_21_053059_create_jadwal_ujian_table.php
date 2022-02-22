<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalUjianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_ujian', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->foreignId('kode_hari')->nullable();
            $table->string('jam');
            $table->foreignId('kode_pelajaran')->nullable();
            $table->timestamps();
        });

                Schema::table('jadwal_ujian', function($table) {
            $table->foreign('kode_pelajaran')->references('id')->on('pelajaran')->onDelete('cascade');
            $table->foreign('kode_hari')->references('id')->on('hari');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_ujian');
    }
}
