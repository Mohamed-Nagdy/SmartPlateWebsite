<!doctype html>

<?php
	session_start();
?>

<html>
<html>
	<head>
		<meta charset="utf-8">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Smartplate</title>
		
		<!-- MDB icon -->
		<link rel="icon" href="img/lllloooooooooogpoooooooooooo.png" type="png">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
		<!-- Google Fonts Roboto -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Material Design Bootstrap -->
		<link rel="stylesheet" href="css/mdb.min.css">
		<!-- Your custom styles (optional) -->
		<link rel="stylesheet" href="css/style.css">
		<!-- cursor :D -->
		<!-- <link rel="stylesheet" href="pointer.css"> -->
		<link rel="stylesheet" href="css/kursor.css">
		<title>Smart Plate</title>
		<style>
			html {
			cursor: none !important;
			}

			a {
				cursor: none !important;
			}
		
			.sizze-90{
			width: 100px;
			border-radius: 50%;
			

			}
			.trigger {
			padding: 1px 10px;
			font-size: 12px;
			font-weight: 400;
			border-radius: 10px;
			background-color: #eee;
			color: #212121;
			display: inline-block;
			margin: 2px 5px;
			}

			.hoverable, .trigger {
			transition: box-shadow 0.55s;
			box-shadow: 0;
			}

			.hoverable:hover, .trigger:hover {
			transition: box-shadow 0.45s;
			box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}
			.hf{
				background-color: #9be140;
				color: #29263F;
			}
			body{
				background-color: #f8f5ead0;
				background: -webkit-linear-gradient(to top, #FFFFFF, #ECE9E6);  /* Chrome 10-25, Safari 5.1-6 */
				background: linear-gradient(to top, #FFFFFF, #ECE9E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

				color: #29263F;
				background-image: url(img/bg2.png);
				background-attachment: fixed;

			}
			.navbar-dark .navbar-brand {
			color: #29263F;
			}
			.navbar.navbar-dark .breadcrumb .nav-item .nav-link, .navbar.navbar-dark .navbar-nav .nav-item .nav-link {
			color: #29263F;
			transition: .40s;
			}
			.bgsize{
				background-size: contain;
				/* max-height: 300px; */
				/* max-height:500px; */
				max-width:400px;
				height:auto;
				object-fit: contain;
				/* resize: both; */

			}
			.btn-success {
			background-color: #D3B18B !important;
			}
			.card {
				position: relative;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: column;
				flex-direction: column;
				min-width: 0;
				word-wrap: break-word;
				background-color: rgba(255, 213, 0, 0.493);
				background-clip: border-box;
				border: 1px solid rgba(0,0,0,.125);
				border-radius: .25rem;
			}

			body::-webkit-scrollbar {
			width: .95em;
			}
			
			body::-webkit-scrollbar-track {
			box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
			-webkit-border-radius: 10px;
    		border-radius: 10px;
			}
			
			body::-webkit-scrollbar-thumb {
			border-radius: 10px;
			-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
			background-image: -webkit-linear-gradient(330deg, #d4fc79 0%, #96e6a1 100%);
			background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%);
			}
			.fixedElement {
			position:fixed;
			z-index:100;
			
			}
			.txtclr {
				color: #4f4f4f !important;
			}
		
			.reveal-open {
			overflow: auto;
			height: auto;
			}
			.active{ /*####??????????????????????????????????????????? change active color*/
				background-color: rgba(218, 55, 2, 0.1);
			}
			.reveal-closed {
			overflow: hidden;
			height: 20px;
			}
			.navbar-nav {
			padding-left: 200px;
			}
			.footer {
			position: fixed;
			left: 0;
			bottom: 0;
			width: 100%;
			height: 100px !important;
			background-color: #9be140 !important;
			}
			.ziad{
				
				border-radius: 30%;
				max-height: 100;
				width: 100%;
				object-fit: contain;

			}
			.clrbx{
				width : 50px;
				height: 50px;
				border-radius:30%;
				background-color:gray;
				margin-left:30%;
			}
		</style>
	</head>

	<body class="bg">
		
		<div class="container-fluid">
			<!-- navbar -->
				<nav class="mb-1 navbar navbar-expand-lg navbar-dark rounded-pill  hf" style='font-weight: 600;   ' id="home" data-target="#home">
					<div class="view overlay zoom navbar-brand">
						<a class="navbar-brand" href="#"><img src="img/lllloooooooooogpoooooooooooo.png" alt="logo" style="height: 50px; padding-left: 10px;"></a>
						<div class="mask flex-center rgba-green-slight rounded-pill navbar-brand"></div>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"><i class="fas fa-align-justify"></i></span>
					</button>
					<div class="collapse navbar-collapse " id="navbarSupportedContent-333">	
							<ul id="menu " class="navbar-nav mr-auto " >				
								<!--in this php code we get all the categories we need from the database and display them  in nav bar-->
								
							<?php
								// check if the mode is set in the login page then we fetch the usre mode
								if(isset($_SESSION["mode"])){
									
									if($_SESSION["userType"] == "U"){
										$userName = $_SESSION['userName'];
										$image = $_SESSION['imageLink'];
									
									}
									else{
										$userName = $_SESSION['doctorName'];
										$image = $_SESSION['imageLink'];
									}
									
								
									echo "
												<li  class='nav-item active txtclr'> <a  id='ap' class='nav-link' href='pages/allPosts.php'>All Posts</a> </li>
											</ul>
										<ul class='navbar-nav ml-auto nav-flex-icons mr-auto' >
											<li class='nav-item dropdown'>
												<a class='nav-link dropdown-toggle txtclr ' id='navbarDropdownMenuLink-333' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
													<i class='fas fa-user txtclr '></i>
												</a>
												<div class='dropdown-menu dropdown-menu-right dropdown-default '	aria-labelledby='navbarDropdownMenuLink-333'>
													<a class='txtclr dropdown-item' href='pages/userPage.php'>profile</a>
													<a class='dropdown-item txtclr ' href='pages/logout.php'>log out</a>
													<a class='dropdown-item txtclr ' href='#!'> <i class='fas fa-bug'></i> report bug</a>
												</div>
											</li>
										</ul>
										
									";					
								}
								// else we fetch the anonymous mode
								else{
									
									echo "
													<li  class='nav-item align-self-center '> <a  class='txtclr nav-link' href='pages/login.php'> Login</a> </li>
													<li  class='nav-item align-self-center '> <a  class='txtclr nav-link' href='pages/signUp.php'>Sign Up</a> </li>
												</ul>
											</div>
									";
								}
							?>
							
						</div>
				</nav>
			<!--/ navbar-->
			<div class="container-fluid">
				<!--personalpanel	-->
					<div class="card border-primary mb-3 sticky  col-md-2 float-left cc" style="
    padding: 0;
" >
						<div class="card-header view overlay ">
										
							<!--here we print all the data of the user in the side bar-->
							<?php
								if(isset($_SESSION["mode"])){
									
									if($_SESSION["userType"] == "U"){
										// get all the data and save it in variables
										$userName = $_SESSION['userName'];
										$image = $_SESSION['imageLink'];
										$notes = $_SESSION['notes']; 

										// display all data
										echo "
													<img src='$image' class='rounded-right rounded-top sizze-90 img-fluid ziad'   alt='userphoto'/>
													<div class='mask rgba-stylish-light rounded-right rounded-top' style='border-radius: 30%;'>
													</div>
												</div>
												
												<div class='card-body text-primary'>
													<h5 class='card-title '><a class='txtclr' href='pages/userPage.php'>$userName</a></h5>
													<p class='card-text '>Doctor Notes : $notes</p>
												</div>
											</div>
										";
									}
								
									else{
										// get all the data and save it in variables
										$userName = $_SESSION['doctorName'];
										$image = $_SESSION['imageLink'];

										// display all data
										echo "
													<img src='$image' class='rounded-right rounded-top sizze-90 img-fluid ziad'   alt='userphoto'/>
													<div class='mask rgba-stylish-light rounded-right rounded-top' style='border-radius: 30%;'>
													</div>
												</div>


												<div class='card-body text-primary'>
													<h5 class='card-title '><a class='txtclr' href='pages/doctorPage.php'>$userName</a></h5>
												</div>
											</div>

										";
									}
								}
								else{
									echo "
												<img src='projectImages/anonymous.png' class='rounded-right rounded-top ziad sizze-90 img-fluid'   alt='userphoto'/>
												<div class='mask rgba-stylish-light rounded-right rounded-top' style='border-radius: 30%;'>
												</div>
											</div>

											<div class='card-body text-primary'>
												<h5 class='card-title txtclr'>Anonymous</h5>
											</div>
										</div>
									";
								}
							?>
						</div>
					</div>
				<!--/personalpanel	-->
				<!--posts	-->
					<div class="col-md-9 float-right" >
						<?php
							require("phpIncludes/initConnection.php");
							$icon = "";
							$cat = "";

					
							if(isset($_GET["category"]) and $_GET["category"] != "All"){
								$category = $_GET["category"];
								$query = "select * from posts where `category_name`='$category' and `post_privacy` = 'public'";
								$cat = $_GET['category'];

								if($cat == "Challenges"){
									$icon = 'fas fa-trophy';
								}

								else if($cat == "Sports"){
									$icon = 'fas fa-dumbbell';
								}

								else if($cat == "Healthy Food"){
									$icon = 'fas fa-utensils pr-2';
								}
							}
							
							else{
								// this is the query for the data base to get the elements from the table
								$query = "select * from posts where post_privacy='public'";
								$icon = 'fas fa-globe-africa';
								$cat = "All";
							}
							
							
							// here we send the query to the database
							$data = mysqli_query($conn, $query);

							// check if there is a data back from the database
							if(mysqli_num_rows($data) != 0){

								// go throught every element in the data array and get the id and name 
								// after get them we display it in the nav bar
							


								echo "
								<!-- Section heading -->
									<h2 class='text-center font-weight-bold mb-4 pb-2 txtclr'><i class='$icon'></i>$cat</h2>
								<!-- Section description -->
								";

								while($row = mysqli_fetch_array($data))
								{
									$postTitle = $row["post_title"];
									$postContent = $row["post_content"];
									$userName = $row["user_name"];
									$userImage = $row["user_image"];
									$postImage = $row["post_image"];
									$postDate = $row["post_date"];
									$categoryName = $row["category_name"];

									if($categoryName == "Challenges"){
										$icon = 'fas '.'fa-trophy';
									}

									else if($categoryName == "Sports"){
										$icon = 'fas '.'fa-dumbbell';
									}

									else if($categoryName == "Healthy Food"){
										$icon = 'fas '.'fa-utensils '.'pr-2';
									}

									else{
										$icon = 'fas '.'fa-globe-africa';
									}
									
								
									// posts
									echo"
										
										
											<div class=' mt-5'>
												<div class='container mt-5'	
													<!--Section: Content-->
														<section class='txtclr'>

															
															<img src='$userImage' name'username' class='rounded-right rounded-top sizze-90'   alt='userphoto'>
															<label for='username' >$userName</label>
															<!-- Grid row -->
																<div class='row align-items-center'>

																	<!-- Grid column -->
																		<div class='col-lg-5'>

																			<!-- Featured image -->
																			<div class='view overlay rounded z-depth-2 mb-lg-0 mb-4 zoom bgsize'>
																				<img class='img-fluid rounded'  src='$postImage' alt='Sample image'>
																				<a>
																				<div class='mask rgba-white-slight flex-center'></div>
																				</a>
																			</div>

																		</div>
																	<!-- Grid column -->

																	<!-- Grid column -->
																		<div class='col-lg-7 xxxx'style='background-image:url(img/postbg.png); background-size;cover; ' >

																					<!-- Category -->
																					<a href='#' class='green-text'>
																						<h6 class='font-weight-bold mb-3'>
																							<i class='$icon'></i> $categoryName
																						</h6>
																					</a>
																					<!-- Post title -->
																					<h4 class='font-weight-bold mb-3'><strong>$postTitle</strong></h4>
																					<!-- Excerpt -->
																					<p   class='reveal-closed roadmap'  > $postContent </p>
																					<!-- Post data -->
																					<p>by <a><strong>USER </strong></a>, DATE $postDate</p>
																					<a class='trigger teal lighten-4 deep-blue-gradient' style='background-image: url(img/bggg1.png); '>$categoryName</a>
																					<a class='trigger  lighten-4  badge-dark'><i class='fab fa-gratipay'> X</i></a>
																					<!-- Read more button -->
																					<a class='btn btn-success btn-md btn-rounded mx-0 rounded-pill RM' style='background-image: url(img/bggg22.png);background-size: cover;'>Read more</a>

																		</div>
																	<!-- Grid column -->

																</div>
															<!-- Grid row -->
															<hr class='my-5'>
														
														</section>
													<!--Section: Content-->
												</div>
											</div>
										
									";
								}

							}
							// if the data array is empty it display for us there is no data
							else{
								echo "No Data Found";
							}
						?>
					</div>
				<!--/posts	-->
			</div>	
		</div>	  
		<!-- Footer -->
			<footer class="page-footer footer font-small rounded-pill hf" style="height: 10% !important;">

			<!-- Footer Elements -->
			<div class="container">

				<!-- Grid row-->
				<div class="row">

				<!-- Grid column -->
				<div class="col-md-12  ">
					<div class="mb-4 flex-center">
					<a href="#home">
						<i class="fas fa-home white-text mr-md-5 mr-3 fa-2x"></i>
					</a>
					<!-- Facebook -->
					<a class="fb-ic">
						<i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
					</a>
					<!-- Twitter -->
					<a class="tw-ic">
						<i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
					</a>
					<!-- Google +-->
					<a class="gplus-ic">
						<i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
					</a>
					<!--Linkedin -->
					<a class="li-ic">
						<i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
					</a>
					<!--Instagram-->
					<a class="ins-ic">
						<i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
					</a>
					
					<!--Pinterest-->
					<a class="pin-ic">
						<i class="fab fa-pinterest fa-lg white-text fa-2x mr-md-5 mr-3"> </i>
					</a>

					<a class="ins-ic mute" id="mute">
						<i class="fab fas fa-volume-mute fa-lg  fa-2x mr-md-5 mr-3" > </i>
					</a>
					<!-- <a id="theme">
					<i class="fas fa-palette white-text fa-2x"></i>
					</a> -->
					
												<a class='dropdown-toggle txtclr ' id='navbarDropdownMenuLink-333' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
													<i class="fas fa-palette white-text fa-2x"></i>
												</a>
												<div class='dropdown-menu dropdown-menu-right dropdown-default rounded-pill'	aria-labelledby='navbarDropdownMenuLink-333'>
													<lable for ="tx" id="p" class='label txtclr dropdown-item ml-4' >font color</lable>
													<input type="color" id="tx" class="clrbx" name="favcolor" value="#29263F">
													<lable for ="bc" id="p" class='label txtclr dropdown-item' >backgroung  color</lable>
													<input type="color" id="bc" class="clrbx" name="favcolor" value="#f8f5ea">
													<lable for ="hfc" id="p" class='label txtclr dropdown-item' >header  footer color</lable>
													<input type="color" id="hfc" class="clrbx" name="favcolor" value="#9be140">
													<lable for ="cc" id="p" class='label txtclr dropdown-item' >your card color</lable>
													<input type="color" id="cc" class="clrbx" name="favcolor" value="#ffd500">
												</div>
											
					</div>
				</div>
				<!-- Grid column -->

				</div>
				<!-- Grid row-->

			</div>
			<!-- Footer Elements -->

			<!-- Copyright -->
			<div class="footer-copyright text-center py-3" style="padding: 0 !important;">© 2020 Copyright:
				<a href="#!"> SmartPlate.com</a>
			</div>
			<audio id="mx" controls loop autoplay style="display: none;">
				<source src="music/m.mp3" type="audio/mpeg">
			</audio>
			<!-- Copyright -->

			</footer>
							
		<!-- Footer -->
		<!-- jQuery -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<!-- Bootstrap tooltips -->
		<script type="text/javascript" src="js/popper.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="js/mdb.min.js"></script>
		<!-- pointer -->
		<script src="js/kursor.js"></script> 
		<script type="text/javascript">
				
				var p =false;

				new kursor({
						type:1
						
					})
	var tc = document.getElementById("tx");
	tc.addEventListener("input", function() {
		this.style.setProperty('background-color', tc.value , "important");
		var cols = document.getElementsByClassName('txtclr');
		var ap =document.getElementById("ap");
  		for(i = 0; i < cols.length; i++) {
				cols[i].style.setProperty('color', tc.value , "important"); 
				ap.style.setProperty('color', tc.value , "important"); 
  		}
    
	}, false);
	var cc = document.getElementById("cc");
	cc.addEventListener("input", function() {
		this.style.setProperty('background-color', cc.value , "important");
		var cols = document.getElementsByClassName('cc');
  		for(i = 0; i < cols.length; i++) {
				cols[i].style.setProperty('background-color', cc.value , "important"); 

  		}
    
	}, false);
	var hfc = document.getElementById("hfc");
	hfc.addEventListener("input", function() {
		this.style.setProperty('background-color', hfc.value , "important");
		var cols = document.getElementsByClassName('hf');
		var x =hfc.value;
		styleElement.appendChild(document.createTextNode("body::-webkit-scrollbar-thumb {background:"+ x+";}"));
		document.getElementsByTagName("head")[0].appendChild(styleElement);
  		for(i = 0; i < cols.length; i++) {
   			 cols[i].style.setProperty('background-color', hfc.value , "important"); 
  		}
    
	}, false); 
	var bc = document.getElementById("bc");
	bc.addEventListener("input", function() {
		this.style.setProperty('background-color', bc.value , "important");
		var cols = document.getElementsByClassName('bg');
  		for(i = 0; i < cols.length; i++) {
   			 cols[i].style.setProperty('background-color', bc.value , "important"); 
  		}
    
	}, false); 


										//musicbox
				$("#mute").click(function() {
				if(p==true){
					document.getElementById('mx').play();
					p= false;
				}else{
					document.getElementById('mx').pause();
					p= true;
				}
				$(this).toggleClass("white-text").toggleClass("text-dark");
					
				});

				//scroll
				$(window).scroll(function(e){ 
					var $el = $('.fixedElement'); 
					var isPositionFixed = ($el.css('position') == 'fixed');
					if ($(this).scrollTop() > 200 && !isPositionFixed){ 
						$el.css({'position': 'fixed', 'top': '0px'}); 
					}
					if ($(this).scrollTop() < 200 && isPositionFixed){
						$el.css({'position': 'static', 'top': '0px'}); 
					} 
				});
				//readmore
				$(".RM").click(function() {
					$(this).siblings(".roadmap").toggleClass("reveal-closed").toggleClass("reveal-open");
					if($(this).text()=='Read less'){
					$(this).html('Read more');
				}else{
					$(this).html('Read less');
				}
				});

		</script>
	</body>
</html>	