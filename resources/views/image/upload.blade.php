@extends('layouts.app')
@section('content')
<div class="container">
	 <h1>Upload The Photo</h1>
	{!! Form::open(['route' => 'image.store' , 'files' => true]) !!}
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    
                    <div class="form-group">

                        {!! Form::label('Image', 'Image URL', $attributes = array('class'=>'col-sm-3 control-label')); !!}
                        <input type="file" name="ImageFile">
                            
                        </input>
                    </div>
                </div>
                
            </div>
            {{ Form::submit("UPLOAD THE IMAGE") }}
            <a href="{{route('room.index')}}" class="btn btn-info">GO NEXT STEP</a> 
    {!! Form::close() !!}
</div>
@endsection
	