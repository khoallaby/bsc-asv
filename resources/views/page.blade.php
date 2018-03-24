@extends('layouts.app')

@section('pre-content')
  @php
    echo get_field('content_top') ? sprintf( '<section class="container content-top">%s</section>', get_field('content_top') ) : '';
  @endphp
@endsection

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
