<?php

   include("config.php");
   $msg="";

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
	// username and password sent from form 

 

       
	$firstname=mysqli_real_escape_string($db,$_POST['firstname']); 
	$lastname=mysqli_real_escape_string($db,$_POST['lastname']);  
	$email=mysqli_real_escape_string($db,$_POST['email']); 
          $gender=mysqli_real_escape_string($db,$_POST['gender']); 
        $birthday=mysqli_real_escape_string($db,$_POST['dob']); 
 
        $password=mysqli_real_escape_string($db,$_POST['password']); 
   $repassword=mysqli_real_escape_string($db,$_POST['repassword']); 

       
        if (empty($_POST["firstname"])){ 
             $error= "enter firstname";
        }

 if($password!=$repassword)
 {

header("location: account1.php");

  }
        else{



	$sql="INSERT INTO userinfo  ( firstname, lastname,gender,birthday,email,password,repassword)
	      VALUES ('$firstname','$lastname','$gender', '$birthday','$email','$password','$repassword')";
	if (mysqli_query($db , $sql)) {
           header("location: index.php");
  	   

	}
        
        else
        {
            die('Error: ' . mysqli_error($db));
        }
    
	mysqli_close($db);
}
		
   }
?>
































<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 30%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="" method="post">
  <div class="container">
    <center><h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="Name"><b>First Name</b></label> <input type="text" placeholder="Enter you  first name" name="firstname" required><br>

    <label for="psw"><b>Last Name</b></label>
     <input type="text" placeholder="Enter your last name" name="lastname" required><br>
<label for="psw-repeat"><b>Email  &nbsp   &nbsp &nbsp   </b></label>
     <input type="text" placeholder="Enter Email" name="email" required><br>
    

<label for="psw-repeat"><b>Gender  &nbsp   &nbsp </b></label>
    <input type="text" placeholder="Enter your gender" name="gender" required><br>
<label for="psw-repeat"><b>Birthday  &nbsp   &nbsp </b></label>
        <input type="text" placeholder="Enter date of birth" name="dob" required><br>

<label for="passowrd"><b>Password  &nbsp   &nbsp </b></label>
    <input type="password" placeholder="Enter your  Password" name="password" required><br>

<label for="psw-repeat"><b>RePassword  </b></label>
    <input type="password" placeholder="Repeat Password" name="repassword" required><br>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
</center>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="loginuser.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html>
