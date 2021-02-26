
<?php 
include_once 'config.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
  
if(isset($_POST['submit']))
  {

$sql=$con->prepare("insert into admin_inbox(subject,message,msg_id) values(?,?,?)");
$sql->bind_param("sss",$subject,$message,$msg_id);
$subject=$_POST['subject'];
$message=$_POST['message'];
$query="select from_id from admin_inbox where msg_id='$msg_id'";
$result=$con->query($query);
$record=$result->fetch_assoc();
$msg_id=$record['msg_id'];
$sql->execute();
$sql="update message where msg_id='$msg_id'";
$con->query($sql);
}
}
?>
<section class="body-section">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-push-2 col-sm-push-2 col-md-push-2">
<h2 align="center">Post A Review</h2><br />
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
<label class="control-label">Subject </label><input type="text" name="subject" class="form-control"  />  <br />
<label class="control-label">message  </label><textarea class="form-control white_bg" name="message" rows="4" required=""></textarea></label><br />
<div class="form-group">
              <button type="submit" name="submit" class="btn">Save  <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>             
<?php

?>
</select><br />
</form>
</div>
</div>
</div>
</section>

