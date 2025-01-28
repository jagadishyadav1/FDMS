<?php
session_start();
include('dbconnect/dbconnect.php');

$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from login where username='$username' and Password='$password'";
$res=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($res))
{
$type=$row['type'];
$_SESSION["uname"]=$username;

if($type=='admin')
{
header('location:admin/home.php');
}

else if($type=='user')
{
header('location:User/home.php');
}


else if($type=='employee')
{
header('location:employee/home.php');
}


}
else
{
?>
<script>
alert('Invalid Username Or Password');
history.back();
</script>
<?php
}
?>