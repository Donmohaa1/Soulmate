<?php
session_start();
include('config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:login.php');
}
else{
	$id=intval($_GET['id']);
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
	$description=$_POST['description'];
$sql=mysqli_query($con,"update  users set firstname='$firstname',lastname='$lastname',age='$age',height='$height',residence='$residence',email='$email',complextion='$complextion',phonenumber='$phonenumber',description='$description' where id='$id' ");
$_SESSION['msg']="Profile Updated Successfully !!";

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
    <div id="logo"><img src="images/logo_1.gif" alt="" /></div>
  </div>
  <div id="body_container">
    <div id="body_container_inner">
      <div id="menu">
        <ul>
          <li class="first"><a href="change_password.php">Change Password</a></li>
          <li><a  class="current" href="edit_profile.php">Edit Profile</a></li>
		  <li><a href="logout.php">Log Out</a></li>
        </ul>
      </div>
<div id="footer">
        <div class="footer_link">
          <ul style="color:#FFf;">
            Copyright (c) Soul Mate. All rights reserved.</a>.
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
