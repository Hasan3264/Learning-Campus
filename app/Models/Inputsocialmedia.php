<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inputsocialmedia extends Model
{
    use HasFactory;
     protected $fillable = [
         'title',
              'url',
              'icon',
              'status',
    ];

}
