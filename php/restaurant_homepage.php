<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Homepage</title>
	<link rel="stylesheet" href="../css/default.css">
</head>
<body>
	<?php
		session_start();
	?>
	<ul class="nav-bar">
		<li><a href="logout.php">Logout</a></li>
		<li><a href="../html/add_location.html">Add Location</a></li>
	</ul>
	<?php
		var_dump($_SESSION['grub_user']);
		unset($_SESSION['grub_user']);
	?>
	
</body>
</html>