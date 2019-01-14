<?php
include('db.php');
// include('validation.php');
// session_start();
//var_dump($_SESSION);
if(!isset($_SESSION['username'])){
header('location:login.php');}
$name=$_SESSION['username'];
//var_dump($name);
mysqli_close($con);
$con=mysqli_connect("localhost","root","","sessionpractical");
$sql="select * from ". $name;
//var_dump($sql);
$result=mysqli_query($con,$sql) ;
//var_dump($result);
$resultCheck=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <div class="container">
  <h2>Welcome <?php echo $_SESSION['username']; ?></h2>
  <table class="form-group">
    <tr>
      <th>Product</th>
      <th>Company</th>
      </tr>
<?php
//var_dump($resultCheck);
if($resultCheck>0);
{
  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
 ?>
  <tr>
  <td><?php echo $row['product']; ?></td>
  <td><?php echo $row['company']; ?></td>
<td><a href='edit.php?ed=$row[product]&ed1=$row[company]'>edit</a></td>
<td><a href='delete.php?dl=$row[product]'>delete</a></td>
     </tr>
     <?php
     }
     }
mysqli_close($con);
      ?>
   </table>

   <a href="logout.php">LOGOUT</a>
   <a href="profile.php">SEE USER PROFILE</a>
</div>

 </body>
 </html>
