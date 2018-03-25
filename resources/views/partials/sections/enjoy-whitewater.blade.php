<section class="container-fluid enjoy-whitewater no-gutters">
    <div class="row">
        <div class="col-md-6 enjoy-whitewater-left" style="background-image: url('{{ the_field('enjoy_5050_left_background') }}');">
            <h2>{{ the_field('enjoy_5050_left_title') }}</h2>
            <div class="row">
                <div class="col-md-2 offset-1 text-center">
                    <img src="@asset('images/logo-white.png')" class="img-fluid" />
                </div>
                <div class="col-md-8">
                  <p>{{ the_field('enjoy_5050_left_content') }}</p>
                  @include('partials.book-your-adventure', [ 'color' => 'white' ])
                </div>

            </div>
        </div>
        <div class="col-md-6 enjoy-whitewater-right" style="background-image: url('{{ the_field('enjoy_5050_right_background') }}');"></div>
    </div>
</section>