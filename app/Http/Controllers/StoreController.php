<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Store;

class StoreController extends Controller
{
    //

    public function getRegisterStore(){

    	return view('registerStore');

    }
    public function postRegisterStore(Request $request){
    	$store = $request->all();

    	Store::create($store);

    	return url('/');

    }
}
