
<?php 
include_once 'header.php';
include_once 'config.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{

$sql=$con->prepare("insert into candidates(cad_name,job_id,skills,qualification,exp,email,contact) values(?,?,?,?,?,?,?)");
$sql->bind_param("sssssss",$name,$job_id,$skills,$qualification,$experience,$email,$contact);
$name=$_POST['name'];
$email=$_POST['email'];
$skills=$_POST['skills'];
$qualification=$_POST['qualification'];
$experience=$_POST['experience'];
$contact=$_POST['contact'];
$job_title=$_POST['job_title'];
$query="select job_id from jobs where job_title='$job_title'";
$result=$con->query($query);
$record=$result->fetch_assoc();
$job_id=$record['job_id'];
$sql->execute();
$sql="update jobs set applied=applied+1 where job_id='$job_id'";
$con->query($sql);
}
?>
<section class="body-section">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-push-2 col-sm-push-2 col-md-push-2">
<h2 align="center">Apply for a job</h2><br />
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
<label class="control-label">name: </label><input type="text" name="name" class="form-control"  />  <br />
<label class="control-label">email:  </label><input type="text" name="email"  class="form-control" /></label><br />
<label class="control-label">job type: </label><select class="form-control" name="job_title" class="form-control">
<option selected="selected" disabled="disabled">select job type</option>
<?php
$sql="select job_title from jobs";
$result=$con->query($sql);
while($record=$result->fetch_assoc()){
?>
<option><?php echo $record['job_title'];?></option>
<?php
}
?>
</select><br />
<label class="control-label">skills:  </label><input type="text" name="skills"  class="form-control" /><br />
<label class="control-label">qualification:  </label><input type="text" name="qualification"  class="form-control" /><br />
<label class="control-label">experience: </label><input type="text" name="experience"  class="form-control" /> <br />
<label class="control-label">contact number:  </label><input type="text" name="contact" class="form-control"  /><br />
<label class="control-label">Upload your Resume:  </label><input type="file" name="cv" /><br />
<input type="submit" value="upload" class="thm-btn"/>
</form>
</div>
</div>
</div>
</section>
<?php 
include_once 'footer.php';
?>
