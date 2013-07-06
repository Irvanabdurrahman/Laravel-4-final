@include('site::_partials/header')

<h2>Articles</h2>

<ul>
	@foreach ($entries as $entry)
		<li>
			<h3><a href="{{ URL::route('article', $entry->slug) }}">{{ $entry->title }}</a></h3>
			<h5>&bull; Created by {{ $entry->author->first_name }} {{ $entry->author->last_name }} at {{ $entry->created_at }} </h5>
			{{ Str::limit($entry->body, 100) }}
		</li>
	@endforeach
</ul>

@include('site::_partials/footer')
