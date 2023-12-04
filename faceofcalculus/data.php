<?php
include 'connect.php';
$db = 'mr_calculus';

$data = $con->query("CREATE DATABASE if not exists mr_calculus");
if ($data) {
 echo 'success';
}
?>