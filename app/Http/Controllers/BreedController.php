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
        $breeds = Breed::select('breeds.*', 'types.*')
            ->join('types', 'types.id', 'breeds.type_id')
            ->get();

        return view('breeds.index', compact(['types', 'breeds']));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'breed' => 'required|unique:breeds',
            'description' => 'required',
            'type_id' => 'required|unique:breeds',
        ]);

        Breed::firstOrCreate($validated);

        session()->flash('success', 'New pet breed has been added.');
        return back();
    }

    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'breed' => 'required|unique:breeds,breed,' . $id,
            'description' => 'required',
            'type_id' => 'required',
        ]);

        $breed = Breed::findOrFail($id);
        $breed->update($validated);

        if ($breed->getChanges()) {
            session()->flash('success', 'Pet breed info has been updated.');
            return back();
        }

        session()->flash('success', 'Nothing has changed.');
        return back();
    }

    public function delete($id)
    {
        $breed = Breed::findOrFail($id);
        $breed->delete();

        session()->flash('success', 'Pet breed record has been deleted.');
        return back();
    }
}
