<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\cart;

class ProductsController extends Controller
{

    public function index() {

	    $product = new \App\product;
    	$products = $product::all();

    	return view('admin',compact('products'));

    }

    public function display() {

	    $product = new \App\product;
    	$products = $product::all();

    	return view('display',compact('products'));

    }

    public function addItem() {

    	return view('addItem');

    }

    public function store(Request $request) {

    	$request->validate([

    		'name' => 'required',
    		'description' => 'required|max:255',
    		'price' => 'required|numeric',
    		'image' => 'required'

    	]);

		$product = new \App\product;

		$product->name = request('name');
		$product->description = request('description');
		$product->price = request('price');

		if($request->hasfile('image')) {

			$file = $request->file('image');
			$extension = $file->getClientOriginalExtension();
			$filename = time().'.'.$extension;
			$file->move('images/',$filename);
			$product->image = $filename;

		}
		else {

			return view('addItem');
			$product->image = '';

		}

		$product->save();

		return view('addItem');


	}

	public function edit($id) {

		$product = product::find($id);

		return view('update',compact('product'));

	}

	public function update(Request $request,$id) {

		$request->validate([

    		'name' => 'required',
    		'description' => 'required|max:255',
    		'price' => 'required|numeric',
    		'image' => 'required'

    	]);

		$product = product::find($id);

		$product->name = request('name');
		$product->description = request('description');
		$product->price = request('price');

		if($request->hasfile('image')) {

			$file = $request->file('image');
			$extension = $file->getClientOriginalExtension();
			$filename = time().'.'.$extension;
			$file->move('images/',$filename);
			$product->image = $filename;

		}

		$product->save();

		return redirect('/addItem');
	}

	public function delete($id) {

		product::where('id',$id)->delete();

		return redirect('/admin');

	}

	public function addtocart($id) {

		$product = product::find($id);

		$item = new \App\cart;

		$item->name = $product->name;
		$item->description = $product->description;
		$item->price = $product->price;
		$item->image = $product->image;
		
		$item->save();

		return redirect('display');


	}

	public function orders() {

		$product = new \App\cart;
    	$products = $product::all();

    	$address = new \App\house;
    	$persons = $address::all();

    	return view('myorders',compact('products','persons'));

	}

}
