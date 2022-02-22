<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kode_hari')->nullable();
            $table->string('jam');
            $table->foreignId('kode_pelajaran')->nullable();
            $table->foreignId('kode_guru')->nullable();
            $table->foreignId('kode_kelas')->nullable();
            $table->timestamps();
        });

                Schema::table('jadwal', function($table) {
            $table->foreign('kode_pelajaran')->references('id')->on('pelajaran')->onDelete('cascade');
            $table->foreign('kode_guru')->references('id')->on('guru')->onDelete('cascade');
            $table->foreign('kode_kelas')->references('id')->on('kelas')->onDelete('cascade');
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
        Schema::dropIfExists('jadwal');
    }
}
