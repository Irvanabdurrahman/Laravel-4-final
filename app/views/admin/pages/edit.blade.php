@extends('admin._layouts.default')
@section('main')
<blockquote>
			<h2>Edit page</h2>
			<small>For editing page</small>		
			<small><a href="{{URL::route('admin.pages.index')}}">Back to index</a></small>
</blockquote><hr>
	@include('admin._partials.notifications')
	{{ Form::model($page, array('method' => 'put', 'route' => array('admin.pages.update', $page->id))) }}
		<div class="control-group">
			{{ Form::label('title', 'Title') }}
			<div class="controls">
				{{ Form::text('title') }}
			</div>
		</div>
		<div class="control-group">
			{{ Form::label('body', 'Content') }}
			<div class="controls">
				{{ Form::textarea('body') }}
			</div>
		</div>
			{{ Form::submit('Save', array('class' => 'btn btn-info btn-save')) }}
			<a href="{{ URL::route('admin.pages.index') }}" class="btn btn-info">Cancel</a>
	{{ Form::close() }}
@stop
