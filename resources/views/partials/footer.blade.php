<footer>
  <div class="footer-hr"></div>
  <div class="container">
    {{--@php(dynamic_sidebar('sidebar-footer'))--}}
  </div>
  <div class="container footer-content">
    <div class="row">
      <div class="col-2"><img src="@asset('images/logo-footer.png')" /></div>
      <div class="col-4 contact-us-text">
        <h3>CONTACT US</h3>
        <p>
          <strong>T</strong> 208.507.1012<br />
          <strong>E</strong> <a href="mailto:info@adventuresunvalley.com">info@adventuresunvalley.com </a><br />
          Adventure Sun Valley<br />
          374 Wolverine Ct., Richland Wa 99352<br />
        </p>
        <a href="#" class="btn btn-primary">BOOK YOUR ADVENTURE</a>
      </div>
      <div class="col-6">
        <nav class="nav-footer">
          @if (has_nav_menu('footer_navigation'))
            {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </nav>
        <div class="footer-social-links text-right">
          <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
        </div>
        <div class="footer-copyright">&copy; {{ date('Y') }} Adventure Sun Valley</div>
      </div>
    </div>
  </div>

  <div class="container-fluid footer-frei-inc">
    Frei Enterprises Inc - dba Adventure Sun Valley - is operated under special use permit with the Salmon - Challis National Forest.
  </div>
</footer>
