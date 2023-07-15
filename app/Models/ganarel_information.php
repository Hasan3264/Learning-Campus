<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ganarel_information extends Model
{
    use HasFactory;
    protected $fillable = [
        'banner',
        'favicon',
        'logo',
        // Add more attributes as needed
    ];
}
