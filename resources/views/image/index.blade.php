@extends('layouts.app')
@section('content')
<div class="container">

<h1>Images Of Hotel</h1>

	<div class="row">
	<div class="col-md-6 col-md-off">
  <div background= "images.png"></div>
		<div class="span5">
            <table class="table table-striped table-condensed">
              <thead>
              		{!! Form::open( ['route'=>'course.index','method'=>'GET','class'=>'class_name'] ) !!}
              		
              		{!! Form::close() !!}
                  
              </thead>   
              <tbody>
              	@foreach($alldata as $data)
	                <tr>
	                    
	                    <td><img src="<?php echo url('uploads/logo')?>/<?php echo $data->ImageFile;?>" alt="" width = "480" height = "320" align = "right" >  </td>
	                                                          
	                </tr>
                @endforeach
                                                   
              </tbody>
            </table>
            {!!$alldata->render()!!}
    </div>
	</div>
</div>
</div>
@endsection