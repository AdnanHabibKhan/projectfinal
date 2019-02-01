<?php

   include("config.php");
   $msg="";

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
	// username and password sent from form 

 

       
	$name=mysqli_real_escape_string($db,$_POST['name']); 
	$email=mysqli_real_escape_string($db,$_POST['email']); 
	$address=mysqli_real_escape_string($db,$_POST['address']); 
       $choice=mysqli_real_escape_string($db,$_POST['choice']);
     $gender=mysqli_real_escape_string($db,$_POST['gender']);



	$sql="INSERT INTO product  ( name,email,address,choice,gender)
	      VALUES ('$name','$email','$address','$choice','$gender')";
	if (mysqli_query($db , $sql)) {
           header("location: index.php");
  	   

	}
        
        else
        {
            die('Error: ' . mysqli_error($db));
        }
    
	mysqli_close($db);
		}
   
?>






<html>
   
   <head>
<title>Best Buy Online Shopping</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="stylesheet" type="text/css" href="glob.css"/>
      <style>
         .error {color: #FF0000;}
      </style>

<script type="text/javascript">
function conf()
{
var con=confirm("Do you want to submit your order?");
}
</script>
   </head>
   
   <body> 
  
<!--first portion start------>
<div class="outer_header">
 <div class="inner_header">
  
   <div class="search_bar">
     <input type="text" name="" value=""/>
 <a href=""><img src="images/searchb.jpg"/></a>
   </div>
    <div class="main_button">
 <a href=""><img src="images/button3.jpg"/></a>
    </div>
 </div>
</div>
<!--first portion ends------>
  <!--second portion start------>
<div class="outer_navi">
 <div class="inner_navi">
  <div class="nav">
   <ul>
   <li><a href="">Home</a></li>
   <li><a href="flipabc.php">About Us</a></li>
   <li><a href="">Products</a></li>
   <li><a href="">Offers</a></li>
   <li><a href="">Shoes</a></li>
 <li><a href="">Contact us</a></li>
   <li><a href="account.php">Register</a></li>
 <li><a href="loginadmin.php">Admin</a></li>
<li><a href="logout.php">User_logout</a></li>
   </ul>
  </div>
 </div>
</div>
<br><br>
<center>
<br>
      <?php
         // define variables and set to empty values
         $nameErr = $emailErr = $genderErr = $websiteErr = "";
         $name = $email = $gender = $class = $course = $subject = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }else {
               $name = test_input($_POST["name"]);
            }
            
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }else {
               $email = test_input($_POST["email"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }
            
            if (empty($_POST["course"])) {
               $course = "";
            }else {
               $course = test_input($_POST["course"]);
            }
            
            if (empty($_POST["class"])) {
               $class = "";
            }else {
               $class = test_input($_POST["class"]);
            }
            
            if (empty($_POST["gender"])) {
               $genderErr = "Gender is required";
            }else {
               $gender = test_input($_POST["gender"]);
            }
            
            if (empty($_POST["subject"])) {
               $subjectErr = "You must select 1 or more";
            }else {
               $subject = $_POST["subject"];	
            }
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
	<br><br>	
      <h2><br> <br>
     
      
      <form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<br>
Please Enter Required data to Confirm Order..</h2>
     
         <table>
            <tr>
               <td>Name:</td>
               <td><input type = "text" name = "name">
                  <span class = "error">* <?php echo $nameErr;?></span>
               </td>
            </tr>
            
            <tr>
               <td>E-mail: </td>
               <td><input type = "text" name = "email">
                  <span class = "error">* <?php echo $emailErr;?></span>
               </td>
            </tr>
            
            
            <tr>
               <td>Postal Address:</td>
               <td> <textarea name = "address" rows = "5" cols = "40"></textarea></td>
            </tr>
            
            <tr>
               <td>Gender:</td>
               <td>
                  <input type = "radio" name = "gender" value = "female">Female
                  <input type = "radio" name = "gender" value = "male">Male
                  <span class = "error">* <?php echo $genderErr;?></span>
               </td>
            </tr>
            
            <tr><br>
               <td>Select Select Product:</td>
               <td><br>
                  <select name = "choice">
                    
<OPTION VALUE="Branded T-Shirt">Branded T-Shirt
<OPTION VALUE="Branded Bag">Branded Bag
<OPTION VALUE="Branded Pent">Branded Pent
<OPTION VALUE="Branded Laptop">Branded Laptop
<OPTION VALUE="Branded Shoes">Branded Shoes
<OPTION VALUE="Branded Trouser">Branded Trouser
                 </select>
               </td>
            </tr>
            
            <tr>
               <td>Agree</td><br>
               <td><input type = "checkbox" name = "checked" value = "1"></td>
               <?php if(!isset($_POST['checked'])){ ?>
               <span class = "error">* <?php echo "You must agree to terms";?></span>
               <?php } ?> 
            </tr>
            
            <tr>
               <td>


                  <input type = "submit" name = "submit" value = "Submit"  onClick="conf()"> 

               </td>
            </tr>
            
         </table>
      </form>
      <br>
     
</center>


 <!--sixth portion ends------>
    
<!--seven portion start------>
<div class="list_outer">
 <div class="list_inner">
 <div class="paragraph">
 <p>Featured Sales</p>
 <ul>
 <li><a href="">Alexis Hudson</a></li>
 <li><a href="">American Apparel</a></li>
 <li><a href="">Ben Sherman</a></li>
 <li><a href=""> Big Buddha</a></li>
 <li><a href="">Chanel</a></li>
 <li><a href="">Christian Audigier</a></li>
 <li><a href="">Coach</a></li>
 <li><a href="">Cole Haan</a></li>
 </ul>
 </div>
 <div class="paragraph1">
 <p>Mens Store</p>
 <ul>
 <li><a href="">Alexis Hudson</a></li>
 <li><a href="">American Apparel</a></li>
 <li><a href="">Ben Sherman</a></li>
 <li><a href=""> Big Buddha</a></li>
 <li><a href="">Chanel</a></li>
 <li><a href="">Christian Audigier</a></li>
 <li><a href="">Coach</a></li>
 <li><a href="">Cole Haan</a></li>
 </ul>
 </div>
<div class="paragraph2">
<p>Women Store</p>
<ul>
<li><a href="">Alexis Hudson</a></li>
<li><a href="">American Apparel</a></li>
<li><a href="">Ben Sherman</a></li>
<li><a href=""> Big Buddha</a></li>
<li><a href="">Chanel</a></li>
<li><a href="">Christian Audigier</a></li>
<li><a href="">Coach</a></li>
<li><a href="">Cole Haan</a></li>
</ul>
</div>
  <div class="paragraph3">
  <p>Quick Links</p>
   <ul>
   <li><a href="">Alexis Hudson</a></li>
   <li><a href="">American Apparel</a></li>
   <li><a href="">Ben Sherman</a></li>
   <li><a href=""> Big Buddha</a></li>
   <li><a href="">Chanel</a></li>
   <li><a href="">Christian Audigier</a></li>
   <li><a href="">Coach</a></li>
   <li><a href="">Cole Haan</a></li>
   </ul>
   </div>
</div>
</div>
<!--seven portion ends------>
  
  <!--eight portion start------>   
   <div class="outer_footer">
    <div class="inner_footer">
    <div class="para">
    <p>Copyright @ 2019 Design and developed by<a href="www.facebook.com"> Tajmmal_Bashir.</a></p>
    </div>
   </div>
      
   </body>
</html>