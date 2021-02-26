
<?php
session_start();
if($_SESSION['username']!="admin"){
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
<h1>Welcome Admin</h1>
</section>

<section class="admin-section">
<div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 admin-menu-list">
<ul>
<li><a onClick="link('upload-job.php')">Post Job</a></li>
<li><a onClick="link('view-all.php')">View Posted Jobs</a></li>
<li><a onClick="link('view-emp.php')">View Employers</a></li>
<li><a onClick="link('view-cad.php')">View Candidates</a></li>
<li><a onClick="link('admin-inbox.php')">View Messages</a></li>
</ul>
</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 dashboard" id="demo">
<h2>Dashboard</h2>
<div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 dashboard-pannel">
<div class="row">
<div class="pannel-content"><span class="fa fa-building"></span>
<h4><?php $sql="select * from jobs"; $result=$con->query($sql); echo $result->num_rows;?></h4></div>
<div class="pannel-footer" style="background-color: #fe9426">
<p>Total Employers</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 dashboard-pannel">
<div class="row">
<div class="pannel-content"><span class="fa fa-vcard"></span>
<h4><?php $sql="select * from candidates"; $result=$con->query($sql); echo $result->num_rows;?></h4></div>
<div class="pannel-footer" style="background-color: #fb3157">
<p>Registered Candidates</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 dashboard-pannel" >
<div class="row">
<div class="pannel-content"><span class="fa fa-briefcase"></span>
<h4><?php $sql="select * from jobs"; $result=$con->query($sql); echo $result->num_rows;?></h4></div>
<div class="pannel-footer" style="background-color: #157efb">
<p>Total Jobs</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 dashboard-pannel">
<div class="row">
<div class="pannel-content"><span class="fa fa-user-circle"></span>
<h4><?php $sql="select * from candidates"; $result=$con->query($sql); echo $result->num_rows;?></h4>
</div>

<div class="pannel-footer" style="background-color:#53d769">
<p>Total Candidates</p>
</div>
</div>

</div>
</div>
</div>
</div>
</section>

<?php
include_once 'footer.php';
?>
<script>
function link(sub) {
	var page=sub;
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", page, false);
  xhttp.send();
  document.getElementById("demo").innerHTML = xhttp.responseText;
}
</script>
</body>
</html>
