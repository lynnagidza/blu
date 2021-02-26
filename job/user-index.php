<?php
session_start();
if(empty(isset($_SESSION['username']))){
$_SESSION['msg']="1";
header("location:login.php");
exit();
}
?>

<body>
<?php
include_once 'header.php';
include_once 'config.php';
?>

<section class="admin-banner">
<h1>Welcome <?php echo $_SESSION['username']; ?></h1>
</section>

<section class="admin-section">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 col-sm-3 col-md-3 col-xs-20 admin-menu-list">
<ul>
<!-- <li><a onclick=load("user-apply.php")>Apply Now</a></li>
<li><a onclick=load("profile.php")>Profile Settings</a></li>
<li><a onclick=load("update-password.php")>Update Password</a></li> -->
<li><a onclick=load("my-hires.php")>My Hires</a></li>
<li><a onclick=load("new-reviews.php")>Add Review</a></li>
<li><a onclick=load("my-reviews.php")>My Reviews</a></li>
</ul>
</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 dashboard" id="demo">
</div>
</div>
</div>
</section>

<script>
function load(sub) {
	var page=sub;
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", page, false);
  xhttp.send();
  document.getElementById("demo").innerHTML = xhttp.responseText;
}
</script>
<?php
include_once 'footer.php';
?>
</body>
</html>
