<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role==0){ //Super Admin (Us)
            
        }
        else if(Auth::user()->role==1){ //Admin (Store Administrator)
            
        }
        else if(Auth::user()->role==2){ //Store Employee
            
        }
        return view('layouts.dashboard');
    }
}
