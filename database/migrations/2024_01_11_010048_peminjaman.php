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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->integer('PeminjamanID')->primary();
            $table->foreignUuid('UserID');
            $table->foreign('UserID')->references('UserID')->on('users');
            $table->foreignUuid('BukuID');
            $table->foreign('BukuID')->references('BukuID')->on('buku');
            $table->date('TanggalPeminjaman');
            $table->date('TanggalPengembalian')->nullable();
            $table->string('StatusPinjaman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
