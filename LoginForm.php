<?php

$credentials = true;


if(isset( $_POST['email'] ) &&  isset($_POST['password']) )
	login();
function login() {
	$db_host = 'localhost';
	$db_username = 'root';
	$db_password = '';
	$db_name = 'attendancesystem';
	$email = $_POST['email'];
	$password = $_POST['password'];
	$con = mysqli_connect( $db_host, $db_username, $db_password) or die(mysql_error());
	mysqli_select_db($con,$db_name); 
	$query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'; "; 
	$result = mysqli_query($con,$query);
	if(!$result || mysqli_num_rows($result) <= 0){
	   echo '<p style="color: red">ERROR</p>';
    }else {
       echo '<p style="color: green">SUCCESS</p>';
	}
}
?>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<form class="form-horizontal" method="POST" style="width:50%;height:50%;margin:auto;margin-top:10%;border:2px solid #cfcfcf;padding:50px">
<fieldset>

<!-- Form Name -->
<legend>LOGIN</legend>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textemail">Email</label>  
  <div class="col-md-4">
  <input id="textemail" name="email" type="text" placeholder="email" class="form-control input-md" required="">
  <span class="help-block">must exist in database</span>  
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password</label>
  <div class="col-md-4">
    <input id="passwordinput" name="password" type="password" placeholder="password" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary">LOGIN</button>
  </div>
</div>

</fieldset>
</form>
</body>
</html>
