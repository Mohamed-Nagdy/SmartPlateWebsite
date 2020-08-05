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


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////                                                                                                                     //////
/////                                     Add new Post To User                                                            //////
/////                                                                                                                     //////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
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

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////                                                                                                                     //////
/////                                     Edit User Data                                                                  //////
/////                                                                                                                     //////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if(isset($_POST["editUserData"])){
    
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

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////                                                                                                                     //////
/////                                     Login                                                                           //////
/////                                                                                                                     //////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if(isset($_POST["login"])){
		
    if($_POST["userType"] == "D"){
        
        // get the data from the post
        $email = $_POST["email"];
        $password = $_POST["password"];

        // check if any field if empty we warninig user
        if($email == "" or $password == ""){
            echo "<script>alert('Please Insert All Data')</script>";
            header('Location:'.'login.php');
        }

        // the query
        $query = "select * from `doctors` where `doctor_email`='$email' and `doctor_password`='$password'";

        // send the query to the database and get the response
        $data = mysqli_query($conn, $query);

        // check if there is a data back
        if(mysqli_num_rows($data) != 0){

            // set all data we will need into the session global variable
            $row = mysqli_fetch_array($data);

            $_SESSION["mode"] = "user";
            $_SESSION['userType'] = "D";
            $_SESSION['doctorName'] = $row["doctor_name"];
            $_SESSION['imageLink'] = $row["doctor_image"];
            $_SESSION['doctorId'] = $row["doctor_id"];
            

            // redirect to the index page
            header('Location:'.'allPosts.php');


        }

        else{
            echo "<script>alert('Wrong User Name Or Password')</script>";
            header('Location:'.'login.php');
        }	
    }
    
    else{
        // get the data from the post
        $email = $_POST["email"];
        $password = $_POST["password"];

        // check if any field if empty we warninig user
        if($email == "" or $password == ""){
            echo "<script>alert('Please Insert All Data')</script>";
            header('Location:'.'login.php');
        }

        // the query
        $query = "select * from `users` where `email`='$email' and `user_password`='$password'";

        // send the query to the database and get the response
        $data = mysqli_query($conn, $query);

        // check if there is a data back
        if(mysqli_num_rows($data) != 0){

            // set all data we will need into the session global variable
            $row = mysqli_fetch_array($data);

            $_SESSION["mode"] = "user";
            $_SESSION['userName'] = $row["user_name"];
            $_SESSION['imageLink'] = $row["user_image"];
            $_SESSION['notes'] = $row["doctor_notes"];
            $_SESSION['userId'] = $row["user_id"];
            $_SESSION['bodyMassIndex'] = $row["body_mass_index"];
            $_SESSION['basalMetabolicRate'] = $row["basal_metabolic_rate"];
            $_SESSION['bodyFatPersentage'] = $row["body_fat_persentage"];
            $_SESSION['leanBodyMass'] = $row["lean_body_mass"];
            $_SESSION['protienInGrams'] = $row["protien_in_grams"];
            $_SESSION['carbsInGrams'] = $row["carbs_in_grams"];
            $_SESSION['fatInGrams'] = $row["fat_in_grams"];
            $_SESSION["userAge"] = $row["user_age"];
            $_SESSION["userGender"] = $row["user_gender"];
            $_SESSION['userHeight'] = $row["user_height"];
            $_SESSION["userWeight"] = $row["user_weight"];
            $_SESSION['calories'] = $row["calories"];
            $_SESSION['userType'] = "U";

            // redirect to the index page
            header('Location:'. 'allPosts.php');


        }

        else{
            echo "<script>alert('Wrong User Name Or Password')</script>";
            header('Location:'.'login.php');
        }	
    }
        
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////                                                                                                                     //////
/////                                     Remove Posts                                                                    //////
/////                                                                                                                     //////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// here delete the user posts
	// check if the delete button is clicked 
	if(isset($_GET["deleteUserPost"])){
		// get the post id
        $postId = $_GET["deleteUserPost"];
        
        $query = "select post_image from posts where post_id=$postId";
        $data = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($data);

        $imagePath = '../' . $row['post_image'];

        unlink($imagePath);

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
        
        $query = "select post_image from posts where post_id=$postId";
        $data = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($data);

        $imagePath = '../' . $row['post_image'];

        unlink($imagePath);

		// the query to delete the specific post
		$query = "delete from posts where post_id=$postId";
		
		// send the query
		mysqli_query($conn, $query);
		
		// refresh the page
		header('Location: '. 'doctorPage.php');
		exit();
		
    }
    
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////                                                                                                                     //////
/////                                    Sign Up                                                                          //////
/////                                                                                                                     //////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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
                header('Location: '. 'signUp.php');
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
                header('Location: '. 'signUp.php');
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
                    header('Location: '. 'signUp.php');
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
                header('Location: '. 'allPosts.php');
            }
            
            
            
            
        }

?>