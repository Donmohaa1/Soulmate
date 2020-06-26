<?php
session_start();
error_reporting(0);
include('config.php');
// Code user Registration
if(isset($_POST['submit']))
{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$age=$_POST['age'];
$height=$_POST['height'];
$residence=$_POST['residence'];
$complextion=$_POST['complextion'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$image=$_FILES["image"]["name"];
$password=md5($_POST['password']);
$query=mysqli_query($con,"insert into users(firstname,lastname,age,height,residence,complextion,email,phonenumber,password) values('$firstname','$lastname','$age','$height','$residence','$complextion','$email','$phonenumber',	'$password')");
if($query)
{
	echo "<script>alert('You are successfully registered');</script>";
}
else{
echo "<script>alert('Not registered something went worng');</script>";
}
}
?>
<!DOCTYPE>
<html>
<head>
<title>SoulMate</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/layout.css">
</head>
<body>
<div id="layout">
  <div id="header">
    <div id="logo"><a href="index.php"><img src="images/logo_1.gif" alt="" /></a></div>
  </div>
  <div id="body_container">
    <div id="body_container_inner">
      <div id="menu">
        <ul>
          <li class="first"><a href="index.php">HOME</a></li>
          <li><a href="about_us.php">ABOUT US</a></li>
          <li><a href="partner.php">FIND PARTNER</a></li>
          <li><a href="login.php">LOGIN</a></li>
          <li><a class="current" href="register.php">REGISTER</a></li>
          <li><a href="quotes.php">LOVE QUOTES</a></li>
          <li><a href="contact_us.php">CONTACT US</a></li>
        </ul>
      </div>
<div align="center" class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">Register Now To Add Your Profile</h4>
	<form class="register-form outer-top-xs" role="form" method="post" name="register" onSubmit="return valid();">
		<div class="form-group">
	    	<input type="text" class="form-control unicase-form-control text-input" id="firstname" placeholder="Enter Your First Name" name="firstname" required="required">
	  	</div><br>
		<div class="form-group">
	    	<input type="text" class="form-control unicase-form-control text-input" id="lastname" placeholder="Enter Your Last Name" name="lastname" required="required">
	  	</div><br>
		<div class="form-group">
	    	<input type="text" class="form-control unicase-form-control text-input" id="height" placeholder="Height In Inches" name="height" required="required">
	  	</div><br>
		<div class="form-group">
	    	<input type="text" class="form-control unicase-form-control text-input" id="age" placeholder="Enter Your Age" name="age" required="required">
	  	</div><br>
		<div class="form-group">
	    	<input type="text" class="form-control unicase-form-control text-input" id="residence" placeholder="Residence e.g Stage, Hostel" name="residence" required="required">
	  	</div><br>
		<div class="form-group">
	    	<input type="text" class="form-control unicase-form-control text-input" id="complextion" placeholder="Complextion e.g Light Skin, Chocolate.." name="complextion" required="required">
	  	</div><br>
		<div class="form-group">
	    	<input type="email" class="form-control unicase-form-control text-input" id="email" onBlur="userAvailability()" placeholder="Email Address" name="email" required="required">
	    	<span id="user-availability-status1" style="font-size:12px;"></span>
	  	</div><br>
		<div class="form-group">
	    	<input type="text" class="form-control unicase-form-control text-input" id="phonenumber" placeholder="Phone Number" name="phonenumber" maxlength="10" required="required">
	  	</div><br>
		<div class="control-group">
			<div class="controls">
			<textarea  name="description"  placeholder="Brief Description About You" rows="6" class="span8 tip" required="required"></textarea>  
		</div>
		</div><br>
		<div class="control-group">
		<label class="info-title" for="image">Choose Image</label>
			<input type="file" name="image" id="image" value="" class="span8 tip" required>
		</div><br>
		<div class="form-group">
	    	<input type="password" class="form-control unicase-form-control text-input" id="password" name="password" placeholder="Enter Password" required="required">
	  	</div><br>
		<div class="form-group">
	    	<input type="password" class="form-control unicase-form-control text-input" id="confirmpassword" placeholder="Confirm Password" name="confirmpassword" required="required">
	  	</div><br>
	  	<button type="submit" name="submit" class="btn-upper btn btn-primary" id="submit">Sign Up</button>
	</form></div><br>
<div id="footer">
<div class="footer_link">
    <ul style="color:#FFf;">Copyright (c) Soul Mate. All rights reserved.</a>.</ul>
</div></div></div>
</div></div>
</body>
</html>