<?php
include 'config.php';
   $oConn = connect_db();
   $id = explode("+",$_GET['str']);
   $seatid = $id[0];
   $zoneid = $id[1];
   $price;
	foreach ($oConn->query("SELECT * FROM zone WHERE id_zone = '$zoneid'") as $aRow2) {
		$price=$aRow2['price'];
	}
	echo $_GET['str'];
	echo 'Total price : '.$total;
	$oConn = null;
?>
