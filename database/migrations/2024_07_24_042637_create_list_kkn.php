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
        Schema::create('list_kkn', function (Blueprint $table) {
            $table->id();
            $table->string('universitas');
            $table->string('angkatan');
            $table->string('tahun');
            $table->string('nama');
            $table->string('dpl');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_kkn');
    }
};
