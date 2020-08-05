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
					<form action='server.php' method='post' enctype='multipart/form-data' class='boxdoc'>
						
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
					<form action='server.php' method='post' class='box' >
						
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






















