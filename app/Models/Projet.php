<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    public function contributeurs()
    {
        return $this->belongsToMany(User::class, "contributeur_projet", "projet_id", "contributeur_id");
    }
}
