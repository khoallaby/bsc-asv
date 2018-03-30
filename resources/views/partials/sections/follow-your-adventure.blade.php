@include('partials.header-adventure', [ 'title' => 'Follow the' ])


<section class="container-fluid follow-the-adventure no-gutters">
  <?php
  $i = 0;

  if( have_rows('follow_the_adventure_images') ):
    while ( have_rows('follow_the_adventure_images') ) : the_row();
      $i++;
      $image = get_sub_field('image');

      if( $i == 5 || $i == 6 ) {
          $size = 'rectangle';
          $class = 'col-xs-12 col-sm-8 col-md-4';
      } else {
          $size = 'square';
          $class = 'col-xs-6 col-sm-4 col-md-2';
      }

      $image_html = sprintf( '<a href="%s" target="_blank"><img src="%s" class="img-fluid" /></a>',
        get_field('instagram_url', 'options'),
        $image['sizes']['gallery-' . $size . '-thumbnail']
      );

      if( $i == 1 || $i == 6 )
        echo '<div class="row no-gutter">';


      echo sprintf( '<div class="%s follow-the-adventure-image">%s</div>', $class, $image_html );

      // closes <div class="row">
      if( $i == 5 || $i == 10 )
          echo '</div>';

    endwhile;
  endif;
  ?>
</section>
