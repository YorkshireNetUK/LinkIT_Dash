<?php
$progname = basename($_SERVER['SCRIPT_FILENAME'],".php");
include_once 'include/config.php';
include_once 'include/version.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="refresh" content="300">
<title>HBlink3 DMR Server - System Info</title>
<script type="text/javascript" src="scripts/hbmon.js"></script>
<link rel="stylesheet" type="text/css" href="css/styles.php" />
<meta name="description" content="Copyright &copy; 2016-2023. The Regents of the K0USY Group. All rights reserved. Version SP2ONG 2019-2023 (v20230102) HBlink3 Dashboard " />
</head>
<body style="background-color: #d0d0d0;font: 10pt arial, sans-serif;">
<center><div style="width:1100px; text-align: center; margin-top:5px;">
<p style="font-size: 10px; text-align: right; margin-right: 16px">Dashboard Version: <?php echo DASH; ?></p>
<img src="img/HBLINK_logoV2.png?random=323527528432525.24234" alt="" />
</div>
<div style="width: 1100px;">
<p style="text-align:center;"><span style="color:#000;font-size: 18px; font-weight:bold;"><?php echo REPORT_NAME;?></span></p>
<p></p>
</div>
<?php include_once 'buttons.html'; ?>
<!--
<div>
<a target="_blank" href="esm/"><button class="button link">&nbsp;eZ Server Monitor&nbsp;</button></a>
</div>
-->
<fieldset style="background-color:#e0e0e0;display:inline-block;margin-left:20px;margin-right:20px;font-size:14px;border-top-left-radius: 10px; border-top-right-radius: 10px;border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
<legend><b><font color="#000">&nbsp;.: System Info :.&nbsp;</font></b></legend>
<center>
<!-- Temp CPU -->
<p><img alt="" src="img/tempC.png" /><p>
<!-- Disk usage -->
<p><img alt="" src="img/hdd.png" /><p>
<!-- Memory usage -->
<p><img alt="" src="img/mem.png" /><p>
<!-- CPU loads -->
<p><img alt="" src="img/cpu.png" /><p>
<!-- Network traffic -->
<p><img alt="" src="img/mrtg/localhost_2-day.png" /><p>
</p></center>
<font color=blue><b>BLUE</b></font> Outgoing Traffic in Bits per Second | <font color=green><b>GREEN</b></font> Incoming Traffic in Bits per Second
</br>
</fieldset>
<br>
<!--footer-->
<?php include_once 'elements/footer.php'; ?>
<!--//footer-->
</center>
</body>
</html>
