<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('nama_asset');
            $table->string('tipe_asset');
            $table->text('description_singkat');
            $table->text('description_asset');
            $table->string('gambar_asset');
            $table->string('gambar_asset2')->nullable();
            $table->string('gambar_asset3')->nullable();
            $table->string('gambar_asset4')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
