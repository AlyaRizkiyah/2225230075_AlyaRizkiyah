<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('Nama Lengkap');
            $table->string('Nim');
            $table->date('Tanggal lahir');
            $table->string('Jenis Kelamin');
            $table->string('Asal Sekolah');
            $table->string('Jalur Masuk');
            $table->string('Email');
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
        Schema::dropIfExists('_mahasiswas');
    }
};
