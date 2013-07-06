@extends('admin._layouts.default')
@section('main')
<blockquote>
			<h2>Edit article</h2>
			<small>For editing article</small>		
			<small><a href="{{URL::route('admin.articles.index')}}">Back to index</a></small>
</blockquote><hr>
	@include('admin._partials.notifications')
	{{ Form::model($article, array('method' => 'put', 'route' => array('admin.articles.update', $article->id))) }}
		<div class="control-group">
			{{ Form::label('title', 'Title') }}
			<div class="controls">
				{{ Form::text('title') }}
			</div>
		<div class="control-group">
			{{ Form::label('body', 'Content') }}
			<div class="controls">
				{{ Form::textarea('body') }}
			</div>
		</div>
			{{ Form::submit('Save', array('class' => 'btn btn-info btn-save')) }}
			<a href="{{ URL::route('admin.articles.index') }}" class="btn btn-info">Cancel</a>
	{{ Form::close() }}
@stop
