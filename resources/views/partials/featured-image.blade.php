@php
namespace App;

  $h1 = App::title();
  $image = get_the_post_thumbnail_url( $post->ID, 'full' );
  //$default = get_field( 'default_header_image', 'options' );
  $default = $default_blog = asset_path('images/featured-blog.jpg');

  $extra_style = '';
  $extra_style = 'background-size: cover;';

  if( !$image )
    $image = $default;

  if( is_home() || is_singular('post') || is_category() ) {
    $image = $default_blog;
    $h1 = "ASV River Blog";
  }

  $style = $image ? sprintf( "background-image:url('%s');%s", $image, $extra_style ) : '';

@endphp

<div class="container-fluid featured-image hcenter vcenter" style="{{ $style }}">
  <div class="row">
    <div class="col-12">

        <?php
        /*
        echo get_the_post_thumbnail( $post->ID, 'large', array(
            'class' => 'img-responsive',
            //'srcset' => ''
        ) );
        */
        ?>
      <h1>{{ $h1 }}</h1>
    </div>
  </div>
</div>
