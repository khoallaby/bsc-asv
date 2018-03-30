<section class="container-fluid asv-guides-staff">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>MEET THE ASV GUIDES AND STAFF</h2>
      </div>
    </div>
    <div class="row">
      @php
      $staff = sage::get_posts( 'asv-staff' );
      @endphp

      @foreach( $staff as $s )
        @php
        $staff_picture = get_field( 'staff_picture', $s->ID );
        $staff_picture_url = $staff_picture['sizes']['staff-thumbnail'];
        @endphp

        <div class="col-sm-6 col-md-3">
          <div class="asv-staff-container">
            <div class="asv-staff">
              <img src="{{ $staff_picture_url }}" class="staff-pic" height="135" width="135" />
              <h3 class="staff-name">{{ $s->post_title }}</h3>
              <h4 class="staff-position">{{ get_field( 'staff_position', $s->ID ) }}</h4>
              <p class="bio-short">{{ $s->post_excerpt }}</p>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#asv-staff-member-{{ $s->ID }}">Read More</button>

              <div id="asv-staff-member-{{ $s->ID }}" class="modal bd-example-modal-lg asv-staff-modal container" {{--style="display: none;"--}}  tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">{{ $s->post_title }} - {{ get_field( 'staff_position', $s->ID ) }}</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body row">
                      <div class="col-md-4">
                        <img src="{{ $staff_picture_url }}" class="staff-pic" height="135" width="135" />
                      </div>
                      <div class="col-md-8 staff-bio">
                        {{ $s->post_content }}
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </div>
</section>

















