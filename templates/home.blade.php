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
		@include ('partials.content-'.(get_post_type() !== 'post' ? get_post_type() : get_post_format()))
	@endforeach
@endif

<example title="Example Component" body="I'm an example vue-component!"></example>

@endsection