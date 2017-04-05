@extends('layouts.base')

@section('content')

@if (!have_posts())
<div class="alert alert-warning">
  {{ __('Sorry, no results were found.', 'sage-laravel-mix') }}
</div>
{!! get_search_form(false) !!}
@endif

@posts
	@include ('partials.content-'.(get_post_type() !== 'post' ? get_post_type() : get_post_format()))
@endposts

<example title="Example Component" body="I'm an example vue-component!"></example>

@endsection