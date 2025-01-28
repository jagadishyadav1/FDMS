<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
  <?php include('sidebar.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     Change Password</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="#">User</a></li>
        <li class="active">Change psw</li>
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

<form name="form1" id="formID" method="post" action="changepassword.php" class="form-horizontal">
  <table class="table table-striped table-bordered" id="example">
    
    <tr>
      <td width="163"><strong>Old Password*</strong></td>
      <td width="328"><input name="old_password" type="text" id="old_pwd" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td><strong>New Password* </strong></td>
      <td><input name="new_password" type="text" id="password" maxlength="6" minlength="6" title="Enter 6 characters minimum" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td><strong>Confirm Password* </strong></td>
      <td><input name="confirm_password" type="text" id="con_pwd" id="confirm_password" minlength="6" maxlength="6" title="Enter 6 characters minimum" class="form-control validate[required]"><span id='message'></span></td>
    </tr>
    <tr>
      <td height="29" colspan="2"><div align="center">
      <input type="submit" name="Submit" value="Submit" class="btn btn-success">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
       </div></td>
    </tr>
  </table>
  <div align="center"></div>
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
