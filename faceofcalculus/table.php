<?php
include 'connect.php';

$tb = $con->query("CREATE TABLE if not exists calculus_tb(
    id int(22)primary key auto_increment,
    category varchar(22) not null,
    full_name varchar(60) not null,
    email varchar(60) not null,
    phone varchar(60) not null,
    gender varchar(60) not null,
    state varchar(60) not null
    )ENGINE=innoDB");
    if ($tb) {
        # code...
        echo 'table cretted';
    }
?>