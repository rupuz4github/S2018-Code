nclude '../include/config.php';
if (isset($_POST['add'])) {
  # code...
  $name=$_POST['Name'];
  $userName=$_POST['UserName'];
  $password=md5($_POST['password']);
  $role=$_POST['role'];
  $location=$_POST['location'];
  if($role=="Manager"){
    $level="1";
  }else{
    $level="2";
  }
  $mgrID=$_SESSION['EmpID'];
  $sx="INSERT INTO `Employees`(`Name`, `UserName`, `Role`, `Password`, `Level`, `Location`, `MgrID`) VALUES (
    '$name',
    '$userName',
    '$role',
    '$password',
    '$level',
    '$location',
    '$mgrID'
  )";
  $ec=mysqli_query($conn,$sx);
  if(mysqli_insert_id($conn)!=""){
    header('location:add_team.php?done=1');
  }else{
    header('location:add_team.php?error=0');
  }
}
include 'header.php';
?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h3>Add Team</h3>
    </div>
    <div class="col-lg-4">
      <?php
        if(isset($_GET['done'])){
          ?>
          <div class="alert alert-success">Added Successfully</div>
          <?php
        }
       ?>
      <?php
        if(isset($_GET['error'])){
          ?>
          <div class="alert alert-danger">Error Adding Please Try Again</div>
          <?php
        }
       ?>
      <form class="" action="" method="post">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="Name" class="form-control" id="" placeholder="">
          <p class="help-block">Name of Employee.</p>
        </div>
        <div class="form-group">
          <label for="">UserName</label>
          <input type="text" name="UserName" class="form-control" id="" placeholder="">
          <p class="help-block">Unique username of employee.</p>
        </div>
        <div class="form-group">
            <label for="">Role</label>
            <select class="form-control" name="role">
              <option value="">Select</option>
              <option value="Manager">Manager</option>
              <option value="Staff">Staff</option>
            </select>
        </div>
        <div class="form-group">
          <label for="">Location</label>
          <input type="text" name="location" class="form-control" id="" placeholder="">
        <!-- <p class="help-block">Help text here.</p> -->
        </div>
        <div class="form-group">
          <label for="">Login Password</label>
          <input type="text" name="password" class="form-control" id="" placeholder="">
          <!-- <p class="help-block">Help text here.</p> -->
        </div>
        <div class="form-group">
        <label for=""></label>
        <input type="submit" class="form-control btn btn-primary" name="add" value="Add Now" id="" placeholder="">
        <!-- <p class="help-block">Help text here.</p> -->
      </div>
      </form>
    </div>
  </div>
</div>
<?php
include 'footer.php';
?>
