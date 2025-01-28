<style>
/* Ensure full width layout */
.content-wrapper {
    padding: 20px;
}

/* Header and breadcrumb styling */
.content-header h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

.breadcrumb {
    background-color: #f5f5f5;
    padding: 10px 15px;
}

.box-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.table {
    width: 100%;
    margin: 0 auto; /* Center table */
}

.table th, .table td {
    text-align: center; /* Center align all text */
    vertical-align: middle; /* Align vertically in the middle */
}

.table th {
    background-color: #007bff; /* Header background color */
    color: white; /* Header text color */
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: #f2f2f2; /* Striped background */
}

.table-hover tbody tr:hover {
    background-color: #e9ecef; /* Row hover color */
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .content-wrapper {
        padding: 10px;
    }

    .box-header {
        flex-direction: column;
        align-items: flex-start;
    }
}
</style>

<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User Request <small>Details</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>User Request</li>
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
                        <table id="example1" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>User</th>
                                    <th>Fuel</th>
                                    <th>Vehicle ID</th>
                                    <th>MAP</th>
                                    <th>Quantity</th>
                                    <th>Fuel Amount</th>
                                    <th>Tran Amount</th>
                                    <th>Req Status</th>
                                    <th>Req Date</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('../dbconnect/dbconnect.php');
                                $sl = 1;
                                $sql = "SELECT * FROM user_request_details ur, user_details ud, fuel_detail fd WHERE ur.User_id = ud.User_id AND ur.Fuel_id = fd.Fuel_id";
                                $res = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($res)) {
                                ?>
                                    <tr>
                                        <td><?php echo $sl++; ?></td>
                                        <td><?php echo htmlspecialchars($row['User_name']); ?></td>
                                        <td><?php echo htmlspecialchars($row['Fuel_name']); ?></td>
                                        <td><?php echo htmlspecialchars($row['Vehicle_id']); ?></td>
                                        <td>
                                            <a href="show_map.php?lang=<?php echo $row['User_lang']; ?>&lat=<?php echo $row['User_latt']; ?>" onclick="return openMapPopup(this.href);">MAP</a>
                                        </td>
                                        <td><?php echo htmlspecialchars($row['Quantity']); ?></td>
                                        <td><?php echo htmlspecialchars($row['Fuel_amount']); ?></td>
                                        <td><?php echo htmlspecialchars($row['Total_amount']); ?></td>
                                        <td><?php echo htmlspecialchars($row['Request_status']); ?></td>
                                        <td><?php echo htmlspecialchars($row['Request_date']); ?></td>
                                        <td>
                                           
                                        </td>
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
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- page script -->
<script>
$(function () {
    $("#example1").DataTable();
});
</script>
