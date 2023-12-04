<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
 
include 'connect.php';
$category = $_POST['category'];
$name = $_POST['fname'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$gene = $_POST['gender'];
$sts = $_POST['state'];
$insert = $con->query("INSERT INTO calculus_tb (category,full_name,email,phone,gender,state)VALUES('$category','$name','$mail','$phone','$gene','$sts')");
if ($insert) {
    header("location:login.php");
}else {
    echo 'not inserted';
}
}
?>