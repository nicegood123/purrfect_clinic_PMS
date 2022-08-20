<?php

namespace App\Http\Controllers;

use App\Http\Requests\OwnerRequest;
use App\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {

        $owners = Owner::all();
        $ownerID  = Owner::setID();

        return view('owners.index', compact(['owners', 'ownerID']));
    }

    public function store(OwnerRequest $request)
    {
        Owner::firstOrCreate($request->validated());

        session()->flash('success', 'New pet owner has been added.');
        return back();
    }

    public function edit($id)
    {

        $owner = Owner::findOrFail($id);

        return view('owners.edit', compact('owner'));
    }

    public function update(OwnerRequest $request, $id)
    {

        $owner = Owner::find($id);
        $owner->update($request->validated());

        if ($owner->getChanges()) {
            session()->flash('success', 'Pet owner info has been updated.');
            return back();
        }

        session()->flash('success', 'Nothing has change.');
        return back();
    }

    public function delete($id)
    {
        $owner = Owner::find($id);

        if (!$owner) {
            session()->flash('error', 'Owner not found.');
            return back();
        }

        $owner->delete();

        session()->flash('success', 'Pet owner info has been deleted.');
        return back();
    }
}
