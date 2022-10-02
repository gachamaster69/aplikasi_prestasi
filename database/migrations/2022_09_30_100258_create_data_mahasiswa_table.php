<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('nama');
            $table->string('jurusan');
            $table->decimal('ipk');
            $table->integer('pendapatan');
            $table->string('daftar_prestasi');
            $table->integer('jumlah_prestasi_nasional')->nullable();
            $table->integer('jumlah_prestasi_internasional')->nullable();
            $table->integer('tunggakan')->nullable();
            $table->string('organisasi')->nullable();
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
        Schema::dropIfExists('data_mahasiswa');
    }
}
