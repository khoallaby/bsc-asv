<section class="container-fluid map-google">
  <div class="row">
    <div class="col-12">
      <div class="acf-map">
          <?php if( $location = get_field('google_maps_location') ) : ?>
        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
          <?php endif; ?>
      </div>
    </div>
  </div>
</section>