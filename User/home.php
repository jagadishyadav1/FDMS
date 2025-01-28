<?php include('meta_tags.php'); ?>
<?php include('header.php'); ?>
  <?php include('sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
	  <?php $uname = isset($_SESSION['uname']) ? $_SESSION['uname'] : 'Guest'; ?>
        Wel Come to User (
       <?php echo htmlspecialchars($uname, ENT_QUOTES, 'UTF-8'); ?>)
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
        <li class="active">User</li>
      </ol>
    </section>
	<p>&nbsp;</p>
		<p>&nbsp;</p>
<h2>Wel come to User</h2>
</div>
  <!-- /.content-wrapper -->
  <?php include('footer.php'); ?>
   <?php include('script.php'); ?>