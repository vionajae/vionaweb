<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koleksipribadi extends Model
{
    use HasFactory;

    //set tabel
    protected $table = "koleksipribadi";
    //set primary key
    protected $primaryKey = "KoleksiID";
    //set auto increment
    public $incrementing = false;

    //set tipe data primary key
    protected $keyType = 'integer';

    //setting kolom yang dapat diisi
    protected $guarded = [];
}
