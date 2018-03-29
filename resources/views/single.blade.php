@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-single-'.get_post_type())
  @endwhile

  <div class="post-pagination">
    {{ previous_post_link('%link', '&laquo; Previous Post') }}
    {{ next_post_link('%link', 'Next Post &raquo;') }}
  </div>
@endsection
