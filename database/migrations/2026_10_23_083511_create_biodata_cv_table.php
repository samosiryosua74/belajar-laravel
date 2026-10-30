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
        // Baris di bawah ini yang hilang di kode kamu, wajib ada!
        Schema::create('portofolio_0436', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('posisi_keahlian');
            $table->text('tentang_saya');
            $table->string('pendidikan');
            $table->string('pengalaman_kerja');
            $table->string('gambar_portofolio')->nullable();
            $table->timestamps();
        }); // Penutup Schema juga jangan sampai tertinggal
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portofolio_0436');
    }
};
