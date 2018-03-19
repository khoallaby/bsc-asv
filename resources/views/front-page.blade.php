@extends('layouts.app')

@section('pre-content')
    @include('partials.sections.home-slider')
    @include('partials.sections.discover-amazing-trips')
    @include('partials.sections.enjoy-whitewater')
    @include('partials.sections.map-salmon-river')
    @include('partials.header-adventure', [ 'title' => 'Follow the' ])
    @include('partials.sections.form-discover-adventure')
@endsection


@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-page')
  @endwhile
@endsection
