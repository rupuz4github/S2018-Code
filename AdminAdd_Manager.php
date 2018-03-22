<?php
include '../include/config.php';
if (isset($_POST['add'])) {
  # code...
  $name=$_POST['Name'];
  $userName=$_POST['UserName'];
  $password=md5($_POST['password']);
  $role="Manager";
  $location=$_POST['location'];
    $level="1";
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
    header('location:add_manager.php?done=1');
  }else{
    header('location:add_manager.php?error=0');
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
    <div class="col-lg-6">
      <table class="table">
        <thead>
          <tr>
            <th>Empl ID</th>
            <th>Name</th>
            <th>UserName</th>
            <th>Role</th>
            <th>Location</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
            $mgrID=$_SESSION['EmpID'];
            $sql="SELECT * FROM Employees WHERE Role='Manager'";
            $exc=mysqli_query($conn,$sql);
            while($team=mysqli_fetch_assoc($exc)){
              ?>
              <tr>
                <td><?=$team['EmpID']?></td>
                <td><?=$team['Name']?></td>
                <td><?=$team['UserName']?></td>
                <td><?=$team['Role']?></td>
                <td><?=$team['Location']?></td>
              </tr>
              <?php
            }
           ?>
        </tbody>
      </table>

    </div>
  </div>
</div>
<?php
include 'footer.php';
?>
