<?php
session_start();
?>
<style>
    body{
        background-color:#f4f4f4;
    }
    
    .container{
        width:100%;
        height:100%; 
        display:flex; 
    }
    .con1{
        width:30%;
        background: #1c0127;
        height:100%;
        color:white;
    }
    .con2{
        width:60%; 
    }

    form{
        background:white;
        width:50%;
        margin-top:150px;
        padding:30px;
        
    }

    .btn{
    width:60px;
    border: none;
    padding: 10px 20px;
    color: white;
    background-color: #160216;
    cursor: pointer;
    
   margin-top: 30px;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="con1">
<h2>welcome <?php echo $_SESSION['username']; ?> to your dashboard</h2>
<h2>Your id number is <?php echo $_SESSION['id']?></h2>
</div>
<div class="con2">
 <center> 
<form action="dashinsert.php" method="POST">
<h2>Fill the form below</h2>
    <table>
        <tr>
        <td>Senders name:</td>
        <td><input type="text" name="name" value=" <?php echo $_SESSION['username']; ?>"></td></tr>
        <td>Senders id:</td>
        <td><input type="text" name="id" value="<?php echo $_SESSION['id']?>"></td></tr>
        <td>Type message:</td>
        <td><textarea name="message" id="" cols="30" rows="5"></textarea></td></tr>
        
    <td><input type="submit" value="send" class="btn"></td>
    </table>
</form>
</center>  
</div>
</div>

</body>
</html>