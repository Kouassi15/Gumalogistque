<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apropos extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_1',
        'title_2',
        'title_3',
        'images_1',
        'images_2',
        'images_2',
        'description',
        'activites',
        
    ];
}
