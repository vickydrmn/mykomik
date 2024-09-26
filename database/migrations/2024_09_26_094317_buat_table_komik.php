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
        Schema::create('komik', function (Blueprint $table) {
            $table->id();
            $table->integer('no');
            $table->string('nama');
            $table->string('genre');
            $table->string('tanggal_update');
            $table->string('tanggal_rilis');
            $table->string('autor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komik');
    }
};
