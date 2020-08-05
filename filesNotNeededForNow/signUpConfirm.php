<!--this code is to get all data and send to database-->
<!--front end never touch this code start from html tag only-->
<!---------------------------------------------------------------------------------------------------------------------------->
<?php

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

  	// check if the signUp button has clicked we goto our code
	if(isset($_POST["signUp"])){
		
    //		echo "<script> alert('sign up')</script>";
		
		$userName = $_POST["userName"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$confirmPassword = $_POST["confirmPassword"];
		$gender = $_POST["gender"];
		$age = (int) $_POST["age"];
		$weight = (int) $_POST["weight"];
		$doctorName = $_POST["doctorName"];
		$height = (int) $_POST["height"];
		$goal = $_POST["goal"];
		$activity = (float) $_POST["activity"];
		
		$postImage = $_FILES['postImage']['name'];
		$postImageTmp = $_FILES['postImage']['tmp_name'];
		
		
		
    //		echo "<script> alert('check data')</script>";
		// check if any of the fields is empty
    if($userName == "" or $email == "" or $password == "" or $confirmPassword == "" or $age <= 0 or $weight <= 0 or $height
     <= 0 or $goal == "" or $postImage == ""){
			
			echo "<script>var form = document.querySelector('form#main');
					form.addEventListener('submit', function(ev) {
						handleFormSubmit(form);
					});
					</script>
				";
			exit();
		
		}
		
    
		
		// if the email exixts it say that to the user and exit
		// check if the email is in database
		$query1 = "select * from `users` where `email`='$email'";
		$newData = mysqli_query($conn, $query1);

		if(mysqli_num_rows($newData) != 0){
		
			echo "<script>var form = document.querySelector('form#main');
      form.addEventListener('submit', function(ev) {
        handleFormSubmit(form);
      });</script>";
			exit();

		}

		// our sign up senario
		else{
			require("../phpIncludes/initConnection.php");
			
			
			// the path of uploaded image
			$imageNames = generateRandomString(5) .$postImage;
			$path = "../uploadedImages/". $imageNames;
			$realPath = "uploadedImages/". $imageNames;

			// get the image type 
			$imageFileType = strtolower(pathinfo($path, PATHINFO_EXTENSION));

			// check if the uploaded file is not an image we alert the user
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
				echo "<script>var form = document.querySelector('form#main');
        form.addEventListener('submit', function(ev) {
          handleFormSubmit(form);
        });</script>";
				exit();

			}
			// else we upload the image to the path we set
			else{
				move_uploaded_file($postImageTmp, $path);
			}
			
			// Calculate all require data for the user to show after 
			$BMI = $weight / (($height/100) * ($height/100));
			
			if($gender == "M"){
				
				// here the men and boys equations
				if($age > 17){
					// here the men equations
					$BMR = (13.397* $weight) + (4.799 * $height) - (5.677 * $age) + 88.362;
					$BFP = (1.20 * $BMI) + (0.23 * $age) - 16.2;
					
				}
				else{
					// here the boys equations
					$BMR = (13.397 * $weight) + (4.799 * $height) - (5.677 * $age) + 88.362;
					$BFP = (1.51 * $BMI) - (0.70 * $age) - 2.2;
					
				}
				
			}
			
			else{
				// here we make the women and girls equations
				if($age > 15){
					// here the women equations
					$BMR = (9.247 * $weight) + (3.098 * $height) - (4.330 * $age) + 447.593;
					$BFP = (1.20 * $BMI) + (0.23 * $age) - 5.4;
					
				}
				else{
					// here the girl equation
					$BMR = (9.247 * $weight) + (3.098 * $height) - (4.330 * $age) + 447.593;
					$BFP = (1.51 * $BMI) - (0.70 * $age) + 1.4;
					
				}
				
				
			}
			
			// age 24, weight 180, height 180, 
			
			if($goal == 'loss'){
				$caloriesNeeded = $BMR - 500 + (1 - $activity)*400; 
			}
			
			elseif($goal == 'gain'){
				$caloriesNeeded = $BMR + ($activity * 500)*400;
			}
			else{
				$caloriesNeeded = $BMR;
			}
			
			
			echo $BMI . " ";
			echo $BMR . " ";
			echo $BFP . " ";
			echo $LBM = $weight - (($BFP/100) * $weight);
			echo $protien = 1.3 * $LBM;
			echo $carbs =($calremain * (65/400));
			echo $fat =($calremain * (35/900));
			$calremain = $caloriesNeeded -(4 * $protien);
			// now we need to show for user the next
			/*
				Body Mass Index (BMI) 
				The basal metabolic rate(BMR)
				body fat persentage (BFP)
				lean body mass (LBM)
				protien in grams
				carbs  in grams
				fat   in grams
			*/

			////////////////////////////////////////////////End calculation/////////////////////////////////////////////

  //			echo "<script> alert('start query')</script>";
			// this is the query for the data base to get the elements from the table
			$query = "insert into users(user_name, user_password,user_image, email, user_gender, user_age, user_doctor_id, user_height, user_weight, body_mass_index, basal_metabolic_rate, body_fat_persentage, lean_body_mass, protien_in_grams,carbs_in_grams, fat_in_grams, calories) values('$userName', '$password','$realPath','$email','$gender',$age, '$doctorName',$height, $weight, '$BMI', '$BMR', '$BFP', '$LBM', '$protien', '$carbs', '$fat', '$caloriesNeeded')";

			
			// here we send the query to the database
			$data = mysqli_query($conn, $query);
			
  //			echo "<script> alert('data inserted')</script>";
			// this query to get id of the new created user
			$query1 = "select * from users where email='$email' and user_password='$password'";
			
			// here we send the query to the database
			$data1 = mysqli_query($conn, $query1);
			
			// fetch array and get the id
			$row = mysqli_fetch_array($data1);
			$id = $row['user_id'];
			
			// this code to initialize the data in the table with the id of this new user
			$query2 = "insert into user_daily_state(user_id, daily_meal, daily_calories, daily_weight) values($id, '', 0, 0)";
			// here we send the query to the database
			$data2 = mysqli_query($conn, $query2);
			
			// redirect to the index page
			header('Location: '. '../');
		}
		
		
		
		
	}
?>
<!------------------------------------------------------------------------------------------------------------------------>