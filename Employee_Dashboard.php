<?php
include '../include/config.php';
include 'header.php';
?>
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <h1>Welcome <?=$_SESSION['Name']?></h1>
    </div>
    <div class="col-lg-6">
      Current Status :
      <?php
        $empId=$_SESSION['EmpID'];
        $date = date('Y-m-d', time());
        $x="SELECT * FROM Clock WHERE EmpID='$empId' AND EntryDate='$date'";
        // echo $x;
        $sx=mysqli_query($conn,$x);
        if(mysqli_num_rows($sx)!=""){
          $chk=mysqli_fetch_assoc($sx);
          if($chk['Clock_In_Date']!=""){
            echo "<br>Checked In at- ".$chk['Clock_In_Date']."<br>";
            echo "Checked Out at- ".$chk['Clock_Out_Date']."<br>";
            if($chk['Clock_Out_Date']==""){
              ?>
              <a class="btn btn-primary" href="punch_data.php?mode=out&empID=<?=$_SESSION['EmpID']?>">Check Out</a>
              <?php
            }
          }else{
            echo "You Dont have yet Check IN please check in";
            ?>
            <a class="btn btn-primary" href="punch_data.php?mode=in&empID=<?=$_SESSION['EmpID']?>">Check In</a>
            <?php
          }
        }else{
          echo "Not Checked IN";
          ?>
          <a class="btn btn-primary" href="punch_data.php?mode=in&empID=<?=$_SESSION['EmpID']?>">Check In</a>
          <?php
        }
      ?>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h4>
        My Checkins & Checkout's
      </h4>
    </div>
    <div class="col-lg-6">
      <table class="table">
        <thead>
          <tr>
            <th>Date</th>
            <th>Check In</th>
            <th>Check Out</th>
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
