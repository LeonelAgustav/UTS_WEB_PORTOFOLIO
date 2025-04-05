<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id('certi_id')->autoIncrement(); // Primary key dengan nama certi_id
            $table->string('image'); // Path atau nama file gambar
            $table->string('certi_name'); // Nama sertifikat
            $table->string('publisher'); // Penerbit sertifikat
            $table->string('month'); // Bulan penerbitan
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
