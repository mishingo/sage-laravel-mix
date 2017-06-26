{{--
  Template Name: Custom Template
--}}

@extends('layouts.base')

@section('content')

  @while(have_posts()) @php(the_post())
    <div class="row">
		<div class="container">
			<div class="col-sm-8 col-sm-offset-2">
				@include('partials.page-header')
				@include('partials.content-page')
			</div>
		</div>
	</div>
  @endwhile

@endsection
