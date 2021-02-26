
<?php
include_once 'config.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{

  if(isset($_POST['submit']))
  {

    // $sql=$con->prepare("insert into admin_inbox(subject,message,msg_id) values(?,?,?)");
    // $sql->bind_param("sss",$subject,$message,$msg_id);
    // $subject=$_POST['subject'];
    // $message=$_POST['message'];
    // $query="select from_id from admin_inbox where msg_id='$msg_id'";
    // $result=$con->query($query);
    // $record=$result->fetch_assoc();
    // $msg_id=$record['msg_id'];
    // $sql->execute();
    // $sql="update message where msg_id='$msg_id'";

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
            <label class="control-label">Choose worker:</label>
            <!-- <input type="text" name="subject" class="form-control"  /> -->
            <?php
            $workers = "SELECT fullname FROM workers ORDER BY fullname";
            $getWorkers = mysqli_query($con,$workers);
            echo "<select id='workers' name='workers[]' class='form-control'  >";
            while ($workersArray = mysqli_fetch_assoc($getWorkers)){
              $displayWorkers = $workersArray['workers'];
              echo "<option>$displayWorkers</option>";
            }
            echo "</select>" ?>
            <br />
            <?php
            $loc = "SELECT DISTINCT location FROM workers ORDER BY location";
            $getLoc = mysqli_query($con,$loc);
            echo "<select id='location' name='location[]' class='form-control' style='border:none; border-radius: 0px 10px 10px 0px;'> ";
            while ($locationArray = mysqli_fetch_assoc($getLoc)){
              $displayLoc = $locationArray['location'];
              echo "<option>$displayLoc</option>";
            }
            echo "</select>" ?>
            <label class="control-label">Review:</label><textarea class="form-control white_bg" name="message" rows="4" required=""></textarea><br />
            <div class="form-group">
              <button type="submit" name="submit" class="btn">Post<span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
            <?php

            ?>
          </select><br />
        </form>
      </div>
    </div>
  </div>
</section>
