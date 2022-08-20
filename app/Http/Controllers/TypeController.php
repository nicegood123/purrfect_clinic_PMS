<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {

        $types = Type::all();

        return view('types.index', compact('types'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required',
            'breed' => 'required|unique:types',
        ]);

        Type::firstOrCreate($validated);

        session()->flash('success', 'New pet type has been added.');
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
