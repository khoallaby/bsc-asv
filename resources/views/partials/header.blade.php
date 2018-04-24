<header class="banner">
  <div class="container-fluid header-contact">
    <div class="container">
      <div class="row">
        <div class="col">
          Let's Connect
          @include('partials.social-media')
        </div>
        <div class="col">
          Call Us!
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span class="phone">{{ get_field('phone_number', 'options') }}</span>
        </div>
      </div>

    </div>
  </div>


  <div class="container-fluid nav-container">
  <div class="container">
    <nav id="" class="nav-primary navbar fixed-to navbar-expand-md ">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <i class="fa fa-bars"></i>
      </button>
      <a class="brand navbar-brand mx-auto" href="{{ home_url('/') }}"><img src="@asset('images/logo.png')" class="img-fluid"/></a>
      <div class="navbar-collapse collapse">

        @php
          $nav_args_left = [
            'container'       => 'ul',
            'menu_class'      => 'navbar-nav mr-auto',
            'theme_location'  => 'primary_navigation_left',
            'depth'           => 2,
            'fallback_cb'     => 'bs4navwalker::fallback',
            'walker'          => new bs4navwalker()
         ];
        @endphp

        @if (has_nav_menu('primary_navigation_left'))
          {!! wp_nav_menu($nav_args_left) !!}
        @endif


        @php
          $nav_args_right = [
            'container' => 'ul',
            'menu_class' => 'navbar-nav ml-auto',
            'theme_location' => 'primary_navigation_right',
            'depth'           => 2,
            'fallback_cb'     => 'bs4navwalker::fallback',
            'walker'          => new bs4navwalker()
         ];
        @endphp

        @if (has_nav_menu('primary_navigation_right'))
          {!! wp_nav_menu($nav_args_right) !!}
        @endif

      </div>
    </nav>
  </div>
  </div>
  @if (!is_front_page())
    @include('partials.featured-image')
  @endif
</header>


