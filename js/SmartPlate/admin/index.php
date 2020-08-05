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
	
	<form action="#" method="post">
		
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

<?php
	// get the connection file
	require("../phpIncludes/initConnection.php");

	// check if the submit button has clicked 
	if(isset($_POST["adminLogin"])){
		
		// take the sent user name and password 
		$adminName = $_POST['adminName'];
		$adminPassword =  $_POST['adminPassword'];
		
		// check if the fields are empty then exit 
		if($adminName == "" or $adminPassword == ""){
			echo "<script> alert('please insert all data')</script>";
			exit();
		}
		
		// the query for admin table
		$query = "select * from admins where admin_name='$adminName' and admin_password='$adminPassword'";
		
		// send the query to database and take data back
		$data = mysqli_query($conn, $query);
		
		// if there are data back from database then it's true and now we can make user login 
		if(mysqli_num_rows($data) != 0){
			
			// take the admin data into session global variable and redirect to the admin panel
			$_SESSION['adminName'] = $adminName;
			$_SESSION['adminPassword'] = $adminPassword;
			header('Location: '. 'adminPanelEnter.php');
		
		}
		
		// if there is no data back then the user enterd wrong data
		else{
			echo "<script> alert('Wrong Password Or Admin Name')</script>";
		}
	
	}
?>

