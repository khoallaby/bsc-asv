<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))
    @include('partials.header')
    @yield('pre-content')
    <div class="wrap container" role="document">
      <div class="row content">
        @if (App\display_sidebar() && is_page_template( 'views/template-sidebar.blade.php' ))
          @include('partials.sidebar')
        @endif

        <main class="main {{ App\display_sidebar() ? 'col-md-9' : 'col-12' }}">
          @yield('content')
        </main>

        @if (App\display_sidebar() && (is_home() || is_single()) )
          @include('partials.sidebar')
        @endif
      </div>
    </div>
    @yield('post-content')
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>
</html>
