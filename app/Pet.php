<?php

namespace App;

use DB;
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

    // protected $casts = [
    //     'created_at' => 'datetime:d-m-Y',
    // ];

    protected $dateFormat = 'Y-m-d';


    public static function setID()
    {
        $query  = DB::select("SHOW TABLE STATUS LIKE 'pets'");
        $petID = $query[0]->Auto_increment;

        return $petID;
    }

    public static function getID($id)
    {
        return Pet::find($id);
    }
}
