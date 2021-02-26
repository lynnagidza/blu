
<?php
include 'config.php';
if(!empty($_GET['id']))
{
$id=$_GET['id'];
$sql="delete from jobs where job_id=$id";
$con->query($sql);
}
?>
<div class="container">
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
<table class="table table-hover" >
<tr>
<th>JOB TITLE</th>
<th>Employer</th>
<th>Posted on</th>
<th>Applied</th>
<th></th>
</tr>
<?php
$sql="select job_id,job_title,applied,employer,posted from jobs";
$result=$con->query($sql);
while($record=$result->fetch_assoc()){
?>
<tr>
<td><?php echo $record['job_title'];?></td>
<td><?php echo $record['employer']; ?></td>
<td><?php $date=date_create($record['posted']); echo date_format($date,"d.m.y");?></td>
<td><?php echo $record['applied'];?></td>
<td>
<p>
<a href="edit-details.php?id='<?php echo $record['job_id']; ?>'">edit</a>
<a href="view-all.php?id=<?php echo $record['job_id']; ?>" onclick="return confirm('are you sure you want to delete this record?')">delete</a>
</p>
</td>
</tr>


<?php
}?>
</table>
</div>
</div>
</body>
</html>
