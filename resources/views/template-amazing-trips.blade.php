{{--
  Template Name: Our Amazing Trips Template
--}}

@extends('layouts.app')



@section('pre-content')
    @include('partials.sections.discover-amazing-trips')
    @include('partials.sections.find-your-adventure')
    @include('partials.sections.form-discover-adventure')
@endsection



@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-page')
  @endwhile
@endsection
