<?php

include "connection.php";
session_start();
$user = $_SESSION["u"];

$fname = $_POST["f"];
$lname = $_POST["l"];
$email = $_POST["e"];
$mobile = $_POST["m"];
$pw = $_POST["p"];
$no = $_POST["n"];
$line1 = $_POST["l1"];
$line2 = $_POST["l2"];

if (empty($fname)) {
    echo ("Please Enter Your First Name");
} else if (strlen($fname) > 20) {
    echo ("Your First Name Should be less than 20 Characters");
} else if (empty($lname)) {
    echo ("Please Enter Your Last Name");
} else if (strlen($lname) > 20) {
    echo ("Your Last Name Should be less than 20 Characters");
} else if (empty($email)) {
    echo ("Please Enter Your Email");
} else if (strlen($email) > 100) {
    echo ("Your Email Address Should be less than 100 Characters");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Your Email Address is Invalid");
} else if (empty($mobile)) {
    echo ("Please Enter Your Mobile");
} else if (strlen($mobile) != 10) {
    echo ("Your mobile Number must contain 10 Characters");
} else if (!preg_match("/07[0,1,2,4,5,6,7,8]{1}[0-9]{7}/", $mobile)) {
    echo ("Your Mobile Number is Invalid");
} else if (empty($pw)) {
    echo ("Please Enter Your Password");
} else if (strlen($pw) < 5 || strlen($pw) > 45) {
    echo ("Your Password must contain 5 - 45 Characters");
} else if (empty($no)){
    echo ("Plese Enter Your Address No");
} else if (strlen($no) > 10){
    echo ("Your No must be less than 10 characters");
} else if (empty($line1)) {
    echo ("Plese Enter Your Address Line 01");
} else if (strlen($line1) > 50){
    echo ("Your line 01 must be less than 50 characters");
}else if (empty($line2)) {
    echo ("Plese Enter Your Address Line 02");
} else if (strlen($line2) > 50){
    echo ("Your line 02 must be less than 50 characters");
}

Database::iud("UPDATE `user` SET `fname` = '".$fname."',`lname` = '".$lname."',`email` = '".$email."',`mobile` = '".$mobile."',
`password` = '".$pw."',`no` = '".$no."',`line_1` = '".$line1."',`line_2` = '".$line2."'");

echo ("Success");

?>