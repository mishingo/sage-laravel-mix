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
@endsection
