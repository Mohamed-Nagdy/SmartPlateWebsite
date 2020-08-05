<?php

	session_start();
	// get the connection data
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

	// Add the user post
	if(isset($_POST["userPost"])){
		
		// get all values
		$postContent = $_POST["postContent"];
		$postTitle = $_POST["postTitle"];
		$categoryName = $_POST["categoryName"];
		$userId = $_SESSION['userId'];
		$userName = $_SESSION["userName"];
		$userImage = $_SESSION['imageLink'];
		$date = date("Y-m-d h:i:sa");
		$userType = $_SESSION["userType"];
		$postPrivacy = $_POST["postPrivacy"];
		
		// get the image name and temp directory of it
		$postImage = $_FILES['postImage']['name'];
		$postImageTmp = $_FILES['postImage']['tmp_name'];
		
		// check if all fields are filled
		if($postContent == "" or $postTitle == "" or $categoryName == "" or $postImage == ""){
			echo "<script>alert('Please Fill All Fields')</script>";
			exit();
		}
		
		
		
		// the path of uploaded image
		$imageNames = generateRandomString(5) .$postImage;
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
			move_uploaded_file($postImageTmp, $path);
		}
		
		// the query to set data into the table
		$queryPost = "insert into posts(post_title, post_content, user_id, user_name, user_type, user_image, post_image, post_date, category_name, post_privacy) values('$postTitle', '$postContent', '$userId', '$userName', '$userType', '$userImage','$realPath', '$date','$categoryName', '$postPrivacy')";
		
		// send the query
		mysqli_query($conn, $queryPost);
	//		echo "post added";
		
		header('Location: '. 'userPage.php');
		exit();
		
	}


	// here add the doctor post
	if(isset($_POST["doctorPost"])){
		
		// get all values
		$postContent = $_POST["postContent"];
		$postTitle = $_POST["postTitle"];
		$categoryName = $_POST["categoryName"];
		$userId = $_SESSION['doctorId'];
		$userName = $_SESSION["doctorName"];
		$userImage = $_SESSION['imageLink'];
		$date = date("Y-m-d h:i:sa");
		$userType = $_SESSION["userType"];
		$postPrivacy = $_POST["postPrivacy"];
		
		// get the image name and temp directory of it
		$postImage = $_FILES['postImage']['name'];
		$postImageTmp = $_FILES['postImage']['tmp_name'];
		
		// check if all fields are filled
		if($postContent == "" or $postTitle == "" or $categoryName == "" or $postImage == ""){
			echo "<script>alert('Please Fill All Fields')</script>";
			exit();
		}
		
		
		
		// the path of uploaded image
		$imageNames = generateRandomString(5) .$postImage;
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
			move_uploaded_file($postImageTmp, $path);
		}
		
		// the query to set data into the table
		$queryPost = "insert into posts(post_title, post_content, user_id, user_name, user_type, user_image, post_image, post_date, category_name, post_privacy) values('$postTitle', '$postContent', '$userId', '$userName', '$userType', '$userImage','$realPath', '$date','$categoryName', '$postPrivacy')";
		
		// send the query
		mysqli_query($conn, $queryPost);
		
		header('Location: doctorPage.php');
		exit();
		
	}


	
?>