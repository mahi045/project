@extends('layouts.app')
@section('content')
<div class="container">
	
	{!! Form::open(['route' => 'feedback.store']) !!}
            <h1>Fill The Room information</h1>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                   
                    <div class="form-group">

                       {!! Form::label('Hotel Name', 'Hotel Name', $attributes = array('class'=>'col-sm-3 control-label')); !!}
                        <div class="col-sm-9">
                            <input class="form-control" id="concept" name="Hotel_Name" type="text">
                        </div>
                    </div>
                    <div class="form-group">

                       {!! Form::label('Your Name', 'Your Name', $attributes = array('class'=>'col-sm-3 control-label')); !!}
                        <div class="col-sm-9">
                            <input class="form-control" id="concept" name="User_Name" type="text">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('Write Comment', 'Write Comment', $attributes = array('class'=>'col-sm-3 control-label')); !!}
                        <div class="col-sm-9">
                           {{ Form::textarea('Comment', ' Write Comment ' )}}
                        </div>
                    </div>
                </div>
                
            </div>
            {{ Form::submit("UPLOAD THE COMMENT") }}
            <a href="{{route('course.index')}}" class="btn btn-info">FINISH</a> 
    {!! Form::close() !!}
</div>
@endsection
	