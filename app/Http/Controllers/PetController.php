<?php

namespace App\Http\Controllers;

use App\Owner;
use App\Pet;
use App\Type;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {

        $pets = Pet::select('pets.*', 'breeds.*', 'types.*', 'owners.name  as owner_name')
            ->join('breeds', 'breeds.id', 'pets.breed_id')
            ->join('types', 'types.id', 'breeds.type_id')
            ->join('owners', 'owners.id', 'pets.owner_id')
            ->get();

        return view('pets.index', compact(['pets']));
    }

    public function create()
    {

        $petID  = Pet::setID();
        $types = Type::select('type')->groupBy('type')->get();

        return view('pets.create', compact(['petID', 'types']));
    }

    public function store(Request $request)
    {
        // Pet::firstOrCreate($request->validated());
        // session()->flash('success', 'New pet has been added.');
        // return back();

        dd($request->all());
    }

    public function delete($id)
    {
        $pet = Pet::findOrFail($id);
        $pet->delete();

        session()->flash('success', 'Pet record has been deleted.');
        return back();
    }
}
