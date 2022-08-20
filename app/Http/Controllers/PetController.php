<?php

namespace App\Http\Controllers;

use App\Owner;
use App\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {

        $pets = Pet::select('pets.*', 'types.*', 'owners.name  as owner_name')
            ->join('types', 'types.id', 'pets.type_id')
            ->join('owners', 'owners.id', 'pets.owner_id')
            ->get();

        // $query = ActionPlan::select('action_plans.*')
        //     ->join('feedback_sources', 'action_plans.feedback_source_id', 'feedback_sources.id');

        // dd($pets);
        return view('pets.index', compact(['pets']));
    }



    public function delete($id)
    {
        $pet = Pet::findOrFail($id);
        $pet->delete();

        session()->flash('success', 'Pet record has been deleted.');
        return back();
    }
}
