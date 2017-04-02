@extends('layouts.base')

@section('content')

  <h4 class="mt-5 mb-3 py-1">Display page using wordpress standards</h4>
  <hr>

  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile

  @if (has_post_thumbnail())
  	@php 
  		$thumbnail_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail');
  	@endphp
  	<a href="{{ get_permalink() }}">
  		<img src="{{ $thumbnail_image_url[0] }}">
  	</a>
  @endif

    <h4 class="mt-5 mb-3 py-1">Display page using Blade directive</h4>

    <hr>

    @posts
      <h2>@title</h2>
      @content
      <small>@date</small>
    @endposts

    @php 
    $args = array(
      'posts_per_page'   => 5,
      'offset'           => 0,
      'category'         => '',
      'category_name'    => 'blerp',
      'orderby'          => 'date',
      'order'            => 'DESC',
      'include'          => '',
      'exclude'          => '',
      'meta_key'         => '',
      'meta_value'       => '',
      'post_type'        => 'post',
      'post_mime_type'   => '',
      'post_parent'      => '',
      'author'     => '',
      'author_name'    => '',
      'post_status'      => 'publish',
      'suppress_filters' => true
      );
    @endphp

  <h4 class="mt-5 mb-3 py-1">Display posts using wordpress standards</h4>

  <hr>

    @php 
      $posts = get_posts($args);
    @endphp

    @foreach ($posts as $post)
      <h2>{{ $post->post_title }}</h2>
      <p>{{ $post->post_content }}</p>
    @endforeach

    <h4 class="mt-5 mb-3 py-1">Display posts using Blade directive</h4>

    <hr>
    
    @query($args)
      <h2>@title</h2>
      {{-- @excerpt --}}
      @content
      <small>@date</small>
    @endquery

    <h4 class="mt-5 mb-3 py-1">Fetch data from controller</h4>

    <hr>

    <h2>{{ $title or 'Not Defined' }}</h2>

    <ul>
      @foreach($names as $name)
        <li>{{$name}}</li>
      @endforeach
    </ul>

@endsection
