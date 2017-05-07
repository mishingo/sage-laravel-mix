@extends('layouts.base')

@section('content')

@if (!have_posts())
<div class="alert alert-warning">
  {{ __('Sorry, no results were found.', 'sage-laravel-mix') }}
</div>
{!! get_search_form(false) !!}
@endif

@if($latest_posts)
	@foreach($latest_posts as $post)
	<div class="card my-3">
		<div class="card-header p-3">
			<h3 class="m-0">{{ $post['title'] }}</h3>
		</div>
		<div class="card-body p-3">
			<p class="m-0">{{ $post['content'] }}</p>
		</div>
	</div>
	@endforeach
@endif

<example title="Example Component" body="I'm an example vue-component!"></example>

@endsection