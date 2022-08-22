<?php

namespace App\Http\Controllers;

use App\Breed;
use App\Type;
use Illuminate\Http\Request;

class BreedController extends Controller
{
    public function index()
    {

        $types = Type::all();
        $breeds = Breed::all();

        return view('breeds.index', compact(['types', 'breeds']));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'breed' => 'required|unique:breeds',
            'type' => 'required|unique:breeds',
        ]);

        Breed::firstOrCreate($validated);

        session()->flash('success', 'New pet breed has been added.');
        return back();
    }

    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'type' => 'required',
            'breed' => 'required|unique:types,breed,' . $id,
        ]);

        $type = Type::findOrFail($id);
        $type->update($validated);

        if ($type->getChanges()) {
            session()->flash('success', 'Pet type info has been updated.');
            return back();
        }

        session()->flash('success', 'Nothing has changed.');
        return back();
    }

    public function delete($id)
    {
        $type = Type::findOrFail($id);
        $type->delete();

        session()->flash('success', 'Pet type record has been deleted.');
        return back();
    }
}
