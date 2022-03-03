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
            $table->string('no_induk')->nullable()->unique();
            $table->string('nama_guru');
            $table->enum('jk', array('pria', 'wanita'));
            $table->string('telp');
            $table->foreignId('kode_pelajaran')->nullable();
            $table->string('alamat');
            $table->timestamps();
        });

        Schema::table('guru', function($table) {
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
        Schema::dropIfExists('guru');

    }
}
