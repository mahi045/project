@extends('layouts.app')
@section('content')
<div class="container">
	 <h1>Upload The Photo</h1>
	{!! Form::open(array('route' => 'image.store')) !!}
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group">
                       {!! Form::label('Image', 'Image URL', $attributes = array('class'=>'col-sm-3 control-label')); !!}
                        <div class="col-sm-9">
                            <input class="form-control" id="concept" name="image" type="text">
                        </div>
                    </div>
                </div>
                
            </div>
    {!! Form::close() !!}*/
</div>
@endsection