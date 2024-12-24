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

    public function update(Request $request) {
        $data = $request->validate([
            'name' => 'required',  
            'size' => 'required|numeric',
            'description' => 'nullable' 
        ]);

        $newHousehold = HouseHold::create($data);

        return redirect(route('household.update'));
    }
}
