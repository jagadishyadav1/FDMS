<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
  <?php include('sidebar.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Request Accept Form</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">INFO</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	 <div class="row">
        <div class="col-md-6">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">&nbsp;</h3>
            </div>

			<script>
        // Check if the browser supports Geolocation API
        if (navigator.geolocation) {
            // Request location access and get current position
            navigator.geolocation.getCurrentPosition(
                function(position) {
                    // Success callback: Extract latitude and longitude
                    const latitude = position.coords.latitude;
                    const longitude = position.coords.longitude;

                    // Display the coordinates
                    document.getElementById('status').innerHTML = 'Your location is:';
                    document.getElementById('location').innerHTML = 
                        `Latitude: ${latitude}<br>Longitude: ${longitude}`;
						document.getElementById('emp_latt').value = latitude;
						document.getElementById('emp_lang').value = longitude;
						
						
                },
                function(error) {
                    // Error callback: Handle possible errors
                    switch(error.code) {
                        case error.PERMISSION_DENIED:
                            document.getElementById('status').innerHTML = 'User denied the request for Geolocation.';
                            break;
                        case error.POSITION_UNAVAILABLE:
                            document.getElementById('status').innerHTML = 'Location information is unavailable.';
                            break;
                        case error.TIMEOUT:
                            document.getElementById('status').innerHTML = 'The request to get user location timed out.';
                            break;
                        case error.UNKNOWN_ERROR:
                            document.getElementById('status').innerHTML = 'An unknown error occurred.';
                            break;
                    }
                }
            );
        } else {
            // Geolocation API is not supported by the browser
            document.getElementById('status').innerHTML = 'Geolocation is not supported by this browser.';
        }
    </script>
	   <p id="status">Requesting location...</p>
    <p id="location"></p>
<?php
$id=$_REQUEST['id']; 
?>
<form name="form1" id="formID" method="post" action="request_accept.php">
<input type="hidden" value="<?php echo $id; ?>" name="id">
 <p>User_latt:
    <input name="emp_latt" class="validate[required] form-control" type="text" id="emp_latt">
  </p>
 <p>User_lang:
    <input name="emp_lang" class="validate[required] form-control" type="text" id="emp_lang">
</p>
 
  <p> &nbsp;transport Amount:
    <input name="trs_amount" type="text" class="validate[required,custom[onlyNumber]] form-control" id="trs_amount" >
  </p>
  <p>&nbsp;</p>
  <p>
    <input type="submit" name="Submit" class="btn btn-primary" value="Submit">
    <input type="reset" name="Reset" class="btn btn-danger" value="Reset"> 
  </p>
</form>
</div>
</div>
</div>
 </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php include('footer.php'); ?>
   <?php include('script.php'); ?>
   <?php include('val.php'); ?>
