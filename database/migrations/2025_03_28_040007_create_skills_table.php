<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id('skill_id')->autoIncrement(); // Primary key dengan nama skill_id
            $table->string('skill_name'); // Nama skill
            $table->string('level'); // Persentase skill
            $table->string('type'); // Path atau nama file gambar
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
