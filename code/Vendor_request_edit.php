<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
  <?php include('sidebar.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Vendor Request Details Form</h1>
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
            <div class="box-header"></div>
<?php
  include('../dbconnect/dbconnect.php');
  
  $id=$_REQUEST['id'];
  
  $sql="select * from vendor_request_details where Vendor_request_id  ='$id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  
 
?>

<form name="form1" id="formID" method="post" action="Vendor_Request_update.php">
  <p>&nbsp;Vendor_id:
        
    <select name="vendor_id" class="validate[required] form-control" id="vendor_id">
      <option value="">select</option>
      <?php
  
  
 
  $sql2="select * from vendors_details";
  $res2=mysqli_query($conn,$sql2);
  while($row2=mysqli_fetch_array($res2))
  {
  ?>
      <option value="<?php echo $row2['Vendor_id'];?>"<?php if($row2['Vendor_id']==$row['Vendor_id']) {?>selected <?php } ?>><?php echo $row2['Vendor_name'];?></option>
      <?php 
  }
  ?>
    </select>
</p>
  <p>&nbsp;Fuel_id:
    
    <select name="fuel_id" class="validate[required] form-control" id="fuel_id">
      <option value="">select</option>
      <?php
  
 
  $sql3="select * from fuel_detail";
  $res3=mysqli_query($conn,$sql3);
  while($row3=mysqli_fetch_array($res3))
  {
  ?>
      <option value="<?php echo $row3['Fuel_id'];?>"<?php if($row3['Fuel_id']==$row['Fuel_id']) {?>selected <?php } ?> ><?php echo $row3['Fuel_name'];?></option>
      <?php 
  }
  ?>
    </select>
  </p>
  <p>&nbsp;Quantity:
    <input name="quantity" class="validate[required,custom[onlyNumber]] form-control" type="text" id="quantity" value="<?php echo $row['Quantity'];?>">
</p>
  <p>&nbsp;Total_amount:
    <input name="total_amount" class="validate[required,custom[onlyNumber]] form-control" type="text" id="total_amount" value="<?php echo $row['Total_amount'];?>">
  </p>
  <p>&nbsp;Request_status:
    <input name="request_status" class="validate[required] form-control" type="text" id="request_status" value="<?php echo $row['Request_status'];?>">
</p>
<p>&nbsp;Request_date:
    <input name="Request_date" class="validate[required] form-control" type="date" id="Request_date" value="<?php echo $row['Request_date'];?>">
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
