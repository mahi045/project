<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\feedback;
class feedbackController extends Controller
{
    public function index(Request $request)
    {
    	
    	return view('feedback.upload');
    }
    public function store(Request $request)
    {
    	
    	$input = $request->all();
    	feedback::create($input);
		return redirect('course');
    }
    public function edit($id)
    {

    	$alldata=feedback::orderBy('Hotel_Name');
        $alldata->Where('Hotel_Name','=', $id);
        $alldata=$alldata->paginate(5);
        
        return view('feedback.index',compact('alldata'));
        
    }

}
