  <footer>
  <div class="footer-hr"></div>
  <div class="container">
    @php(dynamic_sidebar('sidebar-footer'))
  </div>
  <div class="container">
    <div class="row">
      <div class="col-2">footer logo</div>
      <div class="col-2 contact-us-text">
        <h3>CONTACT US</h3>
        <p>
          <span class="orange-text">T</span> 208.507.1012<br />
          <span class="orange-text">E</span> <a href="mailto:info@adventuresunvalley.com">info@adventuresunvalley.com </a><br />
          Adventure Sun Valley<br />
          374 Wolverine Ct., Richland Wa 99352<br />
        </p>
        <a href="#" class="btn-primary">BOOK YOUR ADVENTURE</a>
      </div>
      <div class="col-2"></div>
      <div class="col-6">
        <nav class="nav-footer">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </nav>
        <div class="footer-social-links">
          <a href="#" class="fa-facebook"></a>
          <a href="#" class="fa-instagram"></a>
        </div>
        <div class="footer-copyright">&copy; {{ date('Y') }} Adventure Sun Valley</div>
      </div>
    </div>
  </div>

  <div class="container-fluid footer-frei-inc">
    Frei Enterprises Inc - dba Adventure Sun Valley - is operated under special use permit with the Salmon - Challis National Forest.
  </div>
</footer>
