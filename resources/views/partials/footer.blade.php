<footer>
  <div class="footer-hr"></div>
  <div class="container">
    {{--@php(dynamic_sidebar('sidebar-footer'))--}}
  </div>
  <div class="container footer-content">
    <div class="row">
      <div class="col-md-2"><img src="@asset('images/logo-footer.png')" class="img-fluid"/></div>
      <div class="col-md-4 contact-us-text">
        <h3>CONTACT US</h3>
        <p>
          <strong>T</strong> 208.507.1012<br />
          <strong>E</strong> <a href="mailto:info@adventuresunvalley.com">info@adventuresunvalley.com </a><br />
          Adventure Sun Valley<br />
          374 Wolverine Ct., Richland Wa 99352<br />
        </p>
        @include('partials.book-your-adventure')
      </div>
      <div class="col-md-6">
        <nav class="nav-footer">
          @if (has_nav_menu('footer_navigation'))
            {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </nav>
        <div class="footer-social-links text-right">
          @include('partials.social-media', [ 'footer' => true ])
        </div>
        <div class="footer-copyright">&copy; {{ date('Y') }} Adventure Sun Valley</div>
      </div>
    </div>
  </div>

  <div class="container-fluid footer-frei-inc">
    Frei Enterprises Inc - dba Adventure Sun Valley - is operated under special use permit with the Salmon - Challis National Forest.
  </div>
</footer>
