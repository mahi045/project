
@extends('layouts.app')
@section('content')
<div class="container">
<div align="center">
	<div class="row">
	<div class="col-md-6 col-md-off">

		<div class="span5">
			<h1> Hotel Name </h1>
            <h2>{{ $course->Name }}</h2><br>
            <h1> Hotel Location </h1>
			<h2>{{ $course->Location }}</h2><br>
			<h1> Hotel Facility </h1>
			<?php
			$token = strtok($course->Facility, "\n");
			echo '<il>';
			while( $token !== false )
			{
				echo '<li>';
				echo "$token<br>";
				echo '</li>';
				$token = strtok("\n"); 
			}
			echo '</il>';
			?>
			<h1> Hotel Policy </h1>
			<?php
			$token = strtok($course->Policy, "\n");
			echo '<il>';
			while( $token !== false )
			{
				echo '<li>';
				echo "$token<br>";
				echo '</li>';
				$token = strtok("\n"); 
			}
			echo '</il>';
			?>
			
			<h1> Hotel Contact Number </h1>
			<?php
			$token = strtok($course->contact, "\n");
			echo '<il>';
			while( $token !== false )
			{
				echo '<li>';
				echo "$token<br>";
				echo '</li>';
				$token = strtok("\n"); 
			}
			echo '</il>';
			?>
			



			<a href="{{route('image.edit',$course->Hotel_id)}}" class="btn btn-info">Show Image</a>
			<a href="{{route('room.edit',$course->Hotel_id)}}" class="btn btn-info">Show Room</a><br>
			<a href="{{route('feedback.index',$course->Hotel_id)}}" class="btn btn-info">Give Feedback</a>
			<a href="{{route('feedback.edit',$course->Name)}}" class="btn btn-info">Show Feedback</a>
    	</div>
	</div>
	</div>
</div>
</div>



@endsection