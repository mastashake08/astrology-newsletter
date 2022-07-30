<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horoscope extends Model
{
    use HasFactory;
    protected $fillable = [
      'data',
      'zodiac_sign'
    ];
    protected $casts = [
        'data' => 'array',
    ];
}
