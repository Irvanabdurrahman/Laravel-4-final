@extends('admin._layouts.default')

@section('main')
<blockquote>
			<h2>Display page</h2>
			<small><a href="{{URL::route('admin.pages.index')}}">Back to index</a></small>
</blockquote><hr>
	<h3>{{ $page->title }}</h3>
	<h5>Created by {{ $page->author->first_name }} {{ $page->author->last_name }} at {{ $page->created_at }} </h5>
	{{ $page->body }}
@stop