<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasanbuku extends Model
{
    use HasFactory;

    //set tabel
    protected $table = "ulasan";
    //set primary key
    protected $primaryKey = "UlasanID";
    //set auto increment
    public $incrementing = false;

    //set tipe data primary key
    protected $keyType = 'integer';

    //setting kolom yang dapat diisi
    protected $guarded = [];
}
