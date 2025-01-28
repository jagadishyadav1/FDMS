<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>User Details Form</h1>
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
                        <h3 class="box-title">Enter User Details</h3>
                    </div>
                    <?php
                    include('../dbconnect/dbconnect.php');
                    
                    $uname = $_SESSION['uname'];
                    $sql = "SELECT * FROM user_details WHERE Email_id = '$uname'";
                    $res = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($res);
                    ?>
                    
                    <form name="form1" id="formID" method="post" action="Vendor_details_update.php">
                        <input type="hidden" value="<?php echo $row['User_id'];?>" name="User_id" />

                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label for="User_name">User Name:</label></td>
                                    <td>
                                        <input name="User_name" class="form-control" type="text" id="User_name" value="<?php echo htmlspecialchars($row['User_name'], ENT_QUOTES); ?>" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="User_address">User Address:</label></td>
                                    <td>
                                        <input name="User_address" class="form-control" type="text" id="User_address" value="<?php echo htmlspecialchars($row['User_address'], ENT_QUOTES); ?>" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="email">Email ID:</label></td>
                                    <td>
                                        <input name="email" class="form-control" type="text" id="email" value="<?php echo htmlspecialchars($row['Email_id'], ENT_QUOTES); ?>" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="contact_no">Contact No:</label></td>
                                    <td>
                                        <input name="contact_no" class="form-control" type="text" id="contact_no" value="<?php echo htmlspecialchars($row['Contact_no'], ENT_QUOTES); ?>" required>
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
