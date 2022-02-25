<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiSikapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('nilai_sikap');

        Schema::create('nilai_sikap', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kode_siswa')->nullable();
            $table->enum('jenis_sikap', array('spritual', 'sosial'));
            $table->string('predikat');
            $table->string('desk');
            $table->timestamps();
        });

        Schema::table('nilai_sikap', function($table) {
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
        Schema::dropIfExists('nilai_sikap');
    }
}
