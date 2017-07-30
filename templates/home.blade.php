@extends('layouts.app')

@section('content')

<div class="container">

	@if (!have_posts())
		<div class="alert alert-warning">
			{{ __('Sorry, no results were found.', 'sage-laravel-mix') }}
		</div>
		{!! get_search_form(false) !!}
	@endif

	@if($latest_posts)
		<div class="row">
			@foreach($latest_posts as $post)
				<div class="col-sm-8 col-sm-offset-2">
					<h3>{{ $post['title'] }}</h3>
					<p>{{ $post['content'] }}</p>
				</div>
			@endforeach
		</div>
	@endif

<example title="Example Component" body="I'm an example vue-component!"></example>

</div>

@endsection