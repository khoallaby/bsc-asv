@extends('layouts.app')

@section('pre-content')
  <section class="container pre-content text-center">
    <div class="row">
      <div class="col">
        <h2>BLOG POST HEADLINE</h2>
        @php
          echo get_field('content_top', (int)get_option( 'page_for_posts' )) ? sprintf( '<section class="container content-top">%s</section>', get_field('content_top', (int)get_option( 'page_for_posts' )) ) : '';
        @endphp
      </div>
    </div>
  </section>
@endsection



@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php(the_post())
    @include('partials.content-'.get_post_type())
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
