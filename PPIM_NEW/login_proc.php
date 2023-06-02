<?php
session_start();

include 'dbconnect.php';

$stud_id = $_POST['stud_id'];
$pwd = md5($_POST['pwd']);

$data = mysqli_query($conn, "select * from IDENTITY where BINARY STUDENT_ID='$stud_id' and BINARY password='$pwd'");

$num = mysqli_num_rows($data);

if($num > 0){
    $_SESSION['stud_id'] = $stud_id;
    $_SESSION['status'] = "login";
    header("location: main/dashboard.php");
} else {
    header("location:index.php?msg=fail");
}

?> 
902bfab22a2fe56b84ce8ad267884b5b