
<body>
<?php 
include_once 'header.php';
include_once 'config.php';
?>
<section class="body-section">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-push-3 col-sm-push-3 col-md-push-3 col-xs-push-3 inner-body">
<?php 
$id=$_GET['id'];
$sql="select * from jobs where job_id=$id";
$result=$con->query($sql);
$record=$result->fetch_assoc();
$submit=htmlspecialchars($_SERVER["PHP_SELF"]);
$submit=$submit."?id=$id";
?>
<form action="<?php echo $submit; ?>" method="post">
<label>job title: <input type="text" name="title"   value="<?php echo $record['job_title']; ?>"/> </label> <br />
<label>employer:  <input type="text" name="employer" value="<?php echo $record['employer']; ?>"  /></label><br />
<label>skills:  <input type="text" name="skills"  value="<?php echo $record['skills']; ?>" /></label><br />
<label>qualification:  <input type="text" name="qualification" value="<?php echo $record['qualification']; ?>"  /></label><br />
<label>experience: <input type="text" name="experience" value="<?php echo $record['experience']; ?>"  /> </label> <br />
<label>job description:  <textarea name="description" ><?php echo $record['job_description']; ?></textarea></label><br />
<input type="submit" value="upload" />
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$con=new mysqli($server,$username,$password,$db);
$sql=$con->prepare("update jobs set job_title=?,employer=?,skills=?,qualification=?,experience=?,job_description=? where job_id=$id");
$title=$_POST['title'];
$employer=$_POST['employer'];
$skills=$_POST['skills'];
$qualification=$_POST['qualification'];
$experience=$_POST['experience'];
$job_description=$_POST['description'];
$sql->bind_param("ssssss",$title,$employer,$skills,$qualification,$experience,$job_description);
$sql->execute();
}
?>
</div>
</div>
</div>
</section>
<?php
include_once 'footer.php';
?>
</body>
</html>
