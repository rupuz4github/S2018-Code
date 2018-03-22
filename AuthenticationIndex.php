<?php
include 'include/config.php';
if(isset($_POST['login'])){
  $username=$_POST['email'];
  $password=md5($_POST['password']);
  $sql="SELECT * FROM Employees WHERE `UserName`='$username' AND `Password`='$password'";
  // echo $sql;
  // exit;
  $sx=mysqli_query($conn, $sql);
  if (mysqli_num_rows($sx)!="") {
      $data=mysqli_fetch_assoc($sx);
      if($data['Level']=='1'){
        $_SESSION=array_merge($_SESSION, $data);
        header('location:manager/dashboard.php');
      }else {
        # code...
        $_SESSION=array_merge($_SESSION, $data);
        header('location:employee/dashboard.php');
      }
    } else {
        header('location:index.php?error=1');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to IT Audit Department</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-12" style="padding-top:20px;">
          <h3 class="text-center">Welcome to IT Audit Department</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-lg-offset-4" style="padding-top:50px;">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Login</h3>
            </div>
            <div class="panel-body">
              <form class="" action="" method="post">
                <div class="form-group">
                  <label for="">Username</label>
                  <input type="text" class="form-control" name="email" id="" placeholder="">
                  <!-- <p class="help-block">Help text here.</p> -->
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" class="form-control" name="password" id="" placeholder="">
                  <!-- <p class="help-block">Help text here.</p> -->
                </div>
                <div class="form-group">
                  <label for=""></label>
                  <input type="submit" name="login" class="form-control btn btn-primary" value="Login">
                  <!-- <p class="help-block">Help text here.</p> -->
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
