
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
          <li class="first"><a class="current" href="change_password.php">Change Password</a></li>
          <li><a href="edit_profile.php">Edit Profile</a></li>
		  <li><a href="logout.php">Log Out</a></li>
        </ul>
      </div>
	  <div class="member_login">
	  <form class="form-horizontal row-fluid" name="chngpwd" method="post" onSubmit="return valid();">
		<div class="control-group">
<label class="control-label" for="basicinput">Current Password</label>
<div class="controls">
<input type="password" placeholder="Enter Current Password"  name="password" class="span8 tip" required>
</div>
</div><br>
<div class="control-group">
<label class="control-label" for="basicinput">New Password</label>
<div class="controls">
<input type="password" placeholder="Enter New Password"  name="newpassword" class="span8 tip" required>
</div>
</div><br>
<div class="control-group">
<label class="control-label" for="basicinput">Confirm New Password</label>
<div class="controls">
<input type="password" placeholder="Confirm New Password"  name="confirmpassword" class="span8 tip" required>
</div></div><br>
<div class="control-group">
<div class="controls">
<button type="submit" name="submit" class="btn">Submit</button>
</div></div>
		</form></div>
<div id="footer">
<div class="footer_link">
    <ul style="color:#FFf;">Copyright (c) Soul Mate. All rights reserved.</a>.</ul>
</div></div></div>
</div></div>
</body>
</html>