<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',

    ];



    public function evenement()
    {
        return $this->HasMany(evenement::class);
    }


}
