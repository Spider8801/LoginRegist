<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<?php
include('db.php');
if(!isset($_SESSION['username'])){
header('location:login.php');}
$name=$_SESSION['username'];
//var_dump($name);
mysqli_close($con);
$con=mysqli_connect("localhost","root","","sessionpractical");
$sql="SELECT * FROM signin WHERE name= '$name' ";
// var_dump($sql);
$result=mysqli_query($con,$sql) ;
// var_dump($result);
$resultCheck=mysqli_num_rows($result);

if($resultCheck>0);
{
  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
 ?>
 <div class="container">
     <h2>User Profile</h2>
     <table class="table table-bordered">
       <thead>
       <tr>
         <th>NAME</th>
         <th>CONTACT</th>
         <th>AGE</th>
         <th>GENDER</th>
       </th>
     </thead>
     <tr>
       <td><?php echo $row['name'] ;?></td>
       <td><?php echo $row['contact'] ; ?></td>
       <td><?php echo $row['gender'] ; ?></td>
       <td><?php echo $row['age'] ; ?></td>
     </tr>
   </table>
 </div>
 <div class="container">
  <h2>Qualification</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Board</th>
        <th>Year</th>
        <th>Grade</th>
      </tr>
    </thead>
     <tr>
       <td><?php echo $row['board1'] ; ?></td>
       <td><?php echo $row['year1'] ; ?></td>
       <td><?php echo $row['grade1'] ; ?></td>
     </tr>
     <tr>
       <td><?php echo $row['board2'] ; ?></td>
       <td><?php echo $row['year2'] ; ?></td>
       <td><?php echo $row['grade2'] ; ?></td>
     </tr>
   </table>
 </div>
 <?php
}
}
mysqli_close($con);
?>
 <a href="logout.php">LOGOUT</a>
</body>
</html>
