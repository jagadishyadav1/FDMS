<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
  <?php include('sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Customer Details
        <small>Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Customer</a></li>
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
              <h3 class="box-title">Customer Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<a href="customer.php" class="btn btn-primary"> + Add New Customer</a>
              <table id="example1" class="table table-bordered table-striped">

<thead>
  <tr>
    <td width="48">S.No</td>
    <td width="143">CUSTOMER NAME </td>
    <td width="140">PHONE NUMBER </td>
    <td width="73">E MAIL</td>
    <td width="169">DATE BECOME CUST </td>
    <td width="80">CITY</td>
    <td width="72">PINCODE</td>
    <td width="53">EDIT</td>
    <td width="94">DELETE</td>
  </tr>
</thead>
<tbody>  
<?php
$sn=1;
   include("db_connection.php");
   $sql= "select * from  customer";
   $res=mysql_query($sql);
   while($row=mysql_fetch_array($res))
   {
?>
  <tr>
    <td><?php echo $sn++; ?></td>
    <td><?php echo $row["cust_name"]; ?></td>
    <td><?php echo $row["cust_phone"]; ?></td>
    <td><?php echo $row["cust_email"]; ?></td>
    <td><?php echo $row["date_become_cust"]; ?></td>
    <td><?php echo $row["cust_city"]; ?></td>
    <td><?php echo $row["pincode"]; ?></td>
    <td><a href="customeredit.php?cust_id=<?php echo $row['cust_id']; ?>">Edit</a></td>  
    <td><a href="customerdelete.php?cid=<?php echo $row['cust_id']; ?>">Delete</a></td>  
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
 
<?php include('footer.php'); ?>
<!-- jQuery 2.2.3 -->
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