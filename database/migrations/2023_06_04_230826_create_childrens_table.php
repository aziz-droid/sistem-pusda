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
        Schema::create('childrens', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('parents_id')->unsigned();
            $table->enum('penggunaan_pemanfaatan',['pinjam_pakai','pakai_sendiri','sewa_sip_bmd','retribusi']);
            $table->string('atas_nama')->nullable();
            $table->string('peruntukkan')->nullable();
            $table->string('koordinat');
            $table->string('luas'); 
            $table->string('nilai');
            $table->date('berlaku_dari')->nullable();
            $table->date('berlaku_sampai')->nullable();
            $table->string('nomor_perikatan')->unique()->nullable();
            $table->date('tanggal_perikatan')->nullable();
            $table->string('surat_perjanjian')->nullable();
            $table->string('surat_permohonan')->nullable();
            $table->string('kondisi saat ini')->nullable();
            $table->timestamps();
            $table->foreign('parents_id')->references('id')->on('parents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('childrens');
    }
};
