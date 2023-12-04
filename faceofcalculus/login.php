<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
body{
font-family:Arial,sans-serif;
background-color:#f4f4f4;
text-align:center;
margin-top:100px;
}
.container{
    width:300px;
    margin:0 auto;
    padding:20px;
    background-color:#fff;
    border-radius:5px;
    box-shadow:0px 0px 10px rgba(0,0,0,0.1);
}
input[type="text"]{
    width:100%;
    padding:10px;
    margin:8px 0;
    border:1px solid #ccc;
    border-radius:4px;
    box-sizing:border-box;
}
input[type="submit"]{
background-color:#4CAF50;
color:white;
padding:10px 20px;
margin:8px 0;
border:none;
border-radius:4px;
cursor:pointer;

}
input[type="submit"]:hover{
    background-color:#45a049;
}

    </style>
    
    
    
    
 
    <div class="container">
        <h2>Log in</h2>
        <form action="login-code.php" method="POST">
        <p style="color:red"><?php if(isset($_GET['msg'])){
                echo $_GET['msg'];
            }  ?></p>
             <input type="text" name="email" placeholder="enter your email"><br>

            <!-- <label for="phone">Phone:</label><br> -->
            <input type="text" name="phone" placeholder="enter your mobile number"><br>
            <input type="submit" value="log in">
        </form>
    </div>

   
        
        
    

</body>
</html>
