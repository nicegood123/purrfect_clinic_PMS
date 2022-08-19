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
        $ownerID  = Owner::getID();

        return view('owners.index', compact(['owners', 'ownerID']));
    }

    public function store(OwnerRequest $request)
    {

        Owner::firstOrCreate($request->validated());

        session()->flash('success', 'New pet owner has been added.');
        return back();
    }
    public function update(Request $request, $id)
    {

        $owner = Owner::find($id);

        if (!$owner) {
            session()->flash('error', 'Owner not found.');
            return back();
        }

        $data = [
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'mobile_number' => $request->mobile_number,
            'email' => $request->email,
            'is_active' => $request->is_active == 1 ? 1 : 0,
        ];

        $owner->update($data);


        session()->flash('success', 'Action plan updated');
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

        session()->flash('success', 'Deleted.');
        return back();
    }
}
