@extends('admin._layouts.default')

@section('main')

<blockquote>
	<h1>Articles <a href="{{ URL::route('admin.articles.create') }}" class="btn btn-primary"><i class="icon-plus-sign icon-white"></i> Add new article</a></h1>
	<small>List articles in laravel 4</small>
</blockquote><hr>

	{{ Notification::showAll() }}

	<table class="table table-striped">
		<thead>
			<tr>
				<!--<th>No</th>-->
				<th>Title</th>
				<th>Time</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($articles as $article)
				<tr class="info">
					<!--<td>{{ $article->id }}</td>-->
					<td><a href="{{ URL::route('admin.articles.show', $article->id) }}">{{ $article->title }}</a></td>
					<td>{{ $article->created_at }}</td>
					<td>
						<a href="{{ URL::route('admin.articles.edit', $article->id) }}" class="btn btn-info btn-mini pull-left">Edit</a>

						{{ Form::open(array('route' => array('admin.articles.destroy', $article->id), 'method' => 'delete', 'data-confirm' => 'Are you sure?')) }}
							<button type="submit" href="{{ URL::route('admin.articles.destroy', $article->id) }}" class="btn btn-danger btn-mini">Delete</butfon>
						{{ Form::close() }}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop
