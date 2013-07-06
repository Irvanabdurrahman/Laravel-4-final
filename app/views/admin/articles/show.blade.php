@extends('admin._layouts.default')

@section('main')
<blockquote>
			<h2>Display article</h2>
			<small><a href="{{URL::route('admin.articles.index')}}">Back to index</a></small>
</blockquote><hr>
	<h3>{{ $article->title }}</h3>
	<h5>Created by {{ $article->author->first_name }} {{ $article->author->last_name }} at {{ $article->created_at }} </h5>
	{{ $article->body }}
@stop