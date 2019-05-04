<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cart;

class CartController extends Controller
{
    
	public function viewcart() {

		$product = new \App\cart;
    	$products = $product::all();

    	return view('cart',compact('products'));

	}

	public function delete($id) {

		cart::where('id',$id)->delete();

		return redirect('/cartitems');

	}
	

}
