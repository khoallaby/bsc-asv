<section class="container-fluid amazing-trip-gallery">
  <div class="row no-gutters">
    <?php
    $i = 0;

    if( have_rows('gallery') ):
      while ( have_rows('gallery') ) : the_row();
        $i++;
        $image = get_sub_field('image');
    ?>
    <div class="col-sm-6 col-md-4 col-lg-2">
      <img src="{{ $image['sizes']['gallery-square-thumbnail'] }}" class="img-fluid" />
    </div>
    <?php
      endwhile;
    endif;
    ?>

  </div>
</section>
