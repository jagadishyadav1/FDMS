<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
  <?php include('sidebar.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Vendor Details Form</h1>
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
  
  $sql="select * from vendors_details where Vendor_id='$id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  
 
?>

<form name="form1" id="formID" method="post" action="Vendor_details_update.php">
<input type="hidden" value="<?php echo $row['Vendor_id'];?>" name="Vendor_id" />
<p>&nbsp;Vendor_name:
    <input name="vendor_name" class="validate[required,custom[onlyLetter]] form-control" type="text" id="vendor_name" value="<?php echo $row['Vendor_name'];?>">
  </p>
  <p>&nbsp;Vendor_address:
    <input name="vendor_address" class="validate[required] form-control" type="text" id="vendor_address" value="<?php echo $row['Vendor_address'];?>">
</p>
  <p>&nbsp;Email_id:
    <input name="email" class="validate[required,custom[email]] form-control" type="text" id="email" value="<?php echo $row['Email_id'];?>">
</p>
  <p>&nbsp;Contact_no:
    <input name="contact_no" class="validate[required,custom[mobile]] form-control" type="text" id="contact_no" value="<?php echo $row['Contact_no'];?>">
  </p>
  <p>&nbsp;Owner_name:
    <input name="owner_name" class="validate[required,custom[onlyLetter]] form-control" type="text" id="owner_name" value="<?php echo $row['Owner_name'];?>">
  </p>
  <p>&nbsp;GSTN_No:
    <input name="GSTN" class="validate[required] form-control" type="text" id="GSTN" value="<?php echo $row['GSTN_No'];?>">
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
