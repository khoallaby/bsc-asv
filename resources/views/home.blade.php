@extends('layouts.app')

@section('pre-content')
  <section class="container pre-content text-center">
    <div class="row">
      <div class="col">
        <h2>BLOG POST HEADLINE</h2>
        <p>BLog page intor.. natus error sit voluptatem accusantium doloremque lauda ntium, totam rem aperiam, eaque ip vol utpat n hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim.</p>
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
