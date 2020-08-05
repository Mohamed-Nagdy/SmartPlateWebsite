<?php

	require("../phpIncludes/initConnection.php");

	// here delete the user posts
	// check if the delete button is clicked 
	if(isset($_GET["deleteUserPost"])){
		// get the post id
		$postId = $_GET["deleteUserPost"];
		// the query to delete the specific post
		$query = "delete from posts where post_id=$postId";
		
		// send the query
		mysqli_query($conn, $query);
		//		echo "Post deleted";
		// refresh the page
		header('Location: '. 'userPage.php');
		exit();
		
	}
	

	// here delete the doctor posts
	// check if the delete button is clicked 
	if(isset($_GET["deleteDoctorPost"])){
		// get the post id
		$postId = $_GET["deleteDoctorPost"];
		// the query to delete the specific post
		$query = "delete from posts where post_id=$postId";
		
		// send the query
		mysqli_query($conn, $query);
		
		// refresh the page
		header('Location: '. 'doctorPage.php');
		exit();
		
	}
?>