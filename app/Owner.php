<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = [
        'id',
        'name',
        'address',
        'city',
        'zip_code',
        'mobile_number',
        'email',
        'is_active',
    ];

    public static function setID()
    {
        $query  = DB::select("SHOW TABLE STATUS LIKE 'owners'");
        $ownerID = $query[0]->Auto_increment;
      
        return $ownerID;
    }

    public static function getID($id)
    {
        return Owner::find($id);
    }
}
