<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    //set tabel
    protected $table = "buku";
    //set primary key
    protected $primaryKey = "BukuID";
    //set auto increment
    public $incrementing = false;

    //set tipe data primary key
    protected $keyType = 'integer';

    //setting kolom yang dapat diisi
    protected $guarded = [];
}
