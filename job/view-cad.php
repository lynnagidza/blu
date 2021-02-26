
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
<th>Candidate Name</th>
<th>Mobile</th>
<th>Applied</th>
</tr>
<?php
$sql="select * from reg_user";
$result=$con->query($sql);
while($record=$result->fetch_assoc()){
?>
<tr>
<td><?php echo $record['name'];?></td>
<td><?php echo $record['mobile'];?></td>
<td><?php echo 0; ?></td>
<td>
</td>
</tr>


<?php
}?>
</table>
</div>
</div>
</body>
</html>
