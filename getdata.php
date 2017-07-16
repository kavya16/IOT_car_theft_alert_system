<?php
include("database.inc");

$number = $_REQUEST['number'];
$message = $_REQUEST['message'];
//$message = 1,Hyderabad,Low,65
$keyword = $_REQUEST['keyword'];

//Split setting using & symbol
$ar = explode(",", $message);


$device_id=$ar[0];
$location=$ar[1];
$fire_Y_N=$ar[2];
date_default_timezone_set("Asia/Kolkata"); 
$date= date('Y-m-d H:i:s');

		
mysql_query("insert into iot_greenhouse values('','$device_id','$location','$fire_Y_N','$date')");
?>