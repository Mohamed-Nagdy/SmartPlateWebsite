<?php
	session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>

<body>
	
	<form action="server.php" method="post">
		
		<div class="bigbox">
		<img src="doc.jpg" class="doc">
		<h1>login </h1> <br>
		<p> Username</p>
		<input type="text" name="adminName" placeholder="Enter Username" required>
		<p>Password</p>
		<input type="password" name="adminPassword" placeholder="Enter Password" required> <br> <br>
		<input type="submit" name="adminLogin" value="adminLogin">
		
		
	</div>
	</form>
	
</body>
</html>
