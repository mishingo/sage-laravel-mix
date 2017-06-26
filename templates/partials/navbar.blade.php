<nav class="navbar navbar-default">
	<div class="container-fluid">

		<div class="navbar-header">
			<button class="collapsed navbar-toggle"
				type="button" 
				data-toggle="collapse" 
				data-target="#sage-navbar" 
				aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
		</div>

		<div class="collapse navbar-collapse" id="sage-navbar">
			@if (has_nav_menu('primary_navigation'))
				{!! wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']) !!}
			@endif
		</div>

	</div>
</nav>