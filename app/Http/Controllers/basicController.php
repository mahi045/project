<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class basicController extends Controller
{
    public function index()
    {
    	//return view('home');
    	return "This is home page";
	}
	public function about()
    {
    	return view('about');
    	//return "This is home page";

    }
}
