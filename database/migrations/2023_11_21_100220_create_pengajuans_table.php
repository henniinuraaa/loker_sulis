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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('email');
            $table->string('nama_perusahaan');
            $table->integer('no_hp');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('nilai_rata');
            $table->string('jurusan');
            $table->string('jk');
            $table->date('thn_lulus');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->string('status')->default('pending','Dikonfirmasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
        $table->dropColumn('status');
        $table->dropColumn('file_name');
        $table->dropColumn('file_path');
    }
};
