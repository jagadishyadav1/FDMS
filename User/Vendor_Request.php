<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
  <?php include('sidebar.php'); ?>
  <!-- Content Wrapper. Contains page content --><style type="text/css">
<!--
.style2 {
	font-family: sans-serif;
	font-size: 13.12px;
	color: rgb(0, 0, 0);
	background-color: rgb(255, 255, 255);
}
-->
</style>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      User Request Details Form</h1>
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
						document.getElementById('User_latt').value = latitude;
						document.getElementById('User_lang').value = longitude;
						
						
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
<form name="form1" id="formID" method="post" action="Vendor_Request_insert.php">
  <p>User_id:
    <select name="User_id" class="validate[required] form-control"id="User_id">
      
      <?php
  include('../dbconnect/dbconnect.php');
  $uname=$_SESSION['uname'];
 
  $sql="select * from User_details where Email_id='$uname'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
      <option value="<?php echo $row['User_id'];?>"><?php echo $row['User_name'];?></option>
      <?php 
  }
  ?>
    </select>
  </p>
  <p>Fuel_id:
    <select name="fuel_id" class="validate[required] form-control" id="fuel_id">
      <option value="">select</option>
      <?php
  
 
  $sql="select * from fuel_detail";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
      <option value="<?php echo $row['Fuel_id'];?>" ><?php echo $row['Fuel_name'];?></option>
      <?php 
  }
  ?>
        </select>
</p>
  
  
  <p>User_lang:
    <input name="User_lang" class="validate[required] form-control" type="text" id="User_lang">
</p>
  <p>User_latt:
    <input name="User_latt" class="validate[required] form-control" type="text" id="User_latt">
  </p>
  <p>Quantity:
    <input name="quantity" class="validate[required,custom[onlyNumber]] form-control" type="text" id="quantity">
</p>
  
  <p>Request_date:
    <input name="Request_date" class="validate[required] form-control" value="<?php echo date('Y-m-d');?>" readonly="" type="date" id="Request_date">
</p>
  <p>
    <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
    <input type="reset" class="btn btn-danger" name="Reset" value="Reset"> 
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
