<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Http\Requests;
use App\roominfo;
use database\migration;
class roomController extends Controller
{
    public function create()
	{
		return view('room.upload');
	}
	public function store(Request $request)
    {
    	$input = $request->all();

    	
 
 		roominfo::create($input);

        
        $user = Auth::user();
        $index = DB::table('hotel_name') -> Where( 'email' , $user->email ) -> pluck('Hotel_id');
        $index = implode(" ", $index);
 		$pass = DB::table('roominfo')->max('Room_id');
        
        DB::table('roominfo') -> where('Room_id',$pass) -> update( ['Hotel_id' => $index] );
        return view('room.upload');
    } 
    public function index()
    {
    	return view('room.upload');
    }
    public function edit($id)
    {
        $alldata=roominfo::orderBy('Hotel_id');
        $alldata->Where('Hotel_id','=', $id);
        $alldata=$alldata->paginate(5);
        return view('room.index',compact('alldata'));
    }
}
