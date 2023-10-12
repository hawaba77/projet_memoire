<?php

namespace App\Models;

use App\Models\Contributeur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contribution extends Model
{
    use HasFactory;

    public function contributeurs()
    {
        return $this->belongsToMany(Contributeur::class, "contributeur_contribution", "contribution_id", "contributeur_id");
    }
}
