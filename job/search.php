<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>search</title>
</head>
<body>
<?php
include 'config.php';
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<input type="text" name="search"/>
<input type="submit"  value="search" />
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$search=$_POST['search'];
$search="%".$search."%";
$sql="select * from jobs where job_title like '$search'";
$result=$con->query($sql);
while($record=$result->fetch_assoc()){
?>
<p><?php echo $record['job_title']; ?> <a href="apply.php">apply</a></p>

<?php
}
}
?>
</body>
</html>
