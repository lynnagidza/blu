<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<section class="body-section">
<?php 
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
header("location:user-index.php");
}
?>

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


<?php 
$username=$_SESSION['username'];
$sql = "SELECT * from reg_user where username=:username;
$query = $dbh -> prepare($sql);
$query -> bindParam(':username',$username, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
<section class="user_profile inner_pages">
  <div class="container">
    <div class="user_profile_info gray-bg padding_2x2_20">
      <div class="upload_user_logo"> <img src="assets/images/cat-profile.png" alt="image">
      </div>

      <div class="dealer_info">
        <h5><?php echo htmlentities($result->FullName);?></h5>
        <p><?php echo htmlentities($result->Address);?><br>
          <?php echo htmlentities($result->City);?>&nbsp;<?php echo htmlentities($result->Country);?></p>
      </div>
    </div>
  
    <div class="row">
      <div class="col-md-3 col-sm-3">
        <?php include('includes/sidebar.php');?>
      <div class="col-md-6 col-sm-8">
        <div class="profile_wrap">
          <h5 class="uppercase underline">Genral Settings</h5>
          <?php  
         if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
          <form  method="post">
           <div class="form-group">
              <label class="control-label">Reg Date -</label>
             <?php echo htmlentities($result->RegDate);?>
            </div>
             <?php if($result->UpdationDate!=""){?>
            <div class="form-group">
              <label class="control-label">Last Update at  -</label>
             <?php echo htmlentities($result->UpdationDate);?>
            </div>
            <?php } ?>
            <div class="form-group">
              <label class="control-label">Full Name</label>
              <input class="form-control white_bg" name="fullname" value="<?php echo htmlentities($result->FullName);?>" id="fullname" type="text"  required>
            </div>
            <div class="form-group">
              <label class="control-label">Email Address</label>
              <input class="form-control white_bg" value="<?php echo htmlentities($result->EmailId);?>" name="emailid" id="email" type="email" required readonly>
            </div>
            <div class="form-group">
              <label class="control-label">Phone Number</label>
              <input class="form-control white_bg" name="mobilenumber" value="<?php echo htmlentities($result->ContactNo);?>" id="phone-number" type="text" required>
            </div>
            <div class="form-group">
              <label class="control-label">Date of Birth&nbsp;(dd/mm/yyyy)</label>
              <input class="form-control white_bg" value="<?php echo htmlentities($result->dob);?>" name="dob" placeholder="dd/mm/yyyy" id="birth-date" type="text" >
            </div>
            <div class="form-group">
              <label class="control-label">Your Address</label>
              <textarea class="form-control white_bg" name="address" rows="4" ><?php echo htmlentities($result->Address);?></textarea>
            </div>
            <div class="form-group">
              <label class="control-label">Country</label>
              <input class="form-control white_bg"  id="country" name="country" value="<?php echo htmlentities($result->City);?>" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">City</label>
              <input class="form-control white_bg" id="city" name="city" value="<?php echo htmlentities($result->City);?>" type="text">
            </div>
            <?php }} ?>
           
            <div class="form-group">
              <button type="submit" name="updateprofile" class="btn">Save Changes <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
</section>


</body>
</html>

