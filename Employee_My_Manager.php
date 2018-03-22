nclude '../include/config.php';
include 'header.php';
?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h3>My Manager</h3>
    </div>
    <div class="col-lg-6">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">My Boss</h3>
        </div>
        <div class="panel-body">
          <?php
            $mgrId=$_SESSION['MgrID'];
            $sx="SELECT * FROM Employees WHERE EmpID='$mgrId'";
            $ex=mysqli_query($conn,$sx);
            $data=mysqli_fetch_assoc($ex);
           ?>
           Name: <?=$data['Name']?><br>
           username: <?=$data['UserName']?><br>
           location: <?=$data['Location']?><br>
           Role: <?=$data['Role']?><br>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include 'footer.php';
?>
