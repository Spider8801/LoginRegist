<?php
session_start();

$con= mysqli_connect('localhost','root');
if($con){
  echo "connection successful ";
}else{
  echo "no connection ";
}
?>
