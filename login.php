<!doctype html>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<?php include 'header.php';?>
</head>
<body>
	<?php include 'header_menu.php';?>
	<div id="body">
		<h1><span>let's Login</span></h1>
		<form method="get" action="login_db.php" id="login">
			<input type="text" name="email" id="email" placeholder="Email">
			<input type="text" name="pwd" id="pwd" placeholder="password">
			<input type="submit" name="send" id="send" value="send">
		</form>
		<form action="">
		<input type="submit" name="send" id="send" value="Register">
		</form>
	</div>
	<?php include 'footer.php';?>
</body>
</html>
