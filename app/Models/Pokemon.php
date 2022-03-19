<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    //I'm not going to use created_at and updated_at on my table, so I'll disable timestamps.
    public $timestamps = false;

    protected $table = 'pokemons';
    protected $primaryKey = 'id';

    //these are the fields can be updated by the application in our Pokémon table.
    protected $fillable = [
        'identifier',
        'species_id',
        'height',
        'weight',
        'base_experience',
        'order',
        'is_default'
    ];
}
