<?php

namespace App\Models;

use App\Models\Projet;
use App\Models\Contribution;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contributeur extends Model
{
    use HasFactory;


    public function projets()
    {
        return $this->belongsToMany(Projet::class, "contributeur_projet", "contributeur_id", "projet_id");
    }
    public function contributions()
    {
        return $this->belongsToMany(Contribution::class, "contributeur_contribution", "contributeur_id", "contribution_id");
    }
}
