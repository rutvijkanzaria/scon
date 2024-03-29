

<!--Page Header-->
<section class="page_header child_nursing padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <h1>Location & Accessibility</h1>
        <div class="page_nav">
          <span>You are here:</span> <a href="<?php echo base_url() ?>">Home</a> <span><i class="fa fa-angle-double-right"></i>Location & Accessibility</span>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Page Header-->


<!-- Courses -->
<section id="course_all" class="padding-bottom-half padding-top">
  <div class="container content-container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 course_detail wow fadeIn" data-wow-delay="400ms">
        <!-- <img src="<?php echo base_url() ?>images/about/history.jpg" alt="Course" class=" border_radius img-responsive bottom15 hero-image"> -->
        <div style="padding: 30px; background:#fff">
          <div id="map" style="width:100%;height:500px"></div>
        </div>

        <script>
          function myMap() {
            var mapCanvas = document.getElementById("map");
            var myCenter = new google.maps.LatLng(13.02621,80.014519);
            var mapOptions = {center: myCenter, zoom: 17};
            var map = new google.maps.Map(mapCanvas,mapOptions);
            var marker = new google.maps.Marker({
              position: myCenter
              // animation: google.maps.Animation.BOUNCE
            });
            marker.setMap(map);
          }
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo GOOGLE_MAP_API_KEY ?>&callback=myMap"></script>


      </div>
    </div>
  </div>
</section>
<!-- Courses -->
