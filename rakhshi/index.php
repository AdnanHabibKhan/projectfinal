<?php
if(isset($_GET['accept-cookies']))
{
setcookie('accept-cookies','true',time()+315);
header('Location:./');




}

?>
<?php
   include('session.php');
?>

<html">
<head>
<meta charset="utf-8">

<title>Best Buy Online Shopping</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="stylesheet" type="text/css" href="glob.css"/>
</head>
<body>
<h1><?php echo $login_session; ?></h1> 


<?php
if(!isset($_COOKIE['accept-cookies'])){
?>



<div class="cookie-banner">
<div class="container">
<p> We use cookies on this website. By using this website ,accept our cookies.. 
 <a href="/cookies">the cookies we set</a></p>

<a href="?accept-cookies" class ="button">Ok,Continue</a>
</div>
</div>
<?php

}
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery.min.js"></script>
<script src="glob.js"></script>
  
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
   <li><a href="bestbuy.php">About Us</a></li>
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
  <!--second portion ends------>

<!-----third portion start------>  
<div class="main_body">
 <div class="inner_body">
  <div class="shirt">
   
  </div>
<br>
    <div class="shirt_detail">
   <pre> <h1>Cowhide 
Standard Crew</h1></pre>
    <pre> <p>
     White coloured, short-sleeved, printed T-shirt for men by
     Levi's.This crew-neck T-shirt is made of organic cotton and
     comes in a regular fit. 
    </p></pre>
 <a href=""><button>	
       <p><center>Shop Now</center></p> 
      </button>
 </a>
    </div>
 </div>
</div>
<!--third portion ends------>  
<br>
<!--fourth portion start------>

<div class="branded_outer">
 <div class="branded_inner">
  <div class="shoe">
   <img src="images/shoe.jpg"/>
    <p>Branned <br/>Shoes</p>
 <a href="buyproduct.php"><input type="button" name="" value="Shop"></a>
  </div>
    <div class="Tshirt">
    <img src="images/tshirt.jpg"/>
    <p>Branned <br/>Tshirt</p>
 <a href="buyproduct.php"><input type="button" name="" value="Shop"></a>
   </div>
    <div class="pent">
     <img src="images/pent1.jpg"/>
      <p>Branned <br/>pent</p>
  <a href="buyproduct.php"><input type="button" name="" value="Shop"></a>
    </div>
 </div>
</div>
  <!--fourth portion ends------> 
 <!--fifth portion start------> 
   <div class="header_outer">
  <div class="header_inner">
  <div class="heading">
  <p>FEATURED PRODUCTS</p>
  </div>
  </div>
 </div>
 <!--fifth portion ends------> 
     
     <!--sixth portion start------> 
<div class="product-outer">
 <div class="product-inner">
  <div class="shoes">
  <img src="images/shoes.jpg"/>
   <p>Branned Shoes</p>
    <div class="dollar">
   <p> $300</p>
    </div>
  <a href="buyproduct.php"><input type="button" name="" value="Buy Now"></a>
    </div>
   
   <div class="shirt1">
   <img src="images/shirt1.jpg"/>
   <p>Branned Tshirt</p>
   <div class="dollar">
   <p> $300</p>
   </div>
<a href="buyproduct.php"><input type="button" name="" value="Buy Now"></a>
   </div>
<div class="shirt21">
<img src="images/shirt21.jpg"/>
<p>Branned Tshirt</p>
<div class="dollar">
<p> $300</p>
</div>
<a href="buyproduct.php"><input type="button" name="" value="Buy Now"></a>
</div>
     <div class="bag">
     <img src="images/bag.jpg"/>
     <p>Branned BAG</p>
     <div class="dollar">
     <p> $300</p>
     </div>
<a href="buyproduct.php"><input type="button" name="" value="Buy Now"></a>
     </div>
<div class="laptop">
<img src="images/laptop.jpg"/>
<p>Branned Laptop</p>
<div class="dollar">
<p> $300</p>
</div>
<a href="buyproduct.php"><input type="button" name="" value="Buy Now"></a>
</div>
    <div class="trouser">
    <img src="images/trouser.jpg"/>
    <p>Branned trouser</p>
    <div class="dollar">
    <p> $300</p>
    </div>
<a href="buyproduct.php"><input type="button" name="" value="Buy Now"></a>
    </div>
 </div>
 </div>
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
