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
        Schema::create('skripsis', function (Blueprint $table) {
            $table->id();
            $table->string('nim_mhs',10);
            $table->string('nama_mhs',50);
            $table->string('kelas',20);
            $table->string('judul',100);
            $table->string('tahun',4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skripsis');
    }
};
