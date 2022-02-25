<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kode_siswa')->nullable();
            $table->foreignId('kode_kelas')->nullable();
            $table->foreignId('kode_guru')->nullable();
            $table->foreignId('kode_pelajaran')->nullable();
            $table->enum('semester', array('1(Ganjil)', '2(Genap)'));
            $table->integer('nilai');
            $table->char('predikat', 1);
            $table->string('desk_pengetahuan')->nullable();
            $table->string('desk_keterampilan')->nullable();
            $table->timestamps();
        });
        Schema::table('nilai', function($table) {
            $table->foreign('kode_siswa')->references('id')->on('siswa')->onDelete('cascade');
            $table->foreign('kode_kelas')->references('id')->on('kelas')->onDelete('cascade');
            $table->foreign('kode_guru')->references('id')->on('guru')->onDelete('cascade');
            $table->foreign('kode_pelajaran')->references('id')->on('pelajaran')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai');
    }
}
