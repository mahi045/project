@extends('layouts.app')
@section('content')
<div class="container">

	<div class="row">
	<div class="col-md-11 col-md-off">

		<div class="span5">
            <table class="table table-striped table-condensed">
              <thead>
              		{!! Form::open( ['route'=>'course.index','method'=>'GET','class'=>'class_name'] ) !!}
              		{!! Form::text('name') !!}
              	  
                  {!! Form::text('location') !!}
                  {!! Form::submit() !!}
                  
              		{!! Form::close() !!}
                  <tr>
                      <b><th>Hotel Name</th></b>
                      <b><th>Location</th></b>
                      
                      <b><th>Action</th></b>                                          
                  </tr>
              </thead>   
              <tbody>
              	@foreach($alldata as $data)
	                <tr>
	                    <td><strong>{{$data->Name}}</strong></td>
	                    <td>{{$data->Location}}</td>
	                    <td>
	                       <a href="{{route('course.show',$data->Hotel_id)}}" class="btn btn-info">Details</a> 
	                    </td>                                      
	                </tr>
                @endforeach
                                                   
              </tbody>
            </table>
            <div align="center">{!!$alldata->render()!!}</div>
    </div>
	</div>
</div>
</div>
@endsection