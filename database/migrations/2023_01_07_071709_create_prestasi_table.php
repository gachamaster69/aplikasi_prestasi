<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mahasiswa_id');
            $table->enum('jenis_prestasi',['Akademik','Non akademik']);
            $table->enum('skala',['Kabupaten','Provinsi','Nasional','Internasional']);
            $table->string('tanggal');
            $table->string('penyelenggara');
            $table->string('prestasi');
            $table->string('berkas');
            $table->string('berkas2')->nullable();
            $table->string('berkas3')->nullable();
            $table->string('berkas_kegiatan');
            $table->string('berkas_kegiatan2')->nullable();
            $table->string('berkas_kegiatan3')->nullable();
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
        Schema::dropIfExists('prestasi');
    }
}
