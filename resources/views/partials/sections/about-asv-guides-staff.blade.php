<section class="container-fluid asv-guides-staff">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>MEET THE ASV GUIDES AND STAFF</h2>
      </div>
    </div>
    <div class="row">
        @for ($i = 0; $i < 10; $i++)
        <div class="col-md-3">
          <div class="asv-staff-container">
            <div class="asv-staff">
              <img src="@asset('images/icons/planning-guide.png')" class="staff-pic" height="135" width="135" />
              <h3 class="staff-name">brad frei</h3>
              <h4 class="staff-position">Owner & Host</h4>
              <p class="bio-short">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
              <a href="#asv-staff-ID{{ $i }}" class="btn btn-primary">Read More</a>
              <div id="asv-staff-ID{{ $i }}" class="container" style="display: none;">
                <div class="title">brad frei - Owner & Host</div>
                <div class="bio-long">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</div>
              </div>
            </div>
          </div>
        </div>
        @endfor

    </div>
  </div>
</section>