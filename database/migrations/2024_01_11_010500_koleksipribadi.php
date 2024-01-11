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
        Schema::create('koleksipribadi', function (Blueprint $table) {
            $table->uuid('KoleksiID')->primary();
            $table->foreignUuid('UserID');
            $table->foreign('UserID')->references('UserID')->on('users');
            $table->foreignUuid('BukuID');
            $table->foreign('BukuID')->references('BukuID')->on('buku');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('koleksipribadi');
    }
};
