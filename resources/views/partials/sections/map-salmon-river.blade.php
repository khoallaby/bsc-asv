<?php if( get_field('salmon_river_map', 'options') ): ?>
<section class="container-fluid map-salmon-river">
    <!--<div class="container">-->
        <img src="<?php the_field('salmon_river_map', 'options'); ?>" class="img-fluid" />
    <!--</div>-->
</section>
<?php endif; ?>
