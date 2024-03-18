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
        Schema::create('admin',function(Blueprint $table){
            $table->integer('AdminID');
            $table->string('Username',255);
            $table->string('Password',255);
            $table->string('Email',255);
            $table->string('NamaLengkap',255);
            $table->text('Alamat');
            $table->timestamps();
            $table->primary('AdminID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('admin');
    }
};
