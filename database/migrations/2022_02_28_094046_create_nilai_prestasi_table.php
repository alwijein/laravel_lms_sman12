<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiPrestasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('nilai_prestasi');

        Schema::create('nilai_prestasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kode_siswa');
            $table->string('jenisKegiatan')->nullable();
            $table->string('keterangan')->nullable();
            $table->enum('semester', array('1(Ganjil)', '2(Genap)'));
            $table->timestamps();
        });

        Schema::table('nilai_prestasi', function($table) {
            $table->foreign('kode_siswa')->references('id')->on('siswa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai_prestasi');
    }
}
