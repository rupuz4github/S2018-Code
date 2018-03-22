nclude '../include/config.php';
include 'header.php';
?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1>My Team</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
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
            $sql="SELECT * FROM Employees WHERE MgrID='$mgrID'";
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
