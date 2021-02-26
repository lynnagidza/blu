
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
<th>From</th>
<th>Recieved Date</th>
<th>Subject</th>
</tr>
<?php
$sql="select * from admin_inbox";
$result=$con->query($sql);
while($record=$result->fetch_assoc()){
?>
<tr>
<td><?php echo $record['from_id'];?></td>
<td><?php $date=date_create($record['recieved_date']); echo date_format($date,"d.m.y");?></td>
<td><?php echo $record['subject'];?></td>
<td>
<p>
<a href="#" onclick="return confirm('are you sure you want to delete this record?')">delete</a>
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
