<?php

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
    
    function getData($url){
        $ch = curl_init();
 
        //Set the URL that you want to GET by using the CURLOPT_URL option.
        curl_setopt($ch, CURLOPT_URL, $url);
        
        //Set CURLOPT_RETURNTRANSFER so that the content is returned as a variable.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        //Set CURLOPT_FOLLOWLOCATION to true to follow redirects.
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        
        //Execute the request.
        $data = curl_exec($ch);
        
        //Close the cURL handle.
        curl_close($ch);
        
        //Print the data out onto the page.
        return $data;
    }

    $sensor1 = $_GET['sensor1'];
    $sensor2 = $_GET['sensor2'];
    $sensor3 = $_GET['sensor3'];
    $sensor4 = $_GET['sensor4'];

    $valueToMultiply1 = floatval( floatval($sensor1) / 100);
    $valueToMultiply2 = floatval( floatval($sensor2) / 100);
    $valueToMultiply3 = floatval( floatval($sensor3) / 100);
    $valueToMultiply4 = floatval( floatval($sensor4) / 100);

    $image1Content = $_GET['image1Content'];
    $image2Content = $_GET['image2Content'];
    $image3Content = $_GET['image3Content'];
    $image4Content = $_GET['image4Content'];

    $image1Content = str_replace(" ", "%20", $image1Content);
    $image2Content = str_replace(" ", "%20", $image2Content);
    $image3Content = str_replace(" ", "%20", $image3Content);
    $image4Content = str_replace(" ", "%20", $image4Content);

    $userId = $_GET['userId'];

    $content1 = getData("https://api.edamam.com/api/food-database/v2/parser?ingr=$image1Content&app_id=8f94ea9b&app_key=9572f485a2f49f642014d01c8682ccb5");
    $content2 = getData("https://api.edamam.com/api/food-database/v2/parser?ingr=$image2Content&app_id=8f94ea9b&app_key=9572f485a2f49f642014d01c8682ccb5");
    $content3 = getData("https://api.edamam.com/api/food-database/v2/parser?ingr=$image3Content&app_id=8f94ea9b&app_key=9572f485a2f49f642014d01c8682ccb5");
    $content4 = getData("https://api.edamam.com/api/food-database/v2/parser?ingr=$image4Content&app_id=8f94ea9b&app_key=9572f485a2f49f642014d01c8682ccb5");

    $content1 = json_decode($content1, true);
    $content2 = json_decode($content2, true);
    $content3 = json_decode($content3, true);
    $content4 = json_decode($content4, true);

    $energy1 = $content1['parsed'][0]['food']['nutrients']['ENERC_KCAL'];
    $Protein1 = $content1['parsed'][0]['food']['nutrients']['PROCNT'];
    $fat1 = $content1['parsed'][0]['food']['nutrients']['FAT'];
    $carbs1 = $content1['parsed'][0]['food']['nutrients']['CHOCDF'];

    $energy2 = $content2['parsed'][0]['food']['nutrients']['ENERC_KCAL'];
    $Protein2 = $content2['parsed'][0]['food']['nutrients']['PROCNT'];
    $fat2 = $content2['parsed'][0]['food']['nutrients']['FAT'];
    $carbs2 = $content2['parsed'][0]['food']['nutrients']['CHOCDF'];

    $energy3 = $content3['parsed'][0]['food']['nutrients']['ENERC_KCAL'];
    $Protein3 = $content3['parsed'][0]['food']['nutrients']['PROCNT'];
    $fat3 = $content3['parsed'][0]['food']['nutrients']['FAT'];
    $carbs3 = $content3['parsed'][0]['food']['nutrients']['CHOCDF'];

    $energy4 = $content4['parsed'][0]['food']['nutrients']['ENERC_KCAL'];
    $Protein4 = $content4['parsed'][0]['food']['nutrients']['PROCNT'];
    $fat4 = $content4['parsed'][0]['food']['nutrients']['FAT'];
    $carbs4 = $content4['parsed'][0]['food']['nutrients']['CHOCDF'];

    $totalEnergy = floatval(floatval($energy1) * $valueToMultiply1) + floatval(floatval($energy2) * $valueToMultiply2) + floatval(floatval($energy3) * $valueToMultiply3) + floatval(floatval($energy4) * $valueToMultiply4);
    $totalProtein = floatval(floatval($Protein1) * $valueToMultiply1) + floatval(floatval($Protein2) * $valueToMultiply2) + floatval(floatval($Protein3) * $valueToMultiply3) + floatval(floatval($Protein4) * $valueToMultiply4);
    $totalFat = floatval(floatval($fat1) * $valueToMultiply1) + floatval(floatval($fat2) * $valueToMultiply2) + floatval(floatval($fat3) * $valueToMultiply3) + floatval(floatval($fat4) * $valueToMultiply4);
    $totalCarbs = floatval(floatval($carbs1) * $valueToMultiply1) + floatval(floatval($carbs2) * $valueToMultiply2) + floatval(floatval($carbs3) * $valueToMultiply3) + floatval(floatval($carbs4) * $valueToMultiply4);



    // for image 1
    // get the image name and temp directory of it
    $image1 = $_FILES['image1']['name'];
    $postImage1Tmp = $_FILES['image1']['tmp_name'];
    
    // the path of uploaded image
    $imageName1 = generateRandomString(5) .$image1;
    $path1 = "../raspberryImage/". $imageName1;
    $realPath1 = "raspberryImage/". $imageName1;

    move_uploaded_file($postImage1Tmp, $path1);


    // for image2 
    // get the image name and temp directory of it
    $image2 = $_FILES['image2']['name'];
    $postImage2Tmp = $_FILES['image2']['tmp_name'];
    
    // the path of uploaded image
    $imageName2 = generateRandomString(5) .$image2;
    $path2 = "../raspberryImage/". $imageName2;
    $realPath2 = "raspberryImage/". $imageName2;

    move_uploaded_file($postImage2Tmp, $path2);


    // for image3
    // get the image name and temp directory of it
    $image3 = $_FILES['image3']['name'];
    $postImage3Tmp = $_FILES['image3']['tmp_name'];
    
    // the path of uploaded image
    $imageName3 = generateRandomString(5) .$image3;
    $path3 = "../raspberryImage/". $imageName3;
    $realPath3 = "raspberryImage/". $imageName3;

    move_uploaded_file($postImage3Tmp, $path3);


    // for image4
    // get the image name and temp directory of it
    $image4 = $_FILES['image4']['name'];
    $postImage4Tmp = $_FILES['image4']['tmp_name'];
    
    // the path of uploaded image
    $imageName4 = generateRandomString(5) .$image4;
    $path4 = "../raspberryImage/". $imageName4;
    $realPath4 = "raspberryImage/". $imageName4;

    move_uploaded_file($postImage4Tmp, $path4);


    // insert the new meal data
    $query = "insert into raspberry_pi_data(user_id, quarter_1_weight, quarter_2_weight, quarter_3_weight, quarter_4_weight, Energy, Protein, Fat, Carbs)
                values ($userId, $sensor1, $sensor2, $sensor3, $sensor4, $totalEnergy, $totalProtein, $totalFat, $totalCarbs)";

    mysqli_query($conn, $query);

    $query = "select meal_id from raspberry_pi_data ORDER BY meal_id DESC LIMIT 1";
    $data = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($data);

    $mealId = $row['meal_id'];

    // insert the meal images
    $query = "insert into raspi_images(meal_id, user_id, image) values($mealId, $userId, '$realPath1')";
    mysqli_query($conn, $query);

    $query = "insert into raspi_images(meal_id, user_id, image) values($mealId, $userId, '$realPath2')";
    mysqli_query($conn, $query);

    $query = "insert into raspi_images(meal_id, user_id, image) values($mealId, $userId, '$realPath3')";
    mysqli_query($conn, $query);

    $query = "insert into raspi_images(meal_id, user_id, image) values($mealId, $userId, '$realPath4')";
    mysqli_query($conn, $query);

    // insert the content of the 4 parts
    $query = "insert into content_recipe(user_id, meal_id, recipe) values($userId, $mealId, '$image1Content')";
    mysqli_query($conn, $query);

    $query = "insert into content_recipe(user_id, meal_id, recipe) values($userId, $mealId, '$image2Content')";
    mysqli_query($conn, $query);

    $query = "insert into content_recipe(user_id, meal_id, recipe) values($userId, $mealId, '$image3Content')";
    mysqli_query($conn, $query);

    $query = "insert into content_recipe(user_id, meal_id, recipe) values($userId, $mealId, '$image4Content')";
    mysqli_query($conn, $query);

    echo "All Done Successfully";
?>