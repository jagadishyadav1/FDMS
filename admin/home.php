<style>
/* Example styles */
body {
  font-family: Arial, sans-serif;
}

.content-wrapper {
  padding: 20px;
}

.content-header {
  margin-bottom: 20px;
}

h1 {
  font-size: 24px;
  color: #333;
}

h2 {
  font-size: 20px;
  color: #555;
}

/* Responsive design */
@media (max-width: 768px) {
  .content-wrapper {
    padding: 10px;
  }

  h1, h2 {
    font-size: 18px;
  }
}
</style>
<?php 

include('meta_tags.php'); 
include('header.php'); 
include('sidebar.php'); 

// Check if session variable for username is set
$uname = isset($_SESSION['uname']) ? $_SESSION['uname'] : 'Guest';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Welcome to Admin (<?php echo htmlspecialchars($uname, ENT_QUOTES, 'UTF-8'); ?>)
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
      <li class="active">Admin</li>
    </ol>
  </section>

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <h2>Welcome to Admin</h2>
</div>
<!-- /.content-wrapper -->

<?php 
include('footer.php'); 
include('script.php'); 
?>
