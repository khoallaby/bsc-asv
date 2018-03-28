<section class="container-fluid content-top discover-amazing-trips">
    <div class="container">
        <div class="row">
            <div class="col-12">
              @php
                if( is_page_template( 'views/template-amazing-trips.blade.php' ) ) {
                    $body = get_the_content(); // todo: fix
                } else {
                    if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif;
                }
              @endphp
                
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col amazing-trip">
                <a href="{{ home_url('our-amazing-trips/6-day-rafting/') }}">
                    <img src="@asset('images/icons/rafting.png')" />
                    <h3>6 Day Rafting</h3>
                </a>
            </div>
            <div class="col amazing-trip">
                <a href="{{ home_url('our-amazing-trips/trout-fishing') }}">
                    <img src="@asset('images/icons/fishing.png')" />
                    <h3>Trout Fishing</h3>
                </a>
            </div>
            <div class="col amazing-trip">
                <a href="{{ home_url('our-amazing-trips/kayak-support-trips') }}">
                    <img src="@asset('images/icons/kayak.png')" />
                    <h3>Kayak Support Trips</h3>
                </a>
            </div>
            <div class="col amazing-trip">
                <a href="{{ home_url('our-amazing-trips/cast-blast') }}">
                    <img src="@asset('images/icons/cast-blast.png')" />
                    <h3>Cast & Blast</h3>
                </a>
            </div>
            <div class="col amazing-trip">
                <a href="{{ home_url('our-amazing-trips/group-specialty') }}">
                    <img src="@asset('images/icons/group-specialty.png')" />
                    <h3>Group & Specialty</h3>
                </a>
            </div>
        </div>
    </div>
</section>
