<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {

        $owners = Owner::all();
        $ownerID  = Owner::setID();

        return view('pets.index', compact(['owners', 'ownerID']));
    }
}
