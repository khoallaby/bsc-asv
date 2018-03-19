@extends('layouts.app')

@section('pre-content')
    @include('partials.sections.home-slider')
    @include('partials.sections.discover-amazing-trips')
    @include('partials.sections.enjoy-whitewater')
@endsection


@section('content')
  @while(have_posts()) @php(the_post())
    {{--@include('partials.page-header')--}}
    @include('partials.content-page')
  @endwhile
@endsection
