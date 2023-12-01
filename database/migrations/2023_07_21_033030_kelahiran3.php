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
        Schema::table('kelahirans', function (Blueprint $table) {
            //
            $table->string('tempatLahirAyah');
            $table->date('tanggalLahirAyah');
            $table->string('tempatLahirIbu');
            $table->date('tanggalLahirIbu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kelahirans', function (Blueprint $table) {
            //
        });
    }
};
