<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
  <?php include('sidebar.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Transport Details Form</h1>
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
<form name="form1" id="formID" method="post" action="Transport_insert.php">
  <p>&nbsp;Vendor_request_id:
    <select name="Vendor_request_id" class="validate[required] form-control" id="Vendor_request_id">
      <option value="">select</option>
      <?php
  include('../dbconnect/dbconnect.php');
 
  $sql="select * from vendor_request_details";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
      <option value="<?php echo $row['Vendor_request_id'];?>"><?php echo $row['Request_status'];?></option>
      <?php 
  }
  ?>
    </select>
</p>
  <p>&nbsp;Vehicle_id:
    <select name="vehicle_id" class="validate[required] form-control" id="vehicle_id">
      <option value="">select</option>
      <?php
  
 
  $sql="select * from vehicle_details";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
      <option value="<?php echo $row['Vehicle_id'];?>"><?php echo $row['Vehicle_no'];?></option>
      <?php 
  }
  ?>
    </select>
  </p>
  <p>&nbsp;Leaving_date:
    <input name="Leaving_date" class="validate[required] form-control" type="date" id="Leaving_date">
  </p>
  <p>&nbsp;Reached_date:
    <input name="Reached_date" class="validate[required] form-control" type="date" id="Reached_date">
  </p>
  <p>&nbsp;Status:  
    <input name="status" class="validate[required] form-control" type="text" id="status">
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

