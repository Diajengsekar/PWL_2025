<?php

use Illuminate\Database\Migrations\Migration; // Mengimpor kelas Migration untuk membuat migrasi database
use Illuminate\Database\Schema\Blueprint; // Mengimpor Blueprint untuk mendefinisikan struktur tabel
use Illuminate\Support\Facades\Schema; // Mengimpor Schema untuk operasi terhadap database

return new class extends Migration // Membuat kelas migrasi anonim
{
    /**
     * Run the migrations.
     */
    public function up(): void // Method ini akan dijalankan saat migrasi dieksekusi
    {
        Schema::create('items', function (Blueprint $table) { // Membuat tabel "items" di database
            $table->id(); // Membuat kolom id sebagai primary key dengan tipe data BIGINT dan auto-increment
            $table->string('name'); // Membuat kolom "name" dengan tipe data VARCHAR
            $table->text('description'); // Membuat kolom "description" dengan tipe data TEXT
            $table->timestamps(); // Membuat kolom "created_at" dan "updated_at" secara otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void // Method ini dijalankan saat rollback migrasi
    {
        Schema::dropIfExists('items'); // Menghapus tabel "items" jika ada
    }
};
