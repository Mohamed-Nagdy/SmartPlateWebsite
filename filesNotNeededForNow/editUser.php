<?php
	session_start();

	if(isset($_POST["editUserData"])){
		
		require("../phpIncludes/initConnection.php");
		
		$id = $_SESSION["editedUserId1"];	
		
		$userGender = $_POST["gender"];
		$doctorNotes = $_POST["doctorNotes"];
		$BMI = $_POST['BMI'];
		$BMR = $_POST['BMR'];
		$BFP = $_POST['BFP'];
		$LBM = $_POST['LBM'];
		$protien = $_POST['protien'];
		$carbs = $_POST['carbs'];
		$fats = $_POST['fats'];

		
		$query = "update users set user_gender='$userGender', doctor_notes='$doctorNotes', body_mass_index='$BMI', basal_metabolic_rate='$BMR', body_fat_persentage='$BFP', lean_body_mass='$LBM', protien_in_grams='$protien', carbs_in_grams='$carbs', fat_in_grams='$fats' where user_id=$id";
		
		$data = mysqli_query($conn, $query);
		
		
		$dailyMeal = $_POST["dailyMeal"];
		$dailyCalories = $_POST["dailyCalories"];
		$dailyWeight = $_POST["dailyWeight"];
		
		$query = "update user_daily_state set daily_meal='$dailyMeal', daily_calories='$dailyCalories', daily_weight='$dailyWeight' where user_id=$id";
		
		$data = mysqli_query($conn, $query);
		
		header("Location: ". "editUserData.php?editedUserId=$id");
	}
?>