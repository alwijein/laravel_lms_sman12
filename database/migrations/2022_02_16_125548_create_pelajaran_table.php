<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelajaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelajaran', function (Blueprint $table) {
            $table->id();
            $table->string('mata_pelajaran');
            $table->string('jumlah_jam');
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
        Schema::dropIfExists('guru');
        Schema::dropIfExists('jadwal');
        Schema::dropIfExists('kelas');
        Schema::dropIfExists('hari');
        Schema::dropIfExists('jadwal_ujian');
        Schema::dropIfExists('pelajaran');
    }
}
