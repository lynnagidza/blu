
<body>
<?php
include_once 'config.php';
include_once 'header.php';
?>
<section class="body-section">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-push-2 col-sm-push-2 col-md-push-2 job-list">
<table class="table table-hover" >
<tr>
<th>JOB TITLE</th>
<th>Employer</th>
<th>Posted on</th>
<th></th>
</tr>
<?php
$sql="select job_id,job_title,applied,employer,posted from jobs";
$result=$con->query($sql);
while($record=$result->fetch_assoc()){
$page="view-details.php?job_id=".$record['job_id'];
?>
<tr data-toggle="modal" data-target="#demo" onClick="load('<?php echo $page; ?>')">
<td><a href="view-details.php?job_id=<?php echo $record['job_id']; ?>"><?php echo $record['job_title'];?></a></td>
<td><?php echo $record['employer']; ?></td>
<td><?php $date=date_create($record['posted']); echo date_format($date,"d.m.y");?></td>
<td>
<a href="apply.php">Apply Now</a>
</td>

</tr>

<?php
}?>
</table>
</div>

</div>
<div id="demo" class="modal fade" role="dialog">

</div>
</div>
</section> 

<?php
include_once 'footer.php';
?>
<script>
function load(sub){
var page=sub;
var xhtml=new XMLHttpRequest();
xhtml.open("GET",page,false);
xhtml.send();
document.getElementById("demo").innerHTML=xhtml.responseText;
}
</script>
</body>
</html>
