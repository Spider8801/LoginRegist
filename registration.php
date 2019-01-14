<?php
session_start();
//header('location:login.php');
$con= mysqli_connect('localhost','root');
if($con){
  echo "connection successful ";
}else{
  echo "no connection ";
}

mysqli_select_db($con,'sessionpractical');
$name= $_POST['name'];
$passwork= $_POST['passwork'];
$contact=$_POST['contact'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$board1=$_POST['board1'];
$year1=$_POST['year1'];
$grade1=$_POST['grade1'];
$board2=$_POST['board2'];
$year2=$_POST['year2'];
$grade2=$_POST['grade2'];
$q="select * from signin where name= '$name' && passwork='$passwork' ";
$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num == 1){
  echo "Duplicate data";
}else{
  $qy=" insert into signin(name, passwork,contact,age,gender,board1,year1,grade1,board2,year2,grade2) values ('$name','$passwork','$contact','$age','$gender','$board1','$year1','$grade1','$board2','$year2','$grade2') ";
  mysqli_query($con,$qy);
}
 ?>
