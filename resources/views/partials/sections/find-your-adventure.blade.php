@include('partials.header-adventure', [ 'title' => 'Find Your' ])


<section class="container-fluid find-your-adventure no-gutters">
    <?php
    $i = 0;

    if( have_rows('find_your_adventure') ):
        while ( have_rows('find_your_adventure') ) : the_row();
            $i++;
            $opposing_image = get_sub_field('opposing_image');
            $background_image = get_sub_field('background_image');
            #var_dump($image);
            #$text_align = $i % 2 ? 'text-left' : 'text-right';
            $learn_more = get_sub_field('learn_more_link') ? sprintf( '<a href="%s" class="btn btn-primary white">Learn More</a>', get_sub_field('learn_more_link') ) : '';
            if( $i % 2 ) {
                $bg_class = 'show-xxs';
                $bg_class2 = 'hide-xxs';
            } else {
                $bg_class = $bg_class2 = '';
            }
            $div_image = '<div class="col-xs-12 col-md-6 fya-background ' . $bg_class . '" style="background-image: url(\'' . $opposing_image['url'] . '\');"><img src="' . $opposing_image['url'] . '" class="img-fluid" /></div>';
            $div_image2 = '<div class="col-xs-12 col-md-6 fya-background ' . $bg_class2 . '" style="background-image: url(\'' . $opposing_image['url'] . '\');"><img src="' . $opposing_image['url'] . '" class="img-fluid" /></div>';
            $div_text = sprintf('<div class="col-xs-12 col-md-6 fya-content hcenter vcenter" style="background-image: url(%s);"><div class="pad"><h2>%s</h2><p>%s</p> %s</div></div>',
                #$text_align,
                $background_image['url'],
                get_sub_field('title'),
                get_sub_field('content'),
                $learn_more
            );
            ?>
            <div class="row row-eq-height no-gutter">
                <?php
                if( $i % 2 )
                    echo $div_image . $div_text . $div_image2;
                else
                    echo $div_image . $div_text;
                ?>
            </div>
        <?php
        endwhile;
    endif;
    ?>
</section>
