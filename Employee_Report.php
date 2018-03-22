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
            $empId=$_SESSION['EmpID'];
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
           ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php
include 'footer.php';
?>
