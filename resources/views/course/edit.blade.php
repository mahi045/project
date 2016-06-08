@extends('layouts.app')
@section('content')
<div class="container"> 
<div class="col-sm-9">
            
           	{!! Form::open(array('route' => ['course.update', $course->Hotel_id] ,'class'=>'form-horizental','method'=>'PUT')) !!}
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group">
                       {!! Form::label('Hotel_Name', 'Hotel name', $attributes = array('class'=>'col-sm-3 control-label')); !!}
                        <div class="col-sm-9">
                            <input class="form-control" id="concept" name="name" type="text" value="{{$course->Name}}">
                        </div>
                    </div>
                    <div class="form-group">
                         {!! Form::label('Location', 'location', $attributes = array('class'=>'col-sm-3 control-label')); !!}
                        <div class="col-sm-9">
                            <input class="form-control" id="concept" name="Location" type="text" value="{{$course->Location}}">
                        </div>
                    </div> 
                    <div class="form-group">
                        {!! Form::label('facility', 'Facility', $attributes = array('class'=>'col-sm-3 control-label')); !!}
                        <div class="col-sm-9">
                           {{ Form::textarea('facility', ' $course->Facility ' )}}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('Policy', 'Policy', $attributes = array('class'=>'col-sm-3 control-label')); !!}
                        <div class="col-sm-9">
                           {{ Form::textarea('Policy', ' $course->Policy ' )}}
                        </div>
                    </div>
                </div>
                
            </div>
            {{ Form::submit("NEXT") }}
            {!! Form::close() !!}    
</div>        
        
</div>

@endsection