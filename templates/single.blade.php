@extends('layouts.app')

@section('content')

@while(have_posts()) @php(the_post())
<div class="row">
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2">
			@include('partials/content-single-'.get_post_type())
		</div>
	</div>
</div>
@endwhile

@endsection

