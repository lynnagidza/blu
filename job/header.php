<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blue Colar</title>
<link rel="stylesheet" href="bootstrap.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="style.css" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<header>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-3 logo" > <img src="images/logo2.png"/>
      <h1 style="color:#42b7e8;"> Blue</h1>
        <h1>Collar </h1>
      </div>
      <div class="col-md-6 col-lg-6 nav-menu">
        <div class="dropdown"> <a href="index.php">
          <button class="dropbtn">HOME</button>
          </a> </div>
        <div class="dropdown" ><a href="about_us.php">
          <button class="dropbtn">ABOUT</button></a>
        </div>
        <!-- <div class="dropdown">
          <button class="dropbtn">JOBS <span class="glyphicon glyphicon-triangle-bottom"></span></button>
          <div class="dropdown-content" > <a href="job-list.php">Job List</a> <a href="">Category Listing</a> <a href="">Company Listing</a><a href="">Keyword Listing</a> <a href="">Part time Jobs</a> <a href="">Job Alert</a></div>
        </div> -->
        <div class="dropdown"> <a href="admin-index.php">
          <button class="dropbtn">CONTACT </button>
          </a> </div>
      </div>
      <?php
if(empty($_SESSION['username'])){?>
<div class="col-lg-3 col-md-3 signin"> <a href="login.php">Login</a> <a href="signup.php">Sign up</a> </div><?php } else {?>
<div class="col-lg-3 col-md-3 signin"> <a href="logout.php">Logout</a></div><?php } ?>
    </div>
  </div>
</header>
</body>
</html>
