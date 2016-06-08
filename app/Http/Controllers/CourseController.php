<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Course;
use database\migration;
use Auth;
use App\Http\Controllers\Controller;
use resources\views\image;

class CourseController extends Controller
{
    public function create()
    {
        
        $user=Auth::user();
    	$a = DB::table('hotel_name')->Where('email' , '=' , $user->email )->count();
        
        if ( $a > 0 ) return redirect('image');
        else 
        {
            
            $a = DB::table('hotel_name')->Where('email' , $user->email )->pluck('Hotel_id');
            $course=Course::findOrFail($a);
            return view('course.create', compact('course'));
            //return $course;
        }

    }
    public function store(Request $request)
    {
        
    	$input = $request->all();
        
        $pass=$request->input('name');
        $user=Auth::user();
        $a = DB::table('hotel_name')->Where('email' , '=' , $user->email )->count();
        if ( $a == 0 )
        {
            Course::create($input);
            $pass = DB::table('hotel_name')->max('hotel_id');
            DB::table('hotel_name') -> where('Hotel_id',$pass) -> update(['email' => $user->email]);
            //$id=DB::table('temp') -> insertGetId(['tem'=> $pass]);
        }
        else
        {
            $pass = DB::table('hotel_name') -> Where( 'email' , $user->email ) -> pluck('Hotel_id');
            
            $id=DB::table('temp') -> insertGetId(['tem'=> $pass]);
        }
        
        
        return redirect('image');
        
    }
    public function index(Request $request)
    {
        
        $alldata=Course::orderBy('name');
        $hotelname=$request->input('name');
        $hotellocaton=$request->input('location');
        if (!empty($hotelname))
        {
            $alldata->Where('Name','LIKE','%'.$hotelname.'%');
        }
        if (!empty($hotellocaton))
        {
            $alldata->Where('Location','LIKE','%'.$hotellocaton.'%');
        }
        $alldata=$alldata->paginate(5);
        return view('course.index',compact('alldata'));
    }
    public function edit($id)
    {
    	$course=Course::findOrFail($id);
    	return view('course.edit',compact('course'));
    }
    public function update(Request $request,$id)
    {
    	$input = $request->all();
    	$data = Course::findOrFail($id);
        $user = Auth::user();
        $a = DB::table('hotel_name')->Where('email' , $user->email )->pluck('hotel_id');
    	$data->update($input);
    	return redirect('image');

    }
    public function destroy($id)
    {
    	
    	$data = Course::findOrFail($id);
    	$data->delete();
    	return redirect('course');

    }
    public function show($id)
    {
        $course=Course::findOrFail($id);
        return view('course.show',compact('course'));
    }
}
