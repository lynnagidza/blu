<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sign up</title>
<link rel="stylesheet" href="bootstrap.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="style.css" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include_once 'config.php';
include_once 'header.php';
?>
<section class="signup-banner">
<h2 style="color:skyblue;">signup</h2>
</section>

<section class="signup-portal">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-lg-push-4 col-md-push-4 col-sm-push-4 col-xs-push-3 signup-inner">
<?php

if(isset($_SESSION['msg']))
{
if($_SESSION['msg']==1)
echo "please login";
else
echo $_SESSION['msg'];
session_unset($_SESSION['msg']);
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<div class="form-group">
<label class="control-label">Full name: </label><input type="text" name="name" class="form-control"/></div>
<div class="form-group">
<label class="control-label">Mobile number: </label><input type="text" name="mobile" class="form-control"/></div>
<div class="form-group">
<label class="control-label">Email address: </label><input type="email" name="email" class="form-control"/></div>
<div class="form-group">
<label class="control-label">Username: </label><input type="text" name="username" class="form-control"/></div>
<div class="form-group">
<label class="control-label">Password: </label><input type="password" name="password" class="form-control"/></div>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-push-3 col-sm-push-3 col-md-push-3 col-xs-push-3 form-group">
<br /><input type="submit" value="Sign Up" class="form-control"/>
</div>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$sql=$con->prepare("insert into reg_user(name,mobile,email,username,password) values(?,?,?,?,?)");
$sql->bind_param("sssss",$name,$mobile,$email,$username,$password);
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$sql->execute();
}
?>
</section>
<?php
include_once 'footer.php';
?>
</body>
</html>
