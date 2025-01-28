<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <?php include('medatada.php');?>
   <?php include('header.php');?>
   <?php include('sidebar.php');?>
   <style type="text/css">
<!--
.style1 {font-weight: bold}
-->
   </style>
<body>
  <script>
  $('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
  </script>
        
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <span class="style1">Change PAssword </span><small>.</small>
                        </h1>
               </div>
              </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="style1">Change PAssword </span></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
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
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    
                                   
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<?php include('footer.php');?>
			  
			</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
   
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/jquery.metisMenu.js"></script>
    
    <script src="assets/js/custom-scripts.js"></script> 
  <?php include('val.php'); ?>
   
</body>
</html>
