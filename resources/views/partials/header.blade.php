
{{--@include('partials.sections.discover-amazing-trips')--}}

<header class="banner">
  <div class="container">
    <div class="container-fluid header-contact">
      Let’s Connect
    </div>
    <nav class="nav-primary">
      {{--
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
      --}}
    </nav>
  </div>





  <div class="container">
    <nav id="" class="nav-primary navbar fixed-to navbar-expand-md ">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        Menu
      </button>
      <a class="brand navbar-brand mx-auto" href="{{ home_url('/') }}"><img src="http://imgd.downloadapk.net/d/31/41496d_150.png" /></a>
      <div class="navbar-collapse collapse">

        @php
          $nav_args_left = [
              'container' => 'ul',
              'menu_class' => 'navbar-nav',
              'theme_location' => 'primary_navigation_left',
         ];
        @endphp

        @if (has_nav_menu('primary_navigation_left'))
          {!! wp_nav_menu($nav_args_left) !!}
          {{--{!! wp_nav_menu(['theme_location' => 'primary_navigation_left', 'menu_class' => 'navbar-nav']) !!}--}}
        @endif


        @php
          $nav_args_right = [
              'container' => 'ul',
              'menu_class' => 'navbar-nav ml-auto',
              'theme_location' => 'primary_navigation_right',
         ];
        @endphp

        @if (has_nav_menu('primary_navigation_right'))
          {!! wp_nav_menu($nav_args_right) !!}
        @endif

        {{--
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>--}}
      </div>
    </nav>
  </div>

</header>


