
<?php
if(!isset($_SESSION['username'])){
header('location:login.php');}
$name=$_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <form action="" method="post">
    <label>Product</label>
    <input type="text" name="product" value="<?php echo $_POST['ed']; ?>"/>
    <input type="text" name="company" value="<?php echo $_POST['ed1']; ?>"/>
    <input type="submit" name="submit" value="Update" />
</form>

  <?php
$pro=$_POST['ed'];
// var_dump($name);
//mysqli_close($con);
$con=mysqli_connect("localhost","root","","sessionpractical");
// var_dump($con);
if($_POST['submit'])
 {
   $product= $_POST['product'];
   $company= $_POST['company'];
   $query="UPDATE '$name' SET product='$product' , company='$company' WHERE product='$pro'";
   $data= mysqli_query($con, $query);
   if($data){
     echo "Record Updated successfully";
   }
   else {
     echo "Record Not Updated";
   }
 }
 ?>
