<section class="container-fluid enjoy-whitewater no-gutters">
    <div class="row">
        <div class="col-md-6 enjoy-whitewater-left" style="background-image: url('{{ the_field('enjoy_5050_left_background') }}'); background-repeat:no-repeat;background-size:cover;">
            <h2>{{ the_field('enjoy_5050_left_title') }}</h2>
            <div class="row">
                <div class="col-md-2 offset-md-1 text-center">
                    <img src="@asset('images/logo-white.png')" class="img-fluid" style="margin-bottom:20px;" />
                </div>
                <div class="col-md-8">
                  {{ the_field('enjoy_5050_left_content') }}
                </div>

            </div>
        </div>
        <div class="col-md-6 enjoy-whitewater-right" style="background-image: url('{{ the_field('enjoy_5050_right_background') }}'); background-repeat:no-repeat;"></div>
    </div>
</section>
