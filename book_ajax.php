<?php
include 'config.php';
   $oConn = connect_db();
   $id = explode("+",$_GET['str']);
   $seatid = $id[0];
   $zoneid = $id[1];
  	echo $zoneid.'-'.$seatid.' ';
	$oConn = null;
?>
