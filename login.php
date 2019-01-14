<!DOCTYPE html>
<html>
<head>
  <title>

  </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
  <body>
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <h2>Login Form:</h2>
      <form action="validation.php" method="post">
        <div class="form-group">
          <label>username</label>
          <input type="text" name="name" class="form-control ">
        </div>
        <div class="form-group">
          <label>password</label>
          <input type="password" name="passwork" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
    <div class="col-lg-6">
      <h2>Registration:</h2>
      <form action="registration.php" method="post">
        <div class="form-group">
          <label>username</label>
          <input type="text" name="name" class="form-control ">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="Password" name="passwork" class="form-control ">
        </div>
        <div class="form-group">
        <label>Contact</label>
        <input type="text" name="contact" class="form-control">
        </div>
        <div class="form-group">
          <label>Age</label>
          <input type="text" name="age" class="form-control">
        </div>
        <div class="form-group">
          <h5>Gender</h5>
          <label>male</label><input type="radio" name="gender" value="male" class="form-control"><br>
          <label>female</label><input type="radio" name="gender" value="female" class="form-control"><br>
          <label>others</label><input type="radio" name="gender" value="Others" class="form-control"><br>
          </div>
          <h2>Qualification</h2>
          <table class="form-group">
            <tr>
              <th>Board</th>
              <th>Year</th>
              <th>Grade</th>
            </tr>
            <tr>
              <th><input type="text" name="board1" class="form-control"></th>
              <th><input type="text" name="year1" class="form-control"></th>
              <th><input type="text" name="grade1" class="form-control"></th>
            </tr>
            <tr>
              <th><input type="text" name="board2" class="form-control"></th>
              <th><input type="text" name="year2" class="form-control"></th>
              <th><input type="text" name="grade2" class="form-control"></th>
            </tr>
          </table>
        <button type="submit" class="btn btn-primary">Sign In</button>
      </form>
    </div>

  </div>
</div>

</body>
  </html>
