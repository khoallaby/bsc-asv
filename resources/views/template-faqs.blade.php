{{--
  Template Name: FAQs Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')

    @if ( have_rows('faqs') )
      @php( $i = 0 )
      <div id="accordion" class="accordion panel-group" role="tablist" aria-multiselectable="true">
      @while ( have_rows('faqs') ) @php(the_row())
        @php( $i++ )
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="heading-{{ $i }}">
            <h2 class="panel-title">
              <a class="collapsed" data-toggle="collapse" href="#collapse-{{ $i }}" aria-expanded="false" aria-controls="collapse-{{ $i }}">
                {{ get_sub_field('title') }}
              </a>
            </h2>

          </div>
          <div id="collapse-{{ $i }}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-{{ $i }}" data-parent="#accordion">
            <div class="panel-body">{{ get_sub_field('content') }}</div>
          </div>
        </div>
      @endwhile
    @endif





</div>
@endwhile
@endsection
