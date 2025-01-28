<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Vehicle Details Form</h1>
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
                        <h3 class="box-title">Enter Vehicle Details</h3>
                    </div>
                    <?php
                    include('../dbconnect/dbconnect.php');
                    
                    $uname = $_SESSION['uname'];
                    $sql = "SELECT * FROM vehicle_details WHERE Vehicle_no = '$uname'";
                    $res = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($res);
                    ?>
                    
                    <form name="form1" id="formID" method="post" action="Vehicle_Details_update.php">
                        <input type="hidden" value="<?php echo $row['Vehicle_id'];?>" name="Vehicle_id" />

                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label for="vehicle_no">Vehicle No:</label></td>
                                    <td>
                                        <input name="vehicle_no" class="form-control" type="text" id="vehicle_no" value="<?php echo htmlspecialchars($row['Vehicle_no'], ENT_QUOTES); ?>" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="driver_name">Driver Name:</label></td>
                                    <td>
                                        <input name="driver_name" class="form-control" type="text" id="driver_name" value="<?php echo htmlspecialchars($row['Driver_name'], ENT_QUOTES); ?>" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="contact_no">Contact No:</label></td>
                                    <td>
                                        <input name="contact_no" class="form-control" type="text" id="contact_no" value="<?php echo htmlspecialchars($row['Contact_no'], ENT_QUOTES); ?>" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="vehicle_photo">Vehicle Photo:</label></td>
                                    <td>
                                        <img src="../uploads/<?php echo htmlspecialchars($row['Vehicle_photo'], ENT_QUOTES); ?>" width="200" height="200" alt="Vehicle Photo">
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="form-actions">
                            <input type="submit" class="btn btn-primary" name="Submit" value="Update">
                            <input type="reset" class="btn btn-danger" name="Reset" value="Reset">
                        </div>
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

<!-- Add some custom styles -->
<style>
    .content-wrapper {
        padding: 20px;
    }
    .box-title {
        font-weight: bold;
    }
    .table {
        margin-top: 20px;
        border-collapse: collapse;
    }
    .table th, .table td {
        padding: 15px;
        border: 1px solid #ddd;
    }
    .table th {
        background-color: #f2f2f2;
        text-align: left;
    }
    .table-striped tbody tr:nth-child(odd) {
        background-color: #f9f9f9;
    }
    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
    }
    .form-actions {
        margin-top: 20px;
    }
    .form-actions input {
        margin-right: 10px;
    }
</style>
