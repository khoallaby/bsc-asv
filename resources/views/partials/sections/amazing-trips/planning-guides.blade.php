<section class="container-fluid planning-guides">
  <div class="container">
    <div class="row">
      <div class="col-12 planning-guide-content">
        <h2>Planning Guides</h2>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lauda ntium, totam rem aperiam, eaque ipsa quae ab illo inventore ver it.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet d.</p>
      </div>
    </div>
    <div class="row">
      @php
      if( have_rows('planning_guides') ):
        while ( have_rows('planning_guides') ) : the_row();
      @endphp
      <div class="col-md-3 planning-guide">
        <a href="{{ get_sub_field('file') }}">
          <img src="@asset('images/icons/planning-guide.png')" /><br />
          <h3>{{ get_sub_field('title') }}</h3>
        </a>
      </div>
    @php
      endwhile;
    endif;
    @endphp
    </div>
    <div class="row">
      <div class="col">
        @include('partials.book-your-adventure')
      </div>
    </div>
  </div>
</section>