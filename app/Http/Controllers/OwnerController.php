<?php

namespace App\Http\Controllers;

use App\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Str as IlluminateStr;
use Psy\Util\Str;

class OwnerController extends Controller
{
    public function index()
    {

        $owners = Owner::all();
        $ownerID  = Owner::getID();

        return view('owners.index', compact(['owners', 'ownerID']));
    }

    public function store(Request $request)
    {

        $data = [
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'mobile_number' => $request->mobile_number,
            'email' => $request->email,
            'is_active' => $request->is_active,
        ];

        $owner = Owner::firstOrCreate($data);

        return redirect(route('owners.index'));
    }
    // public function update(Request $request, $id)
    // {

    //     $data = [
    //         'name' => $request->name,
    //         'address' => $request->address,
    //         'city' => $request->city,
    //         'zip_code' => $request->zip_code,
    //         'mobile_number' => $request->mobile_number,
    //         'email' => $request->email,
    //         'is_active' => $request->is_active,
    //     ];

    //     $user->update(['name' => request('name')]);

    //     session()->flash('success', 'Action plan updated');
    //     return back();
    // }
}
