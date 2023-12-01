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
        Schema::create('villagers', function (Blueprint $table) {
            $table->integer('nkk');
            $table->id('nik');
            $table->string('nama');
            $table->string('tempatLahir');
            $table->string('tanggalLahir');
            $table->string('agama');
            $table->string('statusKawin');
            $table->string('kelamin');
            $table->string('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('ektp');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('villagers');
    }
};
