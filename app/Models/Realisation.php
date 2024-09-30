<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'lien_realisation',
        'date_debut',
        'date_fin',
    ];

}
