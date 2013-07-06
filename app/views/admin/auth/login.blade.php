@extends('admin._layouts.default')
@section('main')
<blockquote>
			<h1>FORM LOGIN</h1>
			<small>For add , update and delete data in laravel </small>
			<small><a href="{{URL::to('/')}}">View site</a></small>
</blockquote><hr>
	<div id="login" class="login">
		{{ Form::open() }}
			@if ($errors->has('login'))
				<div class="alert alert-error">{{ $errors->first('login', ':message') }}</div>
			@endif
				<!--  email and password field-->
				{{Form::text('email', null, array('placeholder' => 'Email'))}}<br>	
				{{Form::password('password', array('placeholder' => 'Password'))}}<br>
				
				<!--  submit button-->
				{{ Form::submit('Login', array('class' => 'btn btn-primary')) }}
				{{ Form::reset('Cancel', array('class' => 'btn btn-primary')) }}
		{{ Form::close() }}
	</div>
@stop