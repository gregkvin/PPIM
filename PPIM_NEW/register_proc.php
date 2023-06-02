<?php
session_start();

include 'dbconnect.php';

$student_id = $_POST['student_id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$passport = $_POST['passport'];
$ikad = $_POST['ikad'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$add_in = $_POST['add_in'];
$campus = $_POST['campus'];
$add_my = $_POST['add_my'];
$curr = $_POST['curr'];
$statusku = $_POST['statusku'];
$email = $_POST['email'];
$pwd = md5($_POST['pwd']);

mysqli_query($conn, "insert into IDENTITY (`STUDENT_ID`, `password`, `F_NAME`, `L_NAME`, `email`, `PHONE_NUM`, `DOB`, `PASSPORT`, `IKAD`, `ADD_ID`, `ADD_MY`, `STATUS`, `CURR`) values ('$student_id', '$pwd', '$fname', '$lname', '$email', '$phone', '$dob', '$passport', '$ikad',  
'$add_in', '$add_my', '$statusku', '$curr')");

 header("location:index.php?msg=reg");



?> 
