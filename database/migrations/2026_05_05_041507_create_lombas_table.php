<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lombas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nama');
            $table->string('kategori');
            $table->text('deskripsi')->nullable();
            $table->string('poster')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->date('deadline')->nullable();
            $table->date('tanggal_pengumuman')->nullable();
            $table->string('juara_1')->nullable();
            $table->string('juara_2')->nullable();
            $table->string('juara_3')->nullable();
            $table->string('total_hadiah')->nullable();
            $table->decimal('biaya', 15, 2)->default(0);
            $table->text('ketentuan')->nullable();
            $table->enum('status', ['draft', 'publish', 'selesai'])->default('draft');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lombas');
    }
};