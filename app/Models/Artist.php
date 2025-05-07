<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'id',
        'Nickname',
        'Categorie',
        'city',
        'Profil_img',
        'desc_img',
        'Adresse',
        'about',
        'Service_desc',
        'prix',
    ];
}
