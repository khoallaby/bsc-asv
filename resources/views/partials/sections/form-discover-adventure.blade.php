<section class="container-fluid discover-adventure">
  <div class="container">
    <div class="row">

      <div class="col-md-12 logo"><img src="@asset('images/logo-footer.png')" class="img-fluid"/></div>
      <div class="col-md-12 discover-your-adventure-text">
        <img src="@asset('images/discover-your-adventure.png')" class="img-fluid"/><br />
        <h2>HAVE SOME QUESTIONS ABOUT YOUR TRIP?</h2>
      </div>
      <div class="col-md-12 col-push-2">
        {!! do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]') !!}
      </div>
    </div>
  </div>
</section>
