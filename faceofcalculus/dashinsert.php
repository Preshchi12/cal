<?php
include 'connect.php';
$sender=$_POST['name'];
$id=$_POST['id'];
$txt=$_POST['message'];
$insert=$con->query("INSERT INTO dash_tb (senders_name,senders_id,text_msg) VALUES ('$sender','$id','$txt')");
if ($insert) {
   header("location:dashinsert.php");
}
//     die(mysqli_error($insert));
// }
?>