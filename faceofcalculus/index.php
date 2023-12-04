<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="con1">
         <img src="pic/picture.jpg">   
    </div>

    <div class="con2">
    <img src="pic/logo.png" class="logo" ><br>
    <h1>Online Registration Form</h1>
    <p>Fill in the form below to participate </p>


     <form action="insert.php" method="POST">
        <table class="form-table">
            <tr>
        
<td><i class="fa-solid fa-layer-group icon"></i><select name="category" class="input-style" required>
    <option value="">select category</option>
    <option value="photo contest">photo contest</option>
    <option value="video contest">video contest</option>
    <option value="Dance">Dance</option>
</select></td></tr>
<td><i class="fa-solid fa-person icon"></i><input type="text" name="fname" placeholder="Enter your full name" class="input1" required>
<i class="fa-solid fa-envelope icon"></i><input type="email" name="mail" placeholder="Enter your email address"class="input1" required></td></tr>


<td><i class="fa-solid fa-phone icon"></i><input type="number" name="phone" placeholder="Enter your mobile number" class="input-style" required></td></tr>


<td><i class="fa-solid fa-venus-mars icon"></i><select name="gender"  class="input1" required>
    <option value="">Gender</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
</select>

<i class="fa-solid fa-earth-americas icon"></i><select name="state" class="input1" required>
<option value="">select state</option>
<option value="Abia">Abia</option>
<option value="Adamawa">Adamawa</option>
<option value="Akwa Ibom">Akwa Ibom</option>
<option value="Anambara">Anambara</option>
<option value="Bauchi">Bauchi</option>
<option value="Bayelsa">Bayelsa</option>
<option value="Benue">Benue</option>
<option value="Borno">Borno</option>
<option value="Cross river">Cross river</option>
<option value="Delta">Delta</option>
<option value="Ebonyi">Ebonyi</option>
<option value="Edo">Edo</option>
<option value="Ekiti">Ekiti</option>
<option value="Enugu">Enugu</option>
<option value="Gombe">Gombe</option>
<option value="Imo">Imo</option>
<option value="Jigawa">Jigawa</option>
<option value="Kaduna">Kaduna</option>
<option value="Kano">Kano</option>
<option value="Katsina">Katsina</option>
<option value="Kebbi">Kebbi</option>
<option value="Kogi">Kogi</option>
<option value="Kwara">Kwara</option>
<option value="Lagos">Lagos</option>
<option value="Nassarawa">Nassarawa</option>
<option value="Niger">Niger</option>
<option value="Ogun">Ogun</option>
<option value="Ondo">Ondo</option>
<option value="Osun">Osun</option>
<option value="Oyo">Oyo</option>
<option value="Plateau">Plateau</option>
<option value="Rivers">Rivers</option>
<option value="Sokoto">Sokoto</option>
<option value="Taraba">Taraba</option>
<option value="Yobe">Yobe</option>
<option value="Zamfara">Zamfara</option>
<option value="Fct">Fct</option>
</select></p>
<p><input type="submit" value="Register" class="btn"></td></tr>
</table>
<p><i>Already have an account?<a href="login.php">click here</i></a></p>
    </form> 

    </div> 
    
</body>
</html>