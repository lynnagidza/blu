
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
<th>Company Name</th>
<th>CEO</th>
<th>Jobs Posted</th>
</tr>
<?php
$sql="select * from employer";
$result=$con->query($sql);
while($record=$result->fetch_assoc()){
?>
<tr>
<td><?php echo $record['company_name'];?></td>
<td><?php echo $record['ceo'];?></td>
<td><?php echo $record['jobs_posted']; ?></td>
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
