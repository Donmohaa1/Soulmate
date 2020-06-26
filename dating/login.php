<?php
session_start();
error_reporting(0);
include("config.php");
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$password=md5($_POST['password']);
$ret=mysqli_query($con,"SELECT * FROM users WHERE email='$email' and password='$password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="change_password.php";//
$_SESSION['alogin']=$_POST['email'];
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$_SESSION['errmsg']="Invalid email or password";
$extra="login.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
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
          <li><a class="current" href="login.php">LOGIN</a></li>
          <li><a href="register.php">REGISTER</a></li>
          <li><a href="quotes.php">LOVE QUOTES</a></li>
          <li><a href="contact_us.php">CONTACT US</a></li>
        </ul>
      </div>
	  <div id="header">
    <div class="member_login">
        <form class="form-vertical" method="post">
			<div class="module-head"><h3>Sign In</h3></div>
			<span style="color:red;" ><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>
			<div class="module-body"><div class="control-group"><div class="controls row-fluid">
				<input class="span12" type="text" id="inputEmail" name="email" placeholder="email">
			</div></br></div>
			<div class="control-group"><div class="controls row-fluid">
				<input class="span12" type="password" id="inputPassword" name="password" placeholder="Password">
			</div></br></div></div>
			<div class="module-foot"><div class="control-group"><div class="controls clearfix">
				<button type="submit" class="btn btn-primary pull-right" name="submit">Login</button>
			</div></div></div>
		</form>
    </div>
  </div>
<div id="footer">
<div class="footer_link">
    <ul style="color:#FFf;">Copyright (c) Soul Mate. All rights reserved.</a>.</ul>
</div></div></div>
</div></div>
</body>
</html>
