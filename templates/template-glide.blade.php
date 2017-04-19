{{--
  Template Name: Glide Template
--}}

@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @if(has_post_thumbnail())
	    @php($image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0] . '?w=800&h=400&fit=crop&fm=pjpg&q=80')
	    <img class="img-fluid" src="{{ $image }}">
    @endif
  @endwhile
  
	<h4 class="mt-5 mb-3 py-1">Fetch data from controller</h4>
	<hr>

	<h2>{{ $title or 'Not Defined' }}</h2>

	<ul>
		@foreach($names as $name)
			<li>{{$name}}</li>
		@endforeach
	</ul>

@endsection
