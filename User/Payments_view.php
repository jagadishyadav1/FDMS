<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<style>
/* General content wrapper styling */
.content-wrapper {
    padding: 20px;
}

/* Header styling */
.content-header h1 {
    font-size: 24px;
    margin-bottom: 15px;
    color: #333;
}

.breadcrumb {
    background-color: #f5f5f5;
    padding: 10px 15px;
    border-radius: 4px;
}

/* Box styling */
.box {
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Box header styling */
.box-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px;
    background-color: #007bff;
    color: white;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}

.box-header h3 {
    margin: 0;
}

/* Table styling */
.table {
    width: 100%;
    margin: 20px 0; /* Add spacing above and below the table */
    border-collapse: collapse;
}

.table th, .table td {
    text-align: center;
    vertical-align: middle;
    padding: 12px; /* Increase padding for better spacing */
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

/* Button styling */
.btn {
    border-radius: 5px; /* Rounded corners */
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

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Payments <small>Details</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Payments</li>
            <li class="active">Details</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Payments Details</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>User Name</th>
                                    <th>Amount</th>
                                    <th>Transaction No</th>
                                    <th>Payment Date</th>
                                    <th>Invoice</th> <!-- New Column for Invoice -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('../dbconnect/dbconnect.php');
                                $sl = 1;
                                $uname = $_SESSION['uname'];
                                $sql = "SELECT p.*, ur.User_request_id, ud.User_name 
                                        FROM payments p 
                                        JOIN user_request_details ur ON p.User_request_id = ur.User_request_id 
                                        JOIN user_details ud ON ur.User_id = ud.User_id 
                                        WHERE ud.Email_id = '$uname'";
                                $res = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($res)) {
                                ?>
                                <tr>
                                    <td><?php echo $sl++; ?></td>
                                    <td><?php echo htmlspecialchars($row['User_name']); ?></td>
                                    <td><?php echo htmlspecialchars($row['Payment_amount']); ?></td>
                                    <td><?php echo htmlspecialchars($row['Payment_transaction_no']); ?></td>
                                    <td><?php echo htmlspecialchars($row['Payment_date']); ?></td>
                                    <td>
                                        <a href="invoice.php?payment_id=<?php echo $row['User_request_id']; ?>" class="btn btn-primary">Generate Invoice</a>
                                    </td> <!-- Link to Invoice Generation -->
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
<!-- Page script -->
<script>
$(function () {
    $("#example1").DataTable();
});
</script>



 