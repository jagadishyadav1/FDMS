
<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
  <?php include('sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Vendor Request<small> Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Vendor Request </li>
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
              <h3 class="box-title">Vendor Request Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<a href="Vendor_Request.php" class="btn btn-primary"> + Add New</a>
              <table id="example1" class="table table-bordered table-striped">
		<thead>
  <tr>
    <th>sl no </th>
    <th>vendor_id</th>
    <th>Fuel_id</th>
    <th>Quantity</th>
    <th>T.Amount</th>
    <th>Request_status</th>
    <th>Request_date</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  </thead>
  <tbody>
   <?php
  include('../dbconnect/dbconnect.php');
  $sl=1;
  $sql="select * from vendor_request_details";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $sl++;?></td>
    <td>&nbsp;<?php echo $row['Vendor_id'];?></td>
    <td>&nbsp;<?php echo $row['Fuel_id'];?></td>
    <td>&nbsp;<?php echo $row['Quantity'];?></td>
    <td>&nbsp;<?php echo $row['Total_amount'];?></td>
    <td>&nbsp;<?php echo $row['Request_status'];?></td>
    <td>&nbsp;<?php echo $row['Request_date'];?></td>
    <td><a href="Vendor_request_edit.php?id=<?php echo $row['Vendor_request_id'];?>">Edit</a></td>
    <td><a href="Vendor_request_delete.php?id=<?php echo $row['Vendor_request_id'];?>"onClick="return confirm('Are you sure')">Delete</a></td>
  </tr>
  <?php
  
  }
  ?>
</tbody>
</table>
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





