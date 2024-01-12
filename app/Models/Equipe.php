<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_membre',
        'poste_membre',
        'diplome_membre',
        'title1',
        'title2',
        'title3',
        'images1',
        'images2',
    ];
}
