<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

     //set tabel
     protected $table = "admin";
     //set primary key
     protected $primaryKey = "AdminID";
     //set auto increment
     public $incrementing = false;
 
     //set tipe data primary key
     protected $keyType = 'integer';
 
     //setting kolom yang dapat diisi
     protected $guarded = [];
}
