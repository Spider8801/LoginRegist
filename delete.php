<?php
//include('home.php');
//include('db.php');
if(!isset($_SESSION['username'])){
header('location:login.php');}
$name=$_SESSION['username'];
// var_dump($name);
//mysqli_close($con);
$con=mysqli_connect("localhost","root","","sessionpractical");
// var_dump($con);
if(isset($_POST['dl']))
{
  $product= $_POST['dl'];
// var_dump($product);
  $sql="DELETE FROM '$name' WHERE product='$product'  ";
  $res= mysql_query($sql) or die("Failed".mysql_error());
  echo "<meta http-equiv='refresh' content='0;url='login.php'>";
}
 ?>
