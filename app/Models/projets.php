<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projets extends Model
{
    use HasFactory;
    protected $fillable = ['nom_projet', 'porteur_projet'];
}
