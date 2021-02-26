<?php
//date_default_timezone_set("Asia/Bangkok");
date_default_timezone_set('Asia/Kolkata');
$timestamp = date("Y-m-d H:i:s");
echo $timestamp."<br>";
date_default_timezone_set('Asia/Bangkok');
$timestamp1 = date("Y-m-d H:i:s");
echo $timestamp1;
?>