
  <div class="modal-dialog">
  <div class="modal-content">
  <div class="modal-body">
<?php
include_once 'config.php';
$id=$_GET['job_id'];
$sql="select * from jobs where job_id='$id'";
$result=$con->query($sql);
$record=$result->fetch_assoc();
?>
<h4>Job Details</h4>
<p>job title:  <?php echo $record['job_title']; ?></p>
<p>Employer: <?php echo $record['employer']; ?></p>
<p>Skills: <?php echo $record['skills']; ?></p>
<p>Qualification: <?php echo $record['qualification']; ?></p>
<p>Experience: <?php echo $record['experience'];?></p>
<p>Job Description: <?php echo $record['job_description']; ?></p>
</div>
</div>
</div>

