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
            $table->integer('mahasiswa_id');
            $table->enum('jenis_prestasi',['Akademik','Non akademik']);
            $table->enum('skala',['Kecamatan','Kabupaten','Provinsi','Nasional','Internasional']);
            $table->string('tanggal');
            $table->string('penyelenggara');
            $table->string('prestasi');
            $table->string('berkas');
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
