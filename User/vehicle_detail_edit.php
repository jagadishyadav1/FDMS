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
<?php
  include('../dbconnect/dbconnect.php');
  
  $id=$_REQUEST['id'];
  
  $sql="select * from vehicle_details where Vehicle_id ='$id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  
 
?>

<form name="form1" id="formID" method="post" action="Vehicle_Details_update.php">
<input type="hidden" value="<?php echo $row['Vehicle_id'];?>" name="Vehicle_id" />
<p>&nbsp;Vehicle_no:
    <input name="vehicle_no" class="validate[required] form-control" type="text" id="vehicle_no" value="<?php echo $row['Vehicle_no'];?>">
  </p>
  <p>&nbsp;Driver_name:
    <input name="driver_name" class="validate[required,custom[onlyLetter]] form-control" type="text" id="driver_name" value="<?php echo $row['Driver_name'];?>">
  </p>
  <p>&nbsp;Contact_no:
    <input name="contact_no" class="validate[required,custom[mobile]] form-control" type="text" id="contact_no" value="<?php echo $row['Contact_no'];?>">
  </p>
  <p>&nbsp;Vehicle_photo:
    <input name="vehicle_photo" class="validate[required] form-control" type="text" id="vehicle_photo" value="<?php echo $row['Vehicle_photo'];?>">
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
