<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST') {
include 'connect.php';
$email=$_POST['email'];
$phn=$_POST['phone'];
$sel=$con->query("SELECT * FROM calculus_tb WHERE email='$email' AND phone='$phn'");
if ($sel->num_rows>0) {
    $row = $sel->fetch_assoc();
    $_SESSION['username'] = $row['full_name'];
    $_SESSION['id'] = $row['id'];
    header("location:dashboard.php");
}else {
    header("location:login?msg=invalid password or email");
}
}
?>