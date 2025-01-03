<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HouseHold;

class HouseHoldController extends Controller
{
    public function index() {
        $households = HouseHold::all();
        return view('household.index', ['households' => $households]);
    }

    public function create() {
        return view('household.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',  
            'size' => 'required|numeric',
            'description' => 'nullable' 
        ]);

        $newHousehold = HouseHold::create($data);

        return redirect(route('household.store'));
    }

    public function edit(HouseHold $household) {
        return view('household.edit', ['household'=> $household]);
    }

    public function update(HouseHold $household, Request $request) {
        $data = $request->validate([
            'name'=> 'required',
            'size'=> 'required|numeric',
            'description'=> 'nullable'
        ]);
        $household ->update($data);
        return redirect(route('household.index'))->with('success','Household succesfully updated!');
    }

    public function delete(HouseHold $household, Request $request) {
        HouseHold::destroy($household->id);
        return redirect(route('household.index'));
    }
}
