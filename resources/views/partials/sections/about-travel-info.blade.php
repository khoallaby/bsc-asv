@include('partials.header-adventure', [ 'title' => 'Getting to your' ])

<section class="container-fluid about-travel-info">
  <div class="container">
    {{ the_field( 'travel_info_content' ) }}
  </div>
</section>