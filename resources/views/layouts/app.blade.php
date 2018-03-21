<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))
    @include('partials.header')
    @yield('pre-content')
    <div class="wrap container" role="document">
      <div class="row content">
        <main class="main {{ App\display_sidebar() ? 'col-md-9' : 'col-12' }}">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar col-md-3">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>
</html>
