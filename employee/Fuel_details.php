<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
  <?php include('sidebar.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Fuel Details Form</h1>
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


<form name="form1" id="formID" method="post" action="Fuel_details_insert.php">
  <p> &nbsp;Fuel Name:
    <input name="fuel_name" class="validate[required,custom[onlyLetter]] form-control" type="text" id="fuel_name">
  </p>
  <p>&nbsp;Fuel_type:
    <input name="fuel_type" class="validate[required] form-control" type="text" id="fuel_type">
  </p>
  <p>&nbsp;Fuel_amount:
    <input name="fuel_amount" class="validate[required,double] form-control" type="text" id="fuel_amount">
  </p>
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
