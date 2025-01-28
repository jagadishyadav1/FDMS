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

.table img {
    max-width: 150px; /* Adjust image size */
    height: auto; /* Maintain aspect ratio */
}

.pull-right {
    margin-top: 10px;
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

    .btn-primary {
        margin-top: 10px;
    }
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
</style>

<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Vehicle <small>Details</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Vehicle</li>
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
                        <h3 class="box-title">Vehicle Details</h3>
                        <a href="Vehicle_Details.php" class="btn btn-primary pull-right"> + Add New</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 5%;">SL No</th>
                                    <th style="width: 20%;">Vehicle No</th>
                                    <th style="width: 25%;">Driver Name</th>
                                    <th style="width: 20%;">Contact No</th>
                                    <th style="width: 15%;">Vehicle Pic</th>
                                    <th style="width: 10%;">Edit</th>
                                    <th style="width: 10%;">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('../dbconnect/dbconnect.php');
                                $sl = 1;
                                $sql = "SELECT * FROM vehicle_details";
                                $res = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($res)) {
                                ?>
                                    <tr>
                                        <td><?php echo $sl++; ?></td>
                                        <td><?php echo htmlspecialchars($row['Vehicle_no']); ?></td>
                                        <td><?php echo htmlspecialchars($row['Driver_name']); ?></td>
                                        <td><?php echo htmlspecialchars($row['Contact_no']); ?></td>
                                        <td><img src="../uploads/<?php echo $row['Vehicle_photo']; ?>" alt="Vehicle Photo"></td>
                                        <td><a href="vehicle_detail_edit.php?id=<?php echo $row['Vehicle_id']; ?>">Edit</a></td>
                                        <td><a href="vehicle_detail_delete.php?id=<?php echo $row['Vehicle_id']; ?>" onClick="return confirm('Are you sure?')">Delete</a></td>
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
