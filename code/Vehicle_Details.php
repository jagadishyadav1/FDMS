<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
  <?php include('sidebar.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Vehicle Details Form</h1>
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
<form action="Vehicle_Details_insert.php" method="post" enctype="multipart/form-data" name="form1"  id="formID">
  <p>Vehicle_no:
    <input name="vehicle_no" class="validate[required] form-control" type="text" id="vehicle_no">
  </p>
  <p>Driver_name:
    <input name="driver_name" class="validate[required,custom[onlyLetter]] form-control" type="text" id="driver_name">
  </p>
  <p>Contact_no:
    <input name="contact_no" class="validate[required,custom[mobile]] form-control" type="text" id="contact_no">
  </p>
  <p>Vehicle_photo:
    <input name="vehicle_photo" class="validate[required] form-control" type="file" id="vehicle_photo">
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
