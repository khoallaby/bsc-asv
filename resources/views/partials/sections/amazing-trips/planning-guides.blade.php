<section class="container-fluid planning-guides">
  <div class="container">
    <div class="row">
      <div class="col-12 planning-guide-content">
        <?php the_field('planning_guides_intro'); ?>
      </div>
    </div>
    <div class="row">
      @php
      if( have_rows('planning_guides') ):
        while ( have_rows('planning_guides') ) : the_row();
      @endphp
      <div class="col-md-3 planning-guide">
        <a target="_blank" href="{{ get_sub_field('file') }}">
          <img src="/wp-content/uploads/2018/05/planning-guide.png" /><br />
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
