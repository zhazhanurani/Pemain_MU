<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'pemain_database';

    // Menambahkan fillable attributes
    protected $fillable = [
       'nama_pemain', 
       'no_punggung', 
       'posisi', 
   ];

}
