<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'description',
        'organisateur_id',
        'categorie_id',
        'localisation_id',
        
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
