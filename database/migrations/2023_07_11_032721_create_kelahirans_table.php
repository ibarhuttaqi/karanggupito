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
        Schema::create('kelahirans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tipeSurat');
            $table->string('nomorSurat');
            $table->date('tanggalSurat');
            $table->foreignId('manager_id');
            
            $table->string('namaBayi');
            $table->string('tempatLahir');
            $table->date('tanggalLahir');
            // $table->string('agama');
            $table->string('kelamin');
            $table->string('anakKe');
            $table->string('namaAyah');
            // $table->string('nikAyah');
            $table->string('alamatAyah');
            $table->string('namaIbu');
            // $table->string('nikIbu');
            $table->string('alamatIbu');
            // $table->string('nkk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelahirans');
    }
};
