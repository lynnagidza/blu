  <?php
  session_start();
if(isset($_SESSION['username'])){
if($_SESSION['username']=="admin")
header("location:admin-index.php");
else
header("location:user-index.php");
exit();
}
?>
<?php

include_once 'config.php';
include_once 'header.php';
?>
<body>
<section class="login-banner">
<h2 style="color:skyblue;"> Login</h2>
</section>

<section class="login-portal">
<div style="background-image: url('images/grey.jpg');">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-lg-push-4 col-md-push-4 col-sm-push-4 col-xs-push-3 login-inner">
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
<label class="control-label" for="username">Username: </label><input type="text" name="username" class="form-control"/>
</div>
<div class="form-group">
<label class="control-label" for="password">Password: </label><input type="password" name="password" class="form-control"/>
</div>
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-push-4 col-sm-push-4 col-md-push-4 col-xs-push-4 form-group">
<br /><input type="submit" value="login" class="form-control"/>
</div>
</div>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{ $flag=0;
	if($_POST['username']=="admin")
	{
		if($_POST['password']=='admin123')
		{
			$_SESSION['username']=$_POST['username'];
			header("location:admin-index.php");
			exit();
		}
		else
		{
			$_SESSION['msg']="incorrect password";
			header("location:login.php");
		}
	}
	else
	{
	$user=$_POST['username'];
	$pass=$_POST['password'];
		$sql="select username,password from reg_user where username='$user' and password='$pass'";
		$result=$con->query($sql);
		if($result->num_rows==1){
		$_SESSION['username']=$_POST['username'];
		header("location:user-index.php");
		exit();
		}
				else
				{
					
					$_SESSION['msg']="incorrect password";
					header("location:login.php");
				}
}
}
?>
</div>
</div>
</div>
</div>
</section>
<?php
include_once 'footer.php';
?>
</body>
</html>
