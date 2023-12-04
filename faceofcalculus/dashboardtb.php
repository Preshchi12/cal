<?php
include 'connect.php';

$tb=$con->query("CREATE TABLE if not exists dash_tb(
    id int(22) primary key auto_increment,
    senders_name varchar(22) not null,
    senders_id varchar(22) not null,
    text_msg varchar(22) not null,
    date_column DATETIME DEFAULT CURRENT_TIMESTAMP
    )ENGINE=innoDB");
    if ($tb) {
        echo 'table successfully created';
    }else {
        // die(mysqli_error($tb));
    }
?>