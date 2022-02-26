<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('no_induk');
            $table->string('nama_siswa');
            $table->enum('jk', array('pria', 'wanita'));
            $table->string('telp');
            $table->foreignId('kode_kelas')->nullable();
            $table->string('alamat');
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->timestamps();
        });

        Schema::table('siswa', function($table) {
            $table->foreign('kode_kelas')->references('id')->on('kelas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');

    }
}
