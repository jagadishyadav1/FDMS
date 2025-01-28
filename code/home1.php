<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
  <?php include('sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
	  <?php $uname=$_SESSION['uname']; ?>
        Wel Come to Admin (<?php echo $uname; ?>)
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Admin</li>
      </ol>
    </section>
	<p>&nbsp;</p>
		<p>&nbsp;</p>
<img src="../img/banner.png" width="100%">
</div>
  <!-- /.content-wrapper -->
  <?php include('footer.php'); ?>
   <?php include('script.php'); ?>