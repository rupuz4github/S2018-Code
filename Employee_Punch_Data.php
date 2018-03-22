<?php

include '../include/config.php';

if(isset($_GET['mode'])){

  $mode=$_GET['mode'];

  $empId=$_GET['empID'];

  if($mode=='in'){

    $currentTime=date("H:i:s");

    $currentDate=date('Y-m-d', time());

    $sc="INSERT INTO `Clock`(`EmpID`, `Clock_In_Date`, `EntryDate`) VALUES (

      '$empId','$currentTime','$currentDate'

    )";

    $exc=mysqli_query($conn,$sc);

    header('location:dashboard.php');

  }else{

    $currentTime=date("H:i:s");

    $currentDate=date('Y-m-d', time());

    $sc="UPDATE `Clock` SET `Clock_Out_Date`='$currentTime' WHERE `EmpID`='$empId' AND `EntryDate`='$currentDate'";

    $exc=mysqli_query($conn,$sc);


    header('location:dashboard.php');

  }
}
 ?>
