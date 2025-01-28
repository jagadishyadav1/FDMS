<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<style type="text/css">
    .style1 {
        font-family: sans-serif;
        font-size: 13.12px;
        color: rgb(0, 0, 0);
        background-color: rgb(255, 255, 255);
    }
    /* General content wrapper styling */
    .content-wrapper {
        padding: 20px;
    }

    /* Table styling */
    .table {
        width: 90%; /* Set table width */
        margin: 0 auto; /* Center the table */
        border-collapse: collapse;
    }

    .table th, .table td {
        text-align: center;
        vertical-align: middle;
        padding: 10px; /* Moderate padding */
        border: 1px solid #dee2e6; /* Light border color */
    }

    .table th {
        background-color: #007bff; /* Header background color */
        color: white; /* Header text color */
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f9f9f9; /* Light gray for odd rows */
    }

    .table-hover tbody tr:hover {
        background-color: #e9ecef; /* Light hover color */
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .content-wrapper {
            padding: 10px;
        }

        .table {
            width: 100%; /* Full width on smaller screens */
        }
    }
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User Request Accepted<small> Details</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>User Accepted Request</li>
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
                        <h3 class="box-title">User Request Accepted Details</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>User</th>
                                    <th>Fuel</th>
                                    <th>Vehicle No</th>
                                    <th>MAP</th>
                                    <th>Route Map</th>
                                    <th>Quantity</th>
                                    <th>Fuel Amount</th>
                                    <th>Total Fuel Amt</th>
                                    <th>Tran Amt</th>
                                    <th>Total Amount</th>
                                    <th>Req Status</th>
                                    <th>Req Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('../dbconnect/dbconnect.php');
                                $sl = 1;
                                $uname = $_SESSION['uname'];
                                $sql = "SELECT ud.User_name,fd.Fuel_name,vd.Vehicle_no,ur.User_lang,ur.User_latt,ur.User_request_id,ur.Quantity,fd.Fuel_amount,ur.Total_amount,ur.Request_status,ur.Request_date,ud.Email_id,ud.Contact_no FROM user_request_details ur 
                                        JOIN user_details ud ON ur.User_id = ud.User_id 
                                        JOIN fuel_detail fd ON ur.Fuel_id = fd.Fuel_id 
                                        JOIN vehicle_details vd ON vd.Vehicle_id = ur.Vehicle_id 
                                        WHERE (ur.Request_status = 'ACCEPTED' OR ur.Request_status = 'PAID' OR ur.Request_status = 'DELEVERED') 
                                        AND ud.Email_id = '$uname'";

                                $res = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($res)) {
                                ?>
                                    <tr>
                                        <td><?php echo $sl++; ?></td>
                                        <td><?php echo htmlspecialchars($row['User_name']); ?></td>
                                        <td><?php echo htmlspecialchars($row['Fuel_name']); ?></td>
                                        <td><?php echo htmlspecialchars($row['Vehicle_no']); ?></td>
                                        <td><a href="show_map.php?lang=<?php echo $row['User_lang']; ?>&lat=<?php echo $row['User_latt']; ?>" onclick="return openMapPopup(this.href);">MAP</a></td>
                                        <td><a href="live_map.php?lang=<?php echo $row['User_lang']; ?>&lat=<?php echo $row['User_latt']; ?>&id=<?php echo $row['User_request_id']; ?>" onclick="return openMapPopup(this.href);">Route MAP</a></td>
                                        <td><?php echo $row['Quantity']; ?></td>
                                        <td><?php echo $row['Fuel_amount']; ?></td>
                                        <td><?php echo $row['Quantity'] * $row['Fuel_amount']; ?></td>
                                        <td><?php echo $row['Total_amount']; ?></td>
                                        <td><?php echo ($row['Quantity'] * $row['Fuel_amount']) + $row['Total_amount']; ?></td>
                                        <td><?php echo $row['Request_status']; ?></td>
                                        <td><?php echo $row['Request_date']; ?></td>
                                        <td>
                                            <?php if ($row['Request_status'] == 'PAID' || $row['Request_status'] == 'DELEVERED') { } else { ?>
                                                <a href="pay_now.php?id=<?php echo $row['User_request_id']; ?>&name=<?php echo $row['User_name']; ?>&emailid=<?php echo $row['Email_id']; ?>&contact_no=<?php echo $row['Contact_no']; ?>&payAmount=<?php echo ($row['Quantity'] * $row['Fuel_amount']) + $row['Total_amount']; ?>" onClick="return confirm('Are you sure?')" class="btn btn-success">Pay Now</a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
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
<!-- Page script -->
<script>
$(function () {
    $("#example1").DataTable();
});
</script>
