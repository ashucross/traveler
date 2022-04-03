<x-admin-layout>
  <div class="content-header">
    <h5 class="mt-4 mb-2 wish_text"></h5>
    <div class="row">
      <div class="col-md-3 col-sm-6 col-12">
        <a href="admin/destinations">
          <div class="info-box bg-info">
            <span class="info-box-icon"><i class="far fa-map"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Destination</span>
              <span class="info-box-number">{{$destinationcount}}</span>

              <!--  <div class="progress">
              <div class="progress-bar" style="width: 70%"></div>
            </div>
            <span class="progress-description">
              0% Increase in 30 Days
            </span> -->
            </div>
            <!-- /.info-box-content -->
          </div>
        </a>
        <!-- /.info-box -->
      </div>


      <div class="col-md-3 col-sm-6 col-12">
        <a href="admin/categories">
          <div class="info-box bg-info">
            <span class="info-box-icon"><i class="fa fa-database"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Categories</span>
              <span class="info-box-number">{{$categorycount}}</span>

          
            </div>
        
          </div>
        </a>
      
      </div>
      <div class="col-md-3 col-sm-6 col-12">
        <a href="admin/texiservice">
          <div class="info-box bg-info">
            <span class="info-box-icon"><i class="fa fa-car"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Texis</span>
              <span class="info-box-number">{{$texicount}}</span>

          
            </div>
        
          </div>
        </a>
      
      </div>
      <div class="col-md-3 col-sm-6 col-12">
        <a href="admin/hotels">
          <div class="info-box bg-info">
            <span class="info-box-icon"><i class="fa fa-hotel"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Hotels</span>
              <span class="info-box-number">{{$hotelcount}}</span>

          
            </div>
        
          </div>
        </a>
      
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-12">
        <a href="">
          <div class="info-box bg-success">
            <span class="info-box-icon"><i class="far fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Visitors</span>
              <span class="info-box-number">{{$visitorcount}}</span>

              <!-- <div class="progress">
              <div class="progress-bar" style="width: 70%"></div>
            </div>
            <span class="progress-description">
              0% Increase in 30 Days
            </span> -->
            </div>
            <!-- /.info-box-content -->
          </div>
        </a>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-12">
        <a href="admin/packages">
        <div class="info-box bg-warning">
          <span class="info-box-icon text-white"><i class="fas fa-briefcase"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Packages</span>
            <span class="info-box-number">{{$packagecount}}</span>

            <!--    <div class="progress">
              <div class="progress-bar" style="width: 70%"></div>
            </div>
            <span class="progress-description">
              0% Increase in 30 Days
            </span> -->
          </div>
          <!-- /.info-box-content -->
        </div>
        </a>
        <!-- /.info-box -->
      </div>
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-danger">
          <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Enquiries</span>
            <span class="info-box-number">{{$enquirycount}}</span>

            <!--  <div class="progress">
              <div class="progress-bar" style="width: "></div>
            </div>
            <span class="progress-description">
              0% Increase in 30 Days
            </span> -->
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
    </div>
  </div>
  <!-- /.content-header -->




  <!-- Main content -->

</x-admin-layout>

<script>
  var now = new Date();
  var hrs = now.getHours();
  var msg = "";

  if (hrs > 0) msg = "Morning' Sunshine!"; // REALLY early
  if (hrs > 6) msg = "Good morning"; // After 6am
  if (hrs > 12) msg = "Good afternoon"; // After 12pm
  if (hrs > 17) msg = "Good evening"; // After 5pm
  if (hrs > 22) msg = "Go to bed!";
  if (msg) {
    $('.wish_text').html(msg);
  }
</script>