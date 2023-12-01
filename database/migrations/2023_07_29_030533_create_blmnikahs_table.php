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
        Schema::create('blmnikahs', function (Blueprint $table) {
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
            $table->string('agama');
            $table->string('kebangsaan');
            $table->string('kelamin');
            $table->string('status');
            $table->string('pekerjaan');
            $table->string('alamat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blmnikahs');
    }
};
