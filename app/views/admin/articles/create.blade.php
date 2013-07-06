@extends('admin._layouts.default')
@section('main')
<blockquote>
			<h2>Create new article</h2>
			<small>Add new article in laravel 4</small>		
			<small><a href="{{URL::route('admin.articles.index')}}">Back to index</a></small>
</blockquote><hr>
	@include('admin._partials.notifications')
	{{ Form::open(array('route' => 'admin.articles.store')) }}
			<!--  title and content field-->
			{{Form::text('title', null, array('placeholder' => 'Title'))}}<br>	
			{{Form::textarea('body', null, array('rows' => '4', 'placeholder' => 'Content'))}}<br>
		
			<!--  button-->
			{{ Form::submit('Save', array('class' => 'btn btn-info')) }}
			<!--{{ Form::reset('Cancel', array('class' => 'btn btn-info')) }}-->
			<a href="{{ URL::route('admin.articles.index') }}" class="btn btn-info">Cancel</a>
	{{ Form::close() }}

@stop
