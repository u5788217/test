<?php

include 'config.php';
   $oConn = connect_db();
	foreach ($oConn->query('SELECT * FROM concert') as $aRow) {
        	$conid = $aRow['id_concert'];
		echo '<li>
		 	<a href="" class="figure">
			<img src="'.$aRow['poster_concert'].'" alt="">
			</a>
			<div><h3>'.$aRow['name_concert'].'</h3>
			<p>'.$aRow['des_concert'].'</p><form method = "get" action=""><select>';
		foreach ($oConn->query('SELECT * FROM round') as $aRow) {
			echo '<option value="'.$aRow['id_round'].'">'.$aRow['date'].' '.$aRow['time'].'</option>';
		}
        echo '</select><input type="submit" value = "Book now"class="more">
		</div>
		</li>';
	}
	$oConn = null;
?>

	
