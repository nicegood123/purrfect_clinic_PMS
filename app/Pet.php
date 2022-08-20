<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = [
        'id',
        'name',
        'type',
        'birthdate',
        'gender',
        'notes',
        'breed_id',
        'owner_id',
        'is_active',
    ];
}
