{{--
  Template Name: Glide Template
--}}

@extends('layouts.base')

@section('content')
@while(have_posts()) @php(the_post())
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				
				@include('partials.page-header')
				@if(has_post_thumbnail())
					@php($image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0] . '?w=840&h=310&fit=crop&fm=pjpg&q=60')
					<img class="img-responsive" src="{{ $image }}">
				@endif

				<blockquote class="blockquote">
					Glide is a wonderfully easy on-demand image manipulation library written in PHP. Its straightforward API is exposed via HTTP, similar to cloud image processing services like Imgix and Cloudinary. Glide leverages powerful libraries like Intervention Image (for image handling and manipulation) and Flysystem (for file system abstraction).
				</blockquote>

			<a href="http://glide.thephpleague.com/" class="btn btn-primary">More</a>

			</div>
		</div>
	</div>
@endwhile

@endsection
