{{--
  Template Name: Our Amazing Trips Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  @include('partials.sections.discover-amazing-trips')
  @endwhile
@endsection


@section('post-content')
  @include('partials.sections.find-your-adventure')
  @include('partials.sections.form-discover-adventure')
@endsection
