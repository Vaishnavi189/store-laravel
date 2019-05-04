<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HouseController extends Controller
{
    
	public function place() {

    	return view('placeorder');

    }

    public function store(Request $request) {


    	$request->validate([

    		'address' => 'required',
    		'mobile' => 'required|numeric'

    	]);

		$house = new \App\house;

		$house->address = request('address');
		$house->mobile = request('mobile');

		$house->save();

		return redirect('myorders');


	}

}
