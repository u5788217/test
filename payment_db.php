<?php
include 'config.php';

$tickets = $_GET['ticket'];
$number = sizeof($tickets);
$oConn = connect_db();

for($x = 0; $x < $number; $x++){
	echo $tickets[$x]." ";
}  
	foreach ($oConn->query('SELECT * FROM concert') as $aRow) {
        	$conid = $aRow['id_concert'];
		echo '<li>
               <div style="width:940px">
                   <h3>Your booking ticket</h3>
                   <h2>Selected seat: A20 A21</h2>
                   <h2>Total price: 10000 Baht</h2>
                   <input type="button" value="CONFIRM" name="BOOK">
               </div>
         </li>';
	}
	$oConn = null;
?>