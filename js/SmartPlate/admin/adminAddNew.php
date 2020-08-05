<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Add New</title>
<link rel="stylesheet" type="text/css" href="../style/adminAddNew.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	
	<?php
		if(isset($_GET['type'])){
//			if($_GET['type'] == 'posts'){
//				echo "
//					
//				";
//			}
			
			// check if the type of the method is doctor
			if($_GET['type'] == 'doctors'){
				
				// draw the form of doctor to add new doctor
				echo "
					<form action='adminAddNew.php' method='post' enctype='multipart/form-data' class='boxdoc'>
						
						<h1>Add doctor <i class='fa fa-user-md'></i></h1>
						
						<input type='text' name='doctorName' placeholder='doctor name'>
						
						
						<input type='email' name='doctorEmail' placeholder='doctor email'>
						
						
						<input type='password' name='doctorPassword' placeholder='doctor password'>
						
						<p>sel doc img</p>
						<input type='file' name='doctorImage'>
						
						
						<input type='submit' name='addDoctor' value='Add Doctor'>
						
					</form>
				";
			}
			
			// check if the type is admin
			if($_GET['type'] == 'admins'){
				
				// draw the from of admin to add new admin
				echo "
					<form action='adminAddNew.php' method='post' class='box' >
						
						<h1>Add Admin <i class='fa fa-address-card-o''></i></h1>
						
						<input type='text' name='adminName' placeholder='admin name'>
						
						
						<input type='password' name='adminPassword' placeholder='admin password' >
						
						<input type='submit' name='addAdmin' value='Add Admin'>
					</form>
				";
			}
		}
	?>
	
</body>
</html>

<!--here the code to add new admin or new doctor-->
<!--front end never touch-->
<?php

	require("../phpIncludes/initConnection.php");

	// this function is to create a random string to add it to the uploaded image name
	function generateRandomString($n) { 
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
		$randomString = ''; 
  
		for ($i = 0; $i < $n; $i++) { 
			$index = rand(0, strlen($characters) - 1); 
			$randomString .= $characters[$index]; 
		} 
  
    	return $randomString; 
	} 

	// if the post method is come from the add doctor form we go in here
	if(isset($_POST['addDoctor'])){
		
		// get all data we need from the post global variable
		$doctorName = $_POST['doctorName'];
		$doctorEmail = $_POST['doctorEmail'];
		$doctorPassword = $_POST['doctorPassword'];
		
		$doctorImage = $_FILES['doctorImage']['name'];
		$doctorImageTmp = $_FILES['doctorImage']['tmp_name'];
		
		// check if fields have data or not
		if($doctorName == "" or $doctorEmail == "" or $doctorPassword == "" or $doctorImage == ""){
			
			echo "<script>alert('Please Fill All Fields')</script>";
			exit();
		}
		
		// the path of uploaded image
		$imageNames = generateRandomString(5) .$doctorImage;
		$path = "../uploadedImages/". $imageNames;
		$realPath = "uploadedImages/". $imageNames;

		// get the image type 
		$imageFileType = strtolower(pathinfo($path, PATHINFO_EXTENSION));

		// check if the uploaded file is not an image we alert the user
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
			echo "<script>alert('file is not an image')</script>";
			exit();

		}
		// else we upload the image to the path we set
		else{
			move_uploaded_file($doctorImageTmp, $path);
		}
		
		// the query to add new doctor
		$query = "insert into doctors(doctor_name, doctor_email, doctor_password, doctor_image) values('$doctorName', '$doctorEmail', '$doctorPassword', '$realPath')";
		
		// send the query
		$data = mysqli_query($conn, $query);
		
		// redirect to the index page
	    header('Location: '. 'adminPanelEnter.php');
		
	}

	// if the post method is come from the add admin form we go in here
	if(isset($_POST['addAdmin'])){
		
		// get all data we need from the post global variable
		$adminName = $_POST['adminName'];
		$adminPassword =$_POST['adminPassword'];
		
		// check if fields have data or not
		if($adminName == "" or $adminPassword == ""){
			echo "<script>alert('Please Fill All Fields')</script>";
			exit();
		}
		
		// query to add new admin
		$query = "insert into admins(admin_name, admin_password) values('$adminName', '$adminPassword')";
		
		// send the query
		$data = mysqli_query($conn, $query);
		
		// redirect to the index page
	    header('Location: '. 'adminPanelEnter.php');
		
	}
?>





















