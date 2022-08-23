<?php

namespace App\Http\Controllers;

use App\Breed;
use App\Http\Requests\PetRequest;
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
        $breeds = Breed::all();
        $owners = Owner::all();

        return view('pets.create', compact(['petID', 'breeds', 'owners']));
    }

    public function store(PetRequest $request)
    {

        $data = [
            'name' => $request->name,
            'gender' => $request->gender,
            'notes' => $request->notes,
            'breed_id' => $request->breed_id,
            'owner_id' => $request->owner_id,
            'is_active' => $request->is_active,
        ];

        $isFound = Pet::where($data)->exists();

        if ($isFound) {
            session()->flash('error', 'Pet info already exists in the database.');
            return back();
        }

        Pet::firstOrCreate($request->validated());
        session()->flash('success', 'New pet has been added.');
        return back();

    }

    public function edit($id)
    {

        $pet = Pet::findOrFail($id);
        $breeds = Breed::all();
        $owners = Owner::all();

        return view('pets.edit', compact(['pet', 'breeds', 'owners']));
    }

    public function update(PetRequest $request, $id)
    {

        $owner = Pet::find($id);
        $owner->update($request->validated());

        if ($owner->getChanges()) {
            session()->flash('success', 'Pet owner info has been updated.');
            return back();
        }

        session()->flash('success', 'Nothing has changed.');
        return back();
    }

    public function delete($id)
    {
        $pet = Pet::findOrFail($id);
        $pet->delete();

        session()->flash('success', 'Pet record has been deleted.');
        return back();
    }
}
