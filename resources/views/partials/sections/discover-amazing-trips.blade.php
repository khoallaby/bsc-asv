<section class="container-fluid discover-amazing-trips">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>DISCOVER OUR AMAZING TRIPS</h2>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lauda ntium, totam rem aperiam, eaque ipsa quae ab illo inventore ver it.</p>
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