<article @php(post_class())>
  <header>
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @excerpt
    @content
  </div>

  @if (has_post_thumbnail())
    @php 
      $thumbnail_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail');
    @endphp
    <a href="{{ get_permalink() }}">
      <img src="{{ $thumbnail_image_url[0] }}">
    </a>
  @endif

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php(comments_template('/templates/partials/comments.blade.php'))
</article>
