<?php
    require("initConnection.php");

    function generateRandomString($n) { 
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
        $randomString = ''; 
    
        for ($i = 0; $i < $n; $i++) { 
            $index = rand(0, strlen($characters) - 1); 
            $randomString .= $characters[$index]; 
        } 
    
        return $randomString; 
    }

    // login as user from the application
    if(isset($_GET['email']) && isset($_GET['password']))
    {
        $email = $_GET['email'];
        $password = $_GET['password'];

        $query = "select * from users where email='$email' and user_password='$password'";

        $data = mysqli_query($conn, $query);

        if(mysqli_num_rows($data) > 0)
        {
            $dataArray = array();
    
            while($row = mysqli_fetch_array($data)){
        
                $dataArray[] = $row;
            
            }
    
            print json_encode($dataArray, JSON_UNESCAPED_UNICODE);
        }
        
        else
        {
            $dataArray = array('error' => 'error');
            print json_encode($dataArray, JSON_UNESCAPED_UNICODE);
        }
    }

    // get all posts from the database 
    if(isset($_GET['posts']))
    {
        $query = "select post_id, post_title, post_content, user_id, user_name, user_image, post_image, post_date from posts ORDER BY post_id DESC limit 9";

        $data = mysqli_query($conn, $query);

        $dataArray = array();
    
        while($row = mysqli_fetch_array($data)){
    
            $dataArray[] = $row;
        
        }

        print json_encode($dataArray, JSON_UNESCAPED_UNICODE);
    }

    // create new post for the user
    if(isset($_POST["postContent"]))
    {
        $postContent = $_POST["postContent"];
        $postTitle = $_POST["postTitle"];
        $categoryName = 'All';
        $userId = $_POST['userId'];
        $userName = $_POST["userName"];
        $userImage = $_POST['imageLink'];
        $date = date("Y-m-d h:i:sa");
        $userType = 'U';
        $postPrivacy = $_POST["postPrivacy"];

        $image = $_POST['post_image'];
        $name = $_POST['post_image_name'];
    
        $realImage = base64_decode($image);

        $path = 'uploadedImages/' . $name;
        $dataArray = array('path' => $path);
    
        file_put_contents('../uploadedImages/'.$name, $realImage);

        $query = "insert into posts (post_title, post_content, user_id, user_name, user_image, user_type, post_image, post_date, category_name, post_privacy)
         values ('$postTitle', '$postContent', '$userId', '$userName', '$userImage', '$userType', '$path', '$date', '$categoryName', '$postPrivacy')";

        mysqli_query($conn, $query); 

        $query = "select * from posts ORDER BY post_id DESC LIMIT 1";

        $data = mysqli_query($conn, $query);

        $row = mysqli_fetch_array($data);

        $dataArray = array('success' => 'all done successfully');
        print json_encode($row, JSON_UNESCAPED_UNICODE);
        
    }


    // delete post
    if(isset($_GET['delete_post']))
    {
        $postId = $_GET["delete_post"];
        // the query to delete the specific post
        
        $query = "select post_image from posts where post_id=$postId";
        $data = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($data);

        $imagePath = '../' . $row['post_image'];

        unlink($imagePath);

		$query = "delete from posts where post_id=$postId";
		
		// send the query
		mysqli_query($conn, $query);
    }

    // get the user meals from the database and images and also recipes
    if(isset($_GET['meals']))
    {
        $userId = $_GET['user_id'];

        $query = "select * from raspberry_pi_data where user_id=$userId ORDER BY meal_id DESC";

        $data = mysqli_query($conn, $query);

        $mealData = array();
        $imagesArray = array();
        $contentArray = array();

        while($row = mysqli_fetch_array($data)){
    
            $mealData[] = $row;

            $mealId = $row['meal_id'];

            $query1 = "select * from raspi_images where meal_id=$mealId";
            $data1 = mysqli_query($conn, $query1);
            
            while($row1 = mysqli_fetch_array($data1)){
    
                $imagesArray[] = $row1;
            
            }

            $query2 = "select * from content_recipe where meal_id=$mealId";
            $data2 = mysqli_query($conn, $query2);
            
            while($row2 = mysqli_fetch_array($data2)){
    
                $contentArray[] = $row2;
            
            }
        
        }



        $allDataArray = array('meal_data' => $mealData, 'images' => $imagesArray, 'recipe' => $contentArray);
        print json_encode($allDataArray, JSON_UNESCAPED_UNICODE);
    }

?>