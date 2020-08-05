<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="../style/adminPanel.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
	
<body>
	
	<div class="container">
		
		<div class="navbar">
				
			<ul>
				<li> <a href="adminPanelEnter.php?show=admins"><i class="fa fa-lock"></i> Admins </a> </li>
				<li> <a href='adminPanelEnter.php?show=doctors'><i class="fa fa-user-md"></i> Doctors </a> </li>
				<li> <a href='adminPanelEnter.php?show=users'><i class="fa fa-user" ></i> Users </a> </li>
				<li> <a href='adminPanelEnter.php?show=posts'><i class="fa fa-clipboard" ></i> Posts </a> </li>
			</ul>
		
		</div>
		<!--the end of the navbar section	-->
		
		
		<!--the begining of the home section	-->
		<div class="home">
			
			<?php
				// check if any item from the nav bar has clicked 
				if(isset($_GET["show"])){
					
					// get the php connection file
					require("../phpIncludes/initConnection.php");
					
					
					// check if the item clicked was the admins title
					if($_GET["show"] == "admins"){
						
						// get all data from the admin table using these two lines
						$query = "select * from admins";
						$data = mysqli_query($conn, $query);
						
						// put the add icon before any thing if the admin need to add new admin
						
						echo " <br> <br> <br>
						
						<table >
						   <tr>
						    <td ><label> Add new admin </label></td>
							<td >
							       <div class='zamo'>
							<a href='adminAddNew.php?type=admins'><img src='../img/add2.png' height='50' width='50' >
							<span><span>
							<span><span>
							<span><span>
							<span><span>
							</a>
							      </div>
							</td>
							</tr>
						</table><br> <br> <br> <br>	           
									
						";
						
						// check if there is data back from database we fetch it and show 
						if(mysqli_num_rows($data) != 0){
							
							// go thrugh all data we found
							while($row = mysqli_fetch_array($data)){
								
								// save data we will need in variables 
								$adminName = $row['admin_name'];
								$adminPassword = $row['admin_password'];
								$adminId = $row['admin_id'];
								
								// draw on the screen the admin name and two icons for delete or edit
								echo "
							
									<div>
										<table>
										
										<tr>
										<td><label>$adminName</label></td>
										
										<td> <div class='zamo'> <a href='adminEdit.php?adminId=$adminId&type=admins'><img src='../img/edit4.jpg' height='50' width='50'> 
										</a> <div></td>
										
										<td> <div class='zamo'><a href='server.php?action=delete&adminId=$adminId&type=admins'><img src='../img/delete1.png' height='50' width='50'></a> </div></th>
										</td>
										
										</tr>
										
										</table>
									</div>
								";
								
							}
						}
						
					}
					
					// check if the item clicked was the doctors title
					if($_GET["show"] == "doctors"){
						
						// get all data from the doctors table using these two lines
						$query = "select * from doctors";
						$data = mysqli_query($conn, $query);
						
						// put the add icon before any thing if the admin need to add new doctor
						echo "<br> <br> <br>
						<table >
						   <tr>
						    <td><label> Add new doctor </label></td>
							<td> <div class='zamo'><a href='adminAddNew.php?type=doctors'><img src='../img/add2.png' height='50' width='50'></a> </div></td>
							</tr>
						</table><br> <br> <br> <br>	   
						";
						
						// check if there is data back from database we fetch it and show
						if(mysqli_num_rows($data) != 0){
							
							// go thrugh all data we found
							while($row = mysqli_fetch_array($data)){
								
								// save data we will need in variables
								$doctorName = $row['doctor_name'];
								$doctorId = $row['doctor_id'];
								
								// draw on the screen the doctor name and two icons for delete or edit
								echo "
									<div>
										<table>
										
										<tr>
										<td><label>$doctorName</label></td>
										
										<td> <div class='zamo'><a href='adminEdit.php?doctorId=$doctorId&type=doctors'><img src='../img/edit4.jpg' height='50' width='50'></a> </div></td>
										
										<td> <div class='zamo'><a href='server.php?action=delete&doctorId=$doctorId&type=doctors'><img src='../img/delete1.png' height='50' width='50'></a> </div></th>
										</td>
										
										</tr>
										
										</table>
									</div>
								";
								
							}
						}
					}
					
					// check if the item clicked was the users title
					if($_GET["show"] == "users"){
						echo " <br> <br> <br>";
						
						// get all data from the users table using these two lines
						$query = "select * from users";
						$data = mysqli_query($conn, $query);
						
						// check if there is data back from database we fetch it and show
						if(mysqli_num_rows($data) != 0){
							
							// go thrugh all data we found
							while($row = mysqli_fetch_array($data)){
								
								// save data we will need in variables
								$userName = $row['user_name'];
								$userId = $row['user_id'];
								
								// draw on the screen the user name and two icons for delete or edit
//								<a href='adminPanelEnter.php?action=edit&userId=$userId&type=users'><img src='edit.png' height='50' width='50'></a>
								echo "
								
									<div>
										<table>
										
										<tr>
										<td><label>$userName</label></td>
										
										<td> <div class='zamo'><a href='server.php?action=delete&userId=$userId&type=users'><img src='../img/delete1.png' height='50' width='50'></a> </div></td>
										
										
										
										</tr>
										
										</table>
									</div>
								";
								
							}
						}
					}
					
					// check if the item clicked was the posts title
					if($_GET["show"] == "posts"){
						
						// get all data from the posts table using these two lines
						$query = "select * from posts";
						$data = mysqli_query($conn, $query);
						
						// put the add icon before any thing if the admin need to add new post
//						echo "
//							<a href='adminAddNew.php?type=posts'><img src='add.png' height='50' width='50'></a>
//						";
						
						// check if there is data back from database we fetch it and show
						if(mysqli_num_rows($data) != 0){
							
							echo " <br> <br> <br>";
							// go thrugh all data we found
							while($row = mysqli_fetch_array($data)){
								
								// save data we will need in variables
								$postId = $row['post_id'];
								$postTitle = $row['post_title'];
								$postContent = $row['post_content'];
								$postUser = $row['user_name'];
								
								// draw data on the screen
//								<a href='adminPanelEnter.php?action=edit&postId=$postId&type=posts'><img src='edit.png' height='50' width='50'></a>
								echo "
									<table>
										
										<tr>
										<td><label>$postUser</label></td>
										
										<td><label>$postTitle</label></td>
										
										<td><p>$postContent</p></td>
										
										<td> <div class='zamo'><a href='server.php?action=delete&postId=$postId&type=posts'><img src='../img/delete1.png' height='50' width='50'></a> </div></td>
										
										
										
										</tr>
										
										</table>
								";
								
							}
						}
					}
				}
			?>
			
			
		</div>
		
	</div>
	
</body>
</html>