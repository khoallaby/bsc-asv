{{-- Displays each single post under the blog index page --}}
<article @php(post_class())>
  <header>
      @php
      echo get_the_post_thumbnail( $post->ID, 'featured-image-blog', array(
          'class' => 'img-fluid',
          //'srcset' => ''
      ) );
      @endphp
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    @include('partials/entry-meta')
  </header>
  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>
