<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title>My Website of www.website-templates.info</title>
  <meta http-equiv="refresh"  content="5" content="TEXT/HTML; CHARSET=UTF-8">
  <meta name="keywords" content="keywords">
  <meta name="description" content="description">
  <meta name="author" content="">
  <meta name="language" content="de">
  <meta name="robots" content="index, follow">
  <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<table align="center" border="0" cellpadding="0" cellspacing="0" width="950">
   <tr>
     <td  colspan="4" height="20px">&nbsp;</td>
   </tr>
   <tr>
   <td width="20px">&nbsp;</td>
      <td class="oben" colspan="2">
        <div class="logo"></div>
        <div id="textobengross">THEFT ALERT SYSTEM IN CARS</div>
        </td>
      <td width="20px">&nbsp;</td>
   </tr>
   <tr>
      <td width="20px">&nbsp;</td>
      <td id="navioben" colspan="2"><div class="headernavi"><a href="index.html">Link 1</a><a href="page2.html">Link 2</a><a href="#">Link 3</a><a href="#">Link 4</a><a href="#">Link 5</a><a href="#">Link 6</a><a href="#">Link 7</a></div></td>
      <td width="20px">&nbsp;</td>
    </tr>
    <tr>
      <td width="20px">&nbsp;</td>
      <td class="zwischen" colspan="2">&nbsp;</td>
      <td width="20px">&nbsp;</td>
    </tr>
   <tr> <td width="20px">&nbsp;</td>
     
       
     
      </td>
      <td class="hauptfenster" valign="top"><div class="haupttext">
        <h2>Sensor Data that is stored in Cloud</h2>
<table width="100%" border="0">
  <tr>
    
    <th><h4>Door Sensor</h4></th>
    <th><h4>MEMS </h4></th>
    <th><h4>Date Time</h4></th>
  </tr>

<?php
include("database.inc");
$res=mysql_query("select * from iot_theftalert order by id DESC");
$count=mysql_num_rows($res);
while($row=mysql_fetch_array($res))
{
?>
  <tr>
	<td align="center"><?php echo $row['location']; ?></td>
	<td align="center"><?php echo $row['Theft_Y_N']; ?></td>
	<td align="center"><?php echo $row['dt_time']; ?></td>

  </tr>
  <?php
}
?>
</table>
<p>&nbsp;</p>
<hr noshade size="1">
      </div></td>
        <td width="20px">&nbsp;</td>
   </tr>
   <tr>
     <td  colspan="4" height="20px">&nbsp;</td>
   </tr>
</table>
<!--Start: This code may not be removed or changed in the free of charge version!-->
<div align="center"><a class="copyright" style="color:#C0C0C0;background-color:#000000;font-weight:normal" href="http://www.website-templates.info" target="_blank">Free Website Templates</a></div> <!--End: This code may not be removed or changed in the free of charge version!-->
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js">
</script>
<script>
$(document).ready(function(){
    $(".send_ins").live("click", function(){
		var mobile = $('#mobile').val();
		var ins = $(this).attr('id');

	
$.post('action.php',{mobile:mobile,ins:ins},function(data)
		{
			
		});

		
    });
});
</script>
</html>