@extends('admin._layouts.default')
@section('main')
<blockquote>
	<h1>Pages <a href="{{ URL::route('admin.pages.create') }}" class="btn btn-primary"><i class="icon-plus-sign icon-white"></i> Add new page</a></h1>
	<small>List pages in laravel 4</small>
</blockquote><hr>
	{{ Notification::showAll() }}
	<table class="table table-striped">
		<thead>
			<tr>
				<!--<th>No</th>-->
				<th>Title</th>
				<th>When</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($pages as $page)
				<tr class="info">
					<!--<td>{{ $page->id }}</td>-->
					<td><a href="{{ URL::route('admin.pages.show', $page->id) }}">{{ $page->title }}</a></td>
					<td>{{ $page->created_at }}</td>
					<td>
						<a href="{{ URL::route('admin.pages.edit', $page->id) }}" class="btn btn-info btn-mini pull-left">Edit</a>

						{{ Form::open(array('route' => array('admin.pages.destroy', $page->id), 'method' => 'delete', 'data-confirm' => 'Are you sure?')) }}
							<button type="submit" href="{{ URL::route('admin.pages.destroy', $page->id) }}" class="btn btn-danger btn-mini">Delete</butfon>
						{{ Form::close() }}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop
