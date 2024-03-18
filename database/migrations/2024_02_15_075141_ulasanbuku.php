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
        Schema::create('ulasanbuku',function(Blueprint $table){
            $table->integer('UlasanID');
            $table->integer('UserID');
            $table->integer('BukuID');
            $table->text('Ulasan');
            $table->integer('Rating');
            $table->timestamps();
            $table->primary('UlasanID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('ulasanbuku');
    }
};
