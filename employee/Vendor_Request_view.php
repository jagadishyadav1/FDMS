
<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
  <?php include('sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content --><style type="text/css">
<!--
.style1 {
	font-family: sans-serif;
	font-size: 13.12px;
	color: rgb(0, 0, 0);
	background-color: rgb(255, 255, 255);
}
-->
</style>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       User Request<small> Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>User Request </li>
        <li class="active">Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">User Request Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			
              <table id="example1" class="table table-bordered table-striped">
		<thead>
  <tr>
    <th>Sl no </th>
    <th>User</th>
    <th>Fuel</th>

    <th>MAP</th>
    <th>Quantity</th>
    <th>Fuel Amount</th>
    <th>Req_status</th>
    <th>Req_date</th>
	    <th>Action</th>
    
    <th>Reject</th>
  </tr>
  </thead>
  <tbody>
   <?php
  include('../dbconnect/dbconnect.php');
  $sl=1;
  
  $sql="select * from user_request_details ur,user_details ud,fuel_detail fd where ur.User_id=ud.User_id and ur.Fuel_id=fd.Fuel_id and ur.Request_status='PENDING'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $sl++;?></td>
    <td>&nbsp;<?php echo $row['User_name'];?></td>
    <td>&nbsp;<?php echo $row['Fuel_name'];?></td>
   <td>&nbsp;<a href="show_map.php?lang=<?php echo $row['User_lang'];?>&lat=<?php echo $row['User_latt'];?>" onclick="return openMapPopup(this.href);">MAP</a></td>
    <td>&nbsp;<?php echo $row['Quantity'];?></td>
	<td>&nbsp;<?php echo $row['Fuel_amount'];?></td>
    <td>&nbsp;<?php echo $row['Request_status'];?></td>
    <td>&nbsp;<?php echo $row['Request_date'];?></td>
	 <td><a href="request_accept_form.php?id=<?php echo $row['User_request_id'];?>" onClick="return confirm('Are you sure')" class="btn btn-primary">Accept</a></td>
    <td><a href="Vendor_request_delete.php?id=<?php echo $row['User_request_id'];?>"onClick="return confirm('Are you sure')" class="btn btn-danger">Reject</a></td>
  </tr>
  <?php
  
  }
  ?>
</tbody>
</table>
<script type="text/javascript">
  function openMapPopup(url) {
    window.open(url, 'mapPopup', 'width=800,height=600,scrollbars=yes');
    return false; // Prevents the default link action
  }
</script>

</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<?php include('footer.php'); ?> <!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>





