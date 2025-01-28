<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
  <?php include('sidebar.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Payments Details Form</h1>
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
  
  $sql="select * from payments where Payment_id='$id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  
 
?>

<form name="form1" id="formID" method="post" action="payments_update.php">
<input type="hidden" value="<?php echo $row['Payment_id'];?>" name="Payment_id" />
<p>&nbsp;User_request_id:
    <select name="User_request_id" class="validate[required] form-control" id="User_request_id">
      <option value="">select</option>
      <?php
  
  
  $sql2="select * from user_request_details";
  $res2=mysqli_query($conn,$sql2);
  while($row2=mysqli_fetch_array($res2))
  {
  ?>
      <option value="<?php echo $row2['User_request_id'];?>" <?php if($row2['User_request_id']==$row['User_request_id']) {?>selected <?php } ?> ><?php echo $row2['Request_status'];?></option>
      <?php 
  }
  ?>
    </select>
</p>
  <p>&nbsp;Payment_amount:
    <input name="payment_amount" class="validate[required,custom[onlyNumber]] form-control" type="text" id="payment_amount" value="<?php echo $row['Payment_amount'];?>">
</p>
  <p>&nbsp;Payment_transaction_no:
    <input name="payment_transaction_no" class="validate[required] form-control" type="text" id="payment_transaction_no" value="<?php echo $row['Payment_transaction_no'];?>">
  </p>
  <p>&nbsp;Payment_date:
    <input name="payment_date" class="validate[required] form-control" type="date" id="payment_date" value="<?php echo $row['Payment_date'];?>">
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
