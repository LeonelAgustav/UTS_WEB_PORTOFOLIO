<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id('project_id')->autoIncrement(); // Primary key dengan nama project_id
            $table->string('project_name'); // Nama proyek
            $table->text('deskripsi'); // Deskripsi proyek
            $table->string('bahasa'); // Bahasa pemrograman yang digunakan
            $table->string('url'); // URL proyek
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
