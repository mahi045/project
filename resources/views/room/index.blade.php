@extends('layouts.app')
@section('content')
<div class="container">

	<div class="row">
	<div class="col-md-9 col-md-off">
  <h1>Description Of Rooms</h1>
		<div class="span5">
            <table class="table table-striped table-condensed">
              <thead>
              		{!! Form::open( ['route'=>'course.index','method'=>'GET','class'=>'class_name'] ) !!}
              		
              		{!! Form::close() !!}
                  <tr>
                      <th>Room Name</th>
                      <th>Price</th>
                      <th>Capacity</th>
                      <th>Availability</th>
                      
                      
                                                               
                  </tr>
              </thead>   
              <tbody>
              	@foreach($alldata as $data)
	                <tr>
	                    <td>{{$data->Room_Name}}</td>
	                    <td>{{$data->Price}}</td>
                      <td>{{$data->Capacity}}</td>
                      <td>{{$data->Available}}</td>
	                                                          
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