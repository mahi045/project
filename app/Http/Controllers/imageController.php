<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\image_insert;
use database\migration;
class imageController extends Controller
{
	public function create()
	{
		return view('image.upload');
	}
    public function store(Request $request)
    {
        
        
        $validaton = Validator::make($request->all(),array(
            'ImageFile' => 'required-mimes:jpg,jpeg|max:100'
            ));

        $logo = $request->file('ImageFile');
        $upload = 'uploads/logo';
        $filename = $logo->getClientOriginalName();
        $success = $logo->move($upload, $filename);


    	
        
        $table = new image_insert;
        
        $table->ImageFile = $filename;
        $table->save();
        $user = Auth::user();
        $index = DB::table('hotel_name') -> Where( 'email' , $user->email ) -> pluck('Hotel_id');
        $pass = DB::table('image')->max('ImageId');
        $index = implode(" ", $index);
        DB::table('image') -> where('ImageId',$pass) -> update(['NID' => $index]);
        
        return view('image.upload');
    } 
    public function index()
    {
        return view('image.upload');
    }
    public function edit($id)
    {
        $alldata=image_insert::orderBy('ImageId');
        $alldata->Where('NID','=',$id);
        
        $alldata=$alldata->paginate(1);
        return view('image.index',compact('alldata'));
    }

}
