{{--
  Template Name: Single Amazing Trip Template
--}}

@extends('layouts.app')



@section('content')
  @while(have_posts()) @php(the_post())
    <section class="content-top">
      <h2><?php the_field('content_title'); ?></h2>
      <div class="row">
        <div class="col-md-2"><img src="{{ get_field('icon') }}" class="img-fluid" /></div>
        <div class="col-md-10">
          {{ the_content() }}
        </div>
      </div>
    </section>
  @endwhile
@endsection


@section('post-content')
  @include('partials.sections.amazing-trips.amazing-trip-gallery')
  @include('partials.sections.amazing-trips.pampered-camping')
  @include('partials.sections.amazing-trips.river-menu')
  @include('partials.sections.amazing-trips.planning-guides')
  @include('partials.sections.map-salmon-river')
@endsection
