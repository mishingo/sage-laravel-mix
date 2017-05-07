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

<blockquote class="blockquote my-3">
	Glide is a wonderfully easy on-demand image manipulation library written in PHP. Its straightforward API is exposed via HTTP, similar to cloud image processing services like Imgix and Cloudinary. Glide leverages powerful libraries like Intervention Image (for image handling and manipulation) and Flysystem (for file system abstraction).
</blockquote>

<a href="http://glide.thephpleague.com/" class="btn btn-primary">More</a>

@endsection
