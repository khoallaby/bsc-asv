{{--
  Template Name: Single Amazing Trip Template
--}}

@extends('layouts.app')



@section('content')
  @while(have_posts()) @php(the_post())
    <h2>Amazing {{ the_title() }}</h2>
    <div class="row">
      <div class="col-md-2">ICON</div>
      <div class="col-md-10">
        {{ the_content() }}
        <div class="text-center">
          @include('partials.book-your-adventure')
        </div>
      </div>
    </div>
  @endwhile
@endsection


@section('post-content')
  @include('partials.sections.amazing-trips.amazing-trip-images')
  @include('partials.sections.amazing-trips.pampered-camping')
  @include('partials.sections.amazing-trips.river-menu')
  @include('partials.sections.amazing-trips.planning-guides')
  @include('partials.sections.map-salmon-river')
@endsection
