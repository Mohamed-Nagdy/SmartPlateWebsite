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

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////                                                                                                                     //////
    /////                                                   Admin Login                                                       //////
    /////                                                                                                                     //////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	// check if the submit button has clicked 
	if(isset($_POST["adminLogin"])){
		
		// take the sent user name and password 
		$adminName = $_POST['adminName'];
		$adminPassword =  $_POST['adminPassword'];
		
		// check if the fields are empty then exit 
		if($adminName == "" or $adminPassword == ""){
            echo "<script> alert('please insert all data')</script>";
            header('Location: '. 'index.php');
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
            header('Location: '. 'index.php');
		}
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////                                                                                                                     //////
    /////                                             Edit Admin And Doctor Data                                              //////
    /////                                                                                                                     //////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    


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
	    header('Location: '. 'adminPanelEnter.php?show=doctors');
		exit();
		
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
	    header('Location: '. 'adminPanelEnter.php?show=admins');
		exit();
		
	}

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////                                                                                                                     //////
    /////                                        Delete Admin Or Doctor Or Posts                                              //////
    /////                                                                                                                     //////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
    
 	// check if there is an action happened then we can go through the code
     if(isset($_GET['action'])){
		
		// check if the type sent was user
		if($_GET['type'] == 'users'){

			// get the user id and delete user using it's id
			$userId = $_GET['userId'];

			$query = "delete from users where user_id=$userId";

			$data = mysqli_query($conn, $query);
			
			// redirect to the admin page
			header('Location: '. 'adminPanelEnter.php?show=users');
			exit();

		}

		// check if the type sent was doctor
		if($_GET['type'] == 'doctors'){

			// get the doctor id and delete doctor using it's id
			$doctorId = $_GET['doctorId'];

			$query = "delete from doctors where doctor_id=$doctorId";

			$data = mysqli_query($conn, $query);
			
			// redirect to the admin page
	    	header('Location: '. 'adminPanelEnter.php?show=doctors');
			exit();
				
		}

		// check if the type sent was admin
		if($_GET['type'] == 'admins'){

			// get the admin id and delete admin using it's id
			$adminId = $_GET['adminId'];

			$query = "delete from admins where admin_id=$adminId";

			$data = mysqli_query($conn, $query);
			
			// redirect to the admin page
	    	header('Location: '. 'adminPanelEnter.php?show=admins');
			exit();

		}

		// check if the type sent was post
		if($_GET['type'] == 'posts'){

			// get the post id and delete post using it's id
			$postId = $_GET['postId'];

			$query = "delete from posts where post_id=$postId";

			$data = mysqli_query($conn, $query);
			
			// redirect to the admin page
			header('Location: '. 'adminPanelEnter.php?show=posts');
			exit();

		}
	}   

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////                                                                                                                     //////
    /////                                        Add New Admin Or Doctor                                                      //////
    /////                                                                                                                     //////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
    
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
            header('Location: '. 'adminAddNew.php');
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
            header('Location: '. 'adminAddNew.php');
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
	    header('Location: '. 'adminPanelEnter.php?show=doctors');
		exit();
		
	}

	// if the post method is come from the add admin form we go in here
	if(isset($_POST['addAdmin'])){
		
		// get all data we need from the post global variable
		$adminName = $_POST['adminName'];
		$adminPassword =$_POST['adminPassword'];
		
		// check if fields have data or not
		if($adminName == "" or $adminPassword == ""){
            echo "<script>alert('Please Fill All Fields')</script>";
            header('Location: '. 'adminAddNew.php');
			exit();
		}
		
		// query to add new admin
		$query = "insert into admins(admin_name, admin_password) values('$adminName', '$adminPassword')";
		
		// send the query
		$data = mysqli_query($conn, $query);
		
		// redirect to the index page
	    header('Location: '. 'adminPanelEnter.php?show=admins');
		exit();
		
	}    

?>