@extends('layouts.app')
@section('content')
<div class="container">

	<div class="row">
	<div class="col-md-6 col-md-off">
  <h1>Reviews Of The Hotel</h1>
		<div class="span5">
            
              		{!! Form::open( ['route'=>'course.index','method'=>'GET','class'=>'class_name'] ) !!}
              		
              		{!! Form::close() !!}
                  
              
              	@foreach($alldata as $data)
	                
                      <h4>Hotel Name : </h4>
	                    <b>{{$data->Hotel_Name}}</b><br>
                      <h4>User Name : </h4>
                      <b>{{$data->User_Name}}</b><br>
                      <h4>Comment : </h4>
                      <b>{{$data->Comment}}</b><br>
                      <h4>Date : </h4>
                      <b>{{$data->created_at}}</b><br>
	                                                          
	                
                @endforeach
                                                   
              
            {!!$alldata->render()!!} 
    </div>
	</div>
</div>
</div>
@endsection