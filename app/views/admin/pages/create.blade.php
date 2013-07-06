@extends('admin._layouts.default')
@section('main')
<blockquote>
			<h2>Create new page</h2>
			<small>Create new page in laravel 4</small>		
			<small><a href="{{URL::route('admin.pages.index')}}">Back to index</a></small>
</blockquote><hr>
	@include('admin._partials.notifications')
	{{ Form::open(array('route' => 'admin.pages.store')) }}
			<!--  title and content field-->
			{{Form::text('title', null, array('placeholder' => 'Title'))}}<br>	
			{{Form::textarea('body', null, array('rows' => '4', 'placeholder' => 'Content'))}}<br>

			<!--  button-->
			{{ Form::submit('Save', array('class' => 'btn btn-info btn-save')) }}
			<a href="{{ URL::route('admin.pages.index') }}" class="btn btn-info">Cancel</a>
	{{ Form::close() }}
@stop
