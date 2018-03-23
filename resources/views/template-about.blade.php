{{--
  Template Name: About Page
--}}

@extends('layouts.app')



@section('content')
  @while(have_posts()) @php(the_post())
    <section class="content-top">
      <h2>WHY CHOOSE ADVENTURE SUN VALLEY</h2>
      <p>@include('partials.content-page')</p>
      @include('partials.book-your-adventure')
    </section>
  @endwhile
@endsection



@section('post-content')
  @include('partials.sections.about-asv-guides-staff')
  @include('partials.header-adventure', [ 'title' => 'Follow the' ])
  @include('partials.sections.about-travel-info')
  @include('partials.sections.map-salmon-river')
@endsection
