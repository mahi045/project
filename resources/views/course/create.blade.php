@extends('layouts.app')
@section('content')
<div class="container"> 
<div class="col-sm-9">
 <h1>Give Basic Information</h1>         
            {!! Form::open(['route' => 'course.store']) !!}
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group">
                       {!! Form::label('Hotel_Name', 'Hotel name', $attributes = array('class'=>'col-sm-3 control-label')); !!}
                        <div class="col-sm-9">
                            <input class="form-control" id="concept" name="name" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                         {!! Form::label('Location', 'location', $attributes = array('class'=>'col-sm-3 control-label')); !!}
                        <div class="col-sm-9">
                            <input class="form-control" id="concept" name="Location" type="text">
                        </div>
                    </div> 
                    <div class="form-group">
                        {!! Form::label('facility', 'Facility', $attributes = array('class'=>'col-sm-3 control-label')); !!}
                        <div class="col-sm-9">
                           {{ Form::textarea('facility', ' Write Facilities ' )}}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('Policy', 'Policy', $attributes = array('class'=>'col-sm-3 control-label')); !!}
                        <div class="col-sm-9">
                           {{ Form::textarea('Policy', ' Write Policies ' )}}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('Contact Number', 'Contact Number', $attributes = array('class'=>'col-sm-3 control-label')); !!}
                        <div class="col-sm-9">
                           {{ Form::textarea('contact', ' Contact number ' )}}
                        </div>
                    </div>
                </div>
                
            </div>
            {{ Form::submit("NEXT") }}
            {!! Form::close() !!}    
</div>        
        
</div>


@endsection