<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RessourceMatiere extends Model
{
    use HasFactory;

    protected $fillable =  ['matiere_id', 'url', 'description', 'document'];
}
