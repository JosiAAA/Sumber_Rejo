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
        Schema::create('berita', function (Blueprint $table) {
            $table->increments("id");
            $table->text("judul");
            $table->string("role_pemilik");
            $table->string('gambar')->nullable(); // Kolom untuk path gambar
            $table->string("tanggal");
            $table->string("jam");
            $table->text("deskripsi");
            $table->text("viewer");
            $table->text("updated_at")->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
