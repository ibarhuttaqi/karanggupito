<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tidak_mampus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('tipeSurat');
            $table->string('nomorSurat');
            $table->date('tanggalSurat');
            $table->foreignId('manager_id');
            
            $table->string('nama');
            $table->string('nik');
            $table->string('tempatLahir');
            $table->date('tanggalLahir');
            $table->string('kelamin');
            $table->string('pekerjaan');
            $table->string('sekolah');
            $table->string('alamat');

            $table->string('namaAyah');
            $table->string('nikAyah');
            $table->string('tempatLahirAyah');
            $table->date('tanggalLahirAyah');
            $table->string('pekerjaanAyah');  
            $table->string('alamatAyah');

            $table->string('namaIbu');
            $table->string('nikIbu');
            $table->string('tempatLahirIbu');
            $table->date('tanggalLahirIbu');
            $table->string('pekerjaanIbu');
            $table->string('alamatIbu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tidak_mampus');
    }
};
