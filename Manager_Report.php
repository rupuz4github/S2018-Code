<?php
include '../include/config.php';
include 'header.php';
?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h3>Reports</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-5">
      <form class="" action="" method="get">
        <div class="form-group">
          <label for="">select employee</label>
          <select class="form-group" name="empId">
            <option value=""></option>
            <?php
            $mgrID=$_SESSION['EmpID'];
            $sql="SELECT * FROM Employees WHERE MgrID='$mgrID'";
            $exc=mysqli_query($conn,$sql);
            while($team=mysqli_fetch_assoc($exc)){
              ?>
              <option value="<?=$team['EmpID']?>"><?=$team['Name'].'--'.$team['UserName']?></option>
              <?php
            }
            ?>
          </select>
          <button type="submit" name="button">Search</button>
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <table class="table">
        <thead>
          <tr>
            <th>Date</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Total Hrs Working</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if(isset($_GET['empId'])){
            $empId=$_GET['empId'];
            $alist = mysqli_query($conn,"SELECT * FROM Clock WHERE EmpID='$empId' ORDER BY `EntryDate` DESC");
            while($cl=mysqli_fetch_assoc($alist)){
            ?>
              <tr>
                <td><?=$cl['EntryDate']?></td>
                <td><?=$cl['Clock_In_Date']?></td>
                <td><?=$cl['Clock_Out_Date']?></td>
                <td><?php
                $time1 = new DateTime($cl['Clock_In_Date']);
                $time2 = new DateTime($cl['Clock_Out_Date']);
                $interval = $time1->diff($time2);
                echo $interval->format('%H:%I:%S');
                 ?>
               </td>
              </tr>
              <?php
            }
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
