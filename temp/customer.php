<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
  <?php include('sidebar.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Customer Form</h1>
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
              <h3 class="box-title">Customer Details </h3>
            </div>





<form name="form1" id="formID" method="post" action="customerinsert.php">
  <table width="386" height="301" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">CUSTOMER</div></td>
    </tr>
    <tr>
      <td width="165" height="37">CUSTOMER NAME </td>
      <td width="254"><input type="text" name="cust_name" id="cust_name" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td height="34">PHONE NUMBER </td>
      <td><input type="text" name="cust_phone" id="cust_phone"  class="validate[required,custom[mobile]]"></td>
    </tr>
    <tr>
      <td height="37">EMAIL</td>
      <td><input type="text" name="cust_email" id="cust_email"  class="validate[required,custom[email]]"></td>
    </tr>
    <tr>
      <td height="35">CITY</td>
      <td><input type="text" name="cust_city" id="cust_city"  class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td height="40">PINCODE</td>
      <td><input type="text" name="pincode" id="pincode" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td height="53">DATE BECOME CUST </td>
      <td><input type="text" name="date_become_cust" id="date_become_cust" value="<?php echo date('Y-m-d')?>" class="validate[required,custom[date]]" readonly="" ></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
        <input type="reset" name="reset" value="Reset" class="btn btn-danger">
      </div></td>
    </tr>
  </table>
 
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
