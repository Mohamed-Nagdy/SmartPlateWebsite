<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Edit</title>
<link rel="stylesheet" type="text/css" href="../style/adminEdit.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<input type='hidden' name='id' value=''>
	
<!--this code to show form of edit data of admin or doctor depend on the type came from the admin panel-->
	<?php
		require("../phpIncludes/initConnection.php");
	
		// check if get has type and it has value
		if(isset($_GET['type'])){
			
			// check if the type is doctor 
			if($_GET['type'] == 'doctors'){
				
				// get the doctor id to get all data for this specific docotr
				$doctorId = $_GET['doctorId'];
				
				// query for get all data for the doctor
				$query = "select * from doctors where doctor_id=$doctorId";
				
				
				// send the query to data base and get the data back
				$data = mysqli_query($conn, $query);
				
				// fetch the data and save it into variables
				$row = mysqli_fetch_array($data);
				$doctorName = $row['doctor_name'];
				$doctorEmail = $row['doctor_email'];
				$doctorPassword = $row['doctor_password'];
				
				// draw the form of edit doctor with the values back from database
				echo "
					<form action='adminEdit.php' method='post' class='boxdoc'>
						
						<input type='hidden' name='id' value='$doctorId'>
						<h1>Edit doctor <i class='fa fa-user-md'></i></h1>
						
						<p>Doctor Name : </p>
						<input type='text' name='doctorName' value='$doctorName'><br>
						
						<p>Doctor E-mail : </p>
						<input type='email' name='doctorEmail' value='$doctorEmail'><br>
						
						<p>Doctor Password : </p>
						<input type='text' name='doctorPassword' value='$doctorPassword'><br>
						
						<input type='submit' name='editDoctor' value='Edit Doctor'>
					</form>
				";
			}
			
			// check if the type is admin
			if($_GET['type'] == 'admins'){
				
				// get the id of the admin sent from the admin panel 
				$adminId = $_GET['adminId'];
				
				// the query to get data for this specific admin
				$query = "select * from admins where admin_id=$adminId";
				
				// send the query to database and get data back
				$data = mysqli_query($conn, $query);
				
				// fetch the data array and save data into variables
				$row = mysqli_fetch_array($data);
				$adminName = $row['admin_name'];
				$adminPassword = $row['admin_password'];
				
				// draw the form of edit admin with the values came from database
				echo "
					<form action='adminEdit.php' method='post' class='box'>
					    <h1> Add Admin <i class='fa fa-address-card-o'></i></h1>
						
						<input type='hidden' name='id' value='$adminId'>
						
						<p>Admin Name : </p>
						<input type='text' name='adminName' value='$adminName'><br>
						
						<p>Admin Password : </p>
						<input type='text' name='adminPassword' value='$adminPassword'><br>
						
						<input type='submit' name='editAdmin' value='Edit Admin'>
					</form>
				";
			}
		}
	?>
	
</body>
</html>


<!--this code is for edit the data of the doctor or the admin-->
<!--front end never touch this code-->
<?php

	require("../phpIncludes/initConnection.php");

	// check if post is envoked then we can start to edit doctor data
	if(isset($_POST['editDoctor'])){
		
		$doctorId = $_POST['id'];
		$doctorName = $_POST['doctorName'];
		$doctorEmail = $_POST['doctorEmail'];
		$doctorPassword = $_POST['doctorPassword'];
				
		// check if any is empty ... never trust user
		if($doctorName == "" or $doctorEmail == "" or $doctorPassword == ""){
			
			echo "<script>alert('Please Fill All Fields')</script>";
			exit();
		}
		
		// query to update data of the doctor using new data and it's id
		$query = "update doctors set doctor_name='$doctorName', doctor_email='$doctorEmail', doctor_password='$doctorPassword' where doctor_id=$doctorId";
		
		// send query to database
		$data = mysqli_query($conn, $query);
		
		// redirect to the index page
	    header('Location: '. 'adminPanelEnter.php');
		
	}

	// if the request is to edit admin
	if(isset($_POST['editAdmin'])){
		
		// get all data from post method 
		$adminId = $_POST['id'];
		$adminName = $_POST['adminName'];
		$adminPassword =$_POST['adminPassword'];

		// check if any field is empty
		if($adminName == "" or $adminPassword == ""){
			echo "<script>alert('Please Fill All Fields')</script>";
			exit();
		}
		
		// the query to update the admin table using new data and admin id
		$query = "update admins set admin_name='$adminName', admin_password='$adminPassword' where admin_id=$adminId";
		
		// send the query to the database
		$data = mysqli_query($conn, $query);
		
		// redirect to the index page
	    header('Location: '. 'adminPanelEnter.php');
		
	}
?>