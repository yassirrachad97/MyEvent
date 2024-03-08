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
        'date',
        'image',
        'organisateur_id',
        'categories_id',
        'localisation_id',

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function localisation(){
        return $this->belongsTo(Localisation::class);
    }
}
