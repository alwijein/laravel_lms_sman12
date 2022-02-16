<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('nama_guru');
            $table->foreignId('kode_pelajaran')->unsigned();
            $table->string('alamat');
            $table->string('hp');
            $table->timestamps();
        });

        Schema::table('guru', function($table) {
            $table->foreign('kode_pelajaran')->references('id')->on('pelajaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guru');
    }
}
