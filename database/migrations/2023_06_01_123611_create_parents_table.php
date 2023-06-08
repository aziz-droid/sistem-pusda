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
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('author')->nullable();
            $table->string('nomor_sertifikat')->unique();
            $table->string('tanggal_sertifikat');
            $table->string('nama_aset');
            $table->string('alamat');
            $table->string('luas');
            $table->integer('nilai_aset');
            $table->string('upt');
            $table->timestamps(); 

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parents');
    }
};


