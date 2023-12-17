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
        Schema::create('postings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan');
            $table->string('bidang_usaha');
            $table->string('lowongan');
            $table->text('lokasi');
            $table->date('ttl_p');
            $table->date('ttl_tp');
            $table->text('deskripsi');
            // $table->enum('status', ['Draft','Acceped', 'konfirmasi']);
            $table->string('status')->default('pending','Dikonfirmasi');
            $table->text('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postings');
    }
};
