<?php
session_start();
include 'connect.php';
$text = $_POST['message'];
$sel=$con->query("SELECT text_msg FROM dash_tb WHERE message='$text'");
if ($sel->num_rows>0) {
    $row = $sel->fetch_assoc();
    $_SESSION['text_msg'] = $row['text_msg'];
    
    
    header("location:dashboard.php");
}
?>