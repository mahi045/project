@extends('layouts.app')
@section('content')
<div class="container">
	
	{!! Form::open(['route' => 'room.store']) !!}
            <h1>Fill The Room information</h1>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                   
                    
                    <div class="form-group">

                       {!! Form::label('Room Name', 'Room Name', $attributes = array('class'=>'col-sm-3 control-label')); !!}
                        <div class="col-sm-9">
                            <input class="form-control" id="concept" name="Room_Name" type="text">
                        </div>
                    </div>
                    <div class="form-group">

                       {!! Form::label('Price', 'Price', $attributes = array('class'=>'col-sm-3 control-label')); !!}
                        <div class="col-sm-9">
                            <input class="form-control" id="concept" name="Price" type="text">
                        </div>
                    </div>
                    <div class="form-group">

                       {!! Form::label('Capacity', 'Capacity', $attributes = array('class'=>'col-sm-3 control-label')); !!}
                        <div class="col-sm-9">
                            <input class="form-control" id="concept" name="Capacity" type="text">
                        </div>
                    </div>
                    <div class="form-group">

                       {!! Form::label('Image', 'Availabilty', $attributes = array('class'=>'col-sm-3 control-label')); !!}
                        <div class="col-sm-9">
                            <input class="form-control" id="concept" name="Available" type="text">
                        </div>
                    </div>
                </div>
                
            </div>
            {{ Form::submit("UPLOAD THE ROOM") }}
            <a href="{{route('course.index')}}" class="btn btn-info">FINISH</a> 
    {!! Form::close() !!}
</div>
@endsection
	