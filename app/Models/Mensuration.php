<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensuration extends Model
{
    use HasFactory;

    protected $fillable = [
        'taille_haut',
        'taille_bas',
        'pointure',
        'taille_cm',
    ];

}
