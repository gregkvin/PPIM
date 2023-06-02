<?php
session_start();

include 'dbconnect.php';

$stud_id = $_POST['stud_id'];
$pwd = $_POST['pwd'];


$data = mysqli_query($conn, "select * from IDENTITY where BINARY STUDENT_ID='$stud_id' and BINARY password='$pwd'");

$num = mysqli_num_rows($data);

if($num > 0){
    $_SESSION['stud_id'] = $stud_id;
    $_SESSION['status'] = "login";
    header("location: main/dashboard.php");
} else {
    header("location:forgot.php?msg=fail");
}

?> 
