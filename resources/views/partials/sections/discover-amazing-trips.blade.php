<section class="container-fluid discover-amazing-trips">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @php
                if( is_page_template( 'views/template-amazing-trips.blade.php' ) ) {
                    $title = 'DISCOVER YOUR AMAZING TRIP';
                    $body = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lauda ntium, totam rem aperiam, eaque ipsa quae ab illo inventore ver it.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.';
                } else {
                    $title = 'DISCOVER OUR AMAZING TRIPS';
                    $body = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lauda ntium, totam rem aperiam, eaque ipsa quae ab illo inventore ver it.';
                }
                @endphp
                <h2>{{ $title }}</h2>
                <p>{{ $body }}</p>
            </div>
        </div>
        <div class="row no-gutters">

            @for ($i = 0; $i < 5; $i++)
            <div class="col amazing-trip">
                <a href="#">
                    <img src="@asset('images/icons/rafting.png')" />
                    <h3>{{ $i+1 }} - 6 DAY RAFTING</h3>
                </a>
            </div>
            @endfor
        </div>
    </div>
</section>