<?php
include('db.php');

mysqli_select_db($con,'sessionpractical');
$name= $_POST['name'];
$passwork= $_POST['passwork'];
// $contact=$_POST['contact'];
// $age=$_POST['age'];
// $gender=$_POST['gender'];
$q="select * from signin where name= '$name' && passwork='$passwork' ";
$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);
//var_dump($result);
var_dump($num);
if($num == 1){
echo "if";
  $_SESSION['username']=$name;
//  // var_dump($_SESSION);
  header('location:home.php');
}else{
  echo "else";
// header('location:login.php');
}
 ?>
