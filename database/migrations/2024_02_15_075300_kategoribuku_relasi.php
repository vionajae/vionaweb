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
        Schema::create('kategoribuku_relasi',function(Blueprint $table){
            $table->integer('KategoriBukuID');
            $table->integer('BukuID');
            $table->integer('KategoriID');
            $table->timestamps();
            $table->primary('KategoriBukuID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('kategoribuku_relasi');
    }
};
