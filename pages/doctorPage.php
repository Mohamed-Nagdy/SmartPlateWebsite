<!doctype html>

<?php
	session_start();
?>

<html>
	<head>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
		<meta http-equiv='x-ua-compatible' content='ie=edge'>
		<title> Doctor <?php echo $_SESSION['doctorName']?> </title>
		<!-- css`s  -->
			<!-- MDB icon -->
			<link rel='icon' href='../img/lllloooooooooogpoooooooooooo.png' type='png'>
			<!-- Font Awesome -->
			<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.11.2/css/all.css'>
			<!-- Google Fonts Roboto -->
			<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap'>
			<!-- Bootstrap core CSS -->
			<link rel='stylesheet' href='../css/bootstrap.min.css'>
			<!-- Material Design Bootstrap -->
			<link rel='stylesheet' href='../css/mdb.min.css'>
			<!-- kursor -->
			<link rel='stylesheet' href='../css/kursor.css'>

			<style>
			.bgsize{
				background-size: contain;
				/* max-height: 300px; */
				max-width:400px;
				height:auto;
				object-fit: contain;
				/* resize: both; */

			}
			html {
				cursor: none !important;
			}	
			.containeer{
				float: right !important;
				width: 100%;
			}
			.sizze-90{
			width: 90px;
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
			.txtclr{
				color: #29263F;
			}
			body{
				background-color: #f8f5ead0;
				color: #29263F;
				background-image: url(../img/bg2.png);
			}
			.navbar-dark .navbar-brand {
			color: #29263F;
			}
			.navbar.navbar-dark .breadcrumb .nav-item .nav-link, .navbar.navbar-dark .navbar-nav .nav-item .nav-link {
			color: #29263F;
			transition: .40s;
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
			.reveal-open {
			overflow: auto;
			height: auto;
			}
			.nav-item.active>.nav-link { /*####??????????????????????????????????????????? change active color*/
				background-color: rgba(28, 55, 2, 0.1);
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
			#paneel::-webkit-scrollbar {
			width: .5em;
			display:none;
			}
			
			#paneel::-webkit-scrollbar-track {
			box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
			}
			
			#paneel::-webkit-scrollbar-thumb {
			border-radius: 10px;
			-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
			background-image: -webkit-linear-gradient(330deg, #ffd5006b 0%, #ffd5007e 100%);
			background-image: linear-gradient(120deg, #ffd5006b 0%, #ffd5007e 100%);
			}
			.hf{
					background-color: #9be140;
					color: #29263F;
				}
			.ziad{
				
				border-radius: 30%;
				object-fit: contain;
				margin-bottom: 50%;

			}
			.clrbx{
				width : 50px;
				height: 50px;
				border-radius:30%;
				background-color:gray;
				margin-left:30%;
			}
		</style>
		<!-- css`s  -->
	</head>
	<body class='bg'>
			
		<!--Navbar -->
			<nav class='mb-1 hf navbar navbar-expand-lg navbar-dark rounded-pill txtclr ' style=' font-weight: 600;' id='home' data-target='#home'>
				<div class='view overlay zoom navbar-brand'>
					<a class='navbar-brand' href='#'><img src='../img/lllloooooooooogpoooooooooooo.png' alt='logo' style='height: 50px; padding-left: 10px;'></a>
					<div class='mask flex-center rgba-green-slight rounded-pill'></div>
				</div>
			
				<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent-333' aria-controls='navbarSupportedContent-333' aria-expanded='false' aria-label='Toggle navigation'>
					<span class='navbar-toggler-icon'><i class="fas fa-align-justify"></i></span>
				</button>
				<div class='collapse navbar-collapse justify-content-center align-items-center' id='navbarSupportedContent-333'>
					<ul class='navbar-nav mr-auto align-items-center'>
						<li class='nav-item '>
							<a class='nav-link txtclr' href='../'>Home
							</a>
						</li>
						
						<li class='nav-item '>
							<a class='nav-link txtclr' href='allPosts.php'>all posts</a>
						</li>
							
						<!--in this php code we get all the categories we need from the database and display them  in nav bar-->
						<?php
							// here we get the file from php inclueds directory
							// which this file contain the initialization of database connection
							require("../phpIncludes/initConnection.php");
						
							// this is the query for the data base to get the elements from the table
							$query = "select * from categories";
							
							// here we send the query to the database
							$data = mysqli_query($conn, $query);

							// check if there is a data back from the database
							if($data){

								// go throught every element in the data array and get the id and name 
								// after get them we display it in the nav bar
								while($row = mysqli_fetch_array($data))
								{
									$categoryId = $row["category_id"];
									$categoryName = $row["category_name"];
									echo "
										<li class='nav-item'>
										<a class='nav-link txtclr' href='doctorPage.php?category=$categoryName'> $categoryName </a> 
										</li>
									";
								}

							}
							// if the data array is empty it display for us there is no data
							else{
								echo "No Data Found";
							}
						?>
						
					<?php
						// check if the mode is set in the login page then we fetch the usre mode
						if(isset($_SESSION["mode"])){
							
							$userName = $_SESSION['doctorName'];
							$image = $_SESSION['imageLink'];
												
							echo "
								</ul>
								</div>
								<ul class='navbar-nav ml-auto nav-flex-icons mr-auto'>
									<li class='nav-item dropdown'>
										<a class='nav-link dropdown-toggle txtclr' id='navbarDropdownMenuLink-333' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
											<i class='fas fa-user'></i>
										</a>
										<div class='dropdown-menu dropdown-menu-right dropdown-default '	aria-labelledby='navbarDropdownMenuLink-333'>
											<a class='dropdown-item txtclr' href='doctorPage.php'>profile</a>
											<a class='dropdown-item txtclr' href='logout.php'>log out</a>
											<a class='dropdown-item txtclr' href='#!'> <i class='fas fa-bug'></i> report bug</a>
										</div>
									</li>
								</ul>

							";	
							
						}
						// else we fetch the anonymous mode
						else{
							
							echo "
									<li> <a href='pages/login.php txtclr'> Login </a> </li>
									<li> <a href='pages/signUp.php txtclr'> Sign Up</a> </li>
								</ul>
							";
						}
						
					?>
			</nav>
		<!--/Navbar -->
		<div class="container-fluid">
			<!-- personalpanel -->
			
				<div class='col-md-3 float-left'   >
					
					<!--here we display the links or the content of the side bar-->
					<?php
						// check if the mode is the user mode (and it is by default we in the user page ^_^ )
						if(isset($_SESSION["mode"])){
							
							// save all variables we need 
							$doctorId = $_SESSION["doctorId"];
							$doctorName = $_SESSION['doctorName'];
							$image = $_SESSION['imageLink'];
							
							$query = "select * from users where user_doctor_id=$doctorId";
							
							$data = mysqli_query($conn, $query);
							
							echo "
								<div id='paneel' class='col-md-3 cc float-left card border-primary mb-3 sticky sticky-content fixedElement '  style=' overflow:scroll; height:50% !important; '>
									<div class='card-header view overlay justify-content-center ' style='padding-left: 35%;'>
										<img src='../$image' class='ziad rounded-right rounded-top sizze-90 img-fluid'   alt='userphoto'/>
										<div class='mask rgba-stylish-light rounded-right rounded-top  ' style='border-radius: 30%;'>						
										</div>
									</div>
									<div class='card-body text-primary ' style='font-family: Comic Sans MS, Comic Sans, cursive !important;'>
								<h5 class='card-title ' style='font-weight: 600;'><a class='txtclr' href='#!'>DR: $doctorName</a></h5>
								<p class='card-text text-center txtclr' style='font-weight: 500 !important; font-size:24px '> your patients:</p>   <br>
							";
							
							if(mysqli_num_rows($data) != 0){
								while($row = mysqli_fetch_array($data)){
									$userId = $row["user_id"];
									$userName = $row["user_name"];
									$userImage = $row["user_image"];
									
									echo "
										<img src='../$userImage' width='75px' height='75px' class='rounded-circle' style=' margin:10px; ' > <a class='txtclr card-text text-center' style='font-size:18px;' href='editUserData.php?editedUserId=$userId'>$userName</a> <br>
									
									";
									
								}
								echo "
										</div>
									</div>
								";
							}
							
						}
						// this will never happend i just copy it from index page ^_^
						else{
							echo "
								<img src='projectImages/anonymous.jpg' height='40' width='40' display='block'/>
								<p class='txtclr'>anonymous</p>
							";
						}
					?>
					
				</div>
			<!-- /personalpanel -->
			<!-- posts  -->
				<div class=' container col-md-8 float-right mb-5'  >
					<!-- newpost -->	
						<div class='card cc'>
							<h5 class='txtclr card-header txtclr white-text text-center py-4'>
								<i class='fas fa-edit'></i>
								<strong>New Post</strong>
							</h5>
								<div class='card-body px-lg-5 pt-0'>
							
									<form class='md-form' style='color: #757575;' method='post' action='server.php'  enctype="multipart/form-data">              
										<ul id='sortable-form' class='droptrue drop-list ui-sortable'>
											
											<li data-template='mTextInputTemp' data-popover='input' class='' style='position: relative; left: 0px; top: 0px;' data-original-title='' title=''>
												<label for='input' class='txtclr'>post title</label>
												<input type='text' name='postTitle' id='input' class='form-control' placeholder=''>
											</li>
											<li data-template='mTextareaTemp' data-popover='textarea' class='' style='position: relative; left: 0px; top: 0px;' data-original-title='' title='' aria-describedby='popover640397'>
												<label for='textarea' class='txtclr'>post content</label>
												<textarea class='form-control md-textarea' name='postContent' id='textarea' placeholder=''></textarea>
											</li>
											
											<li data-template='mTextareaTemp' data-popover='textarea' class='' style='position: relative; left: 0px; top: 0px;' data-original-title='' title='' aria-describedby='popover640397'>	
												<select name='postPrivacy' class ="form-control browser-default custom-select">
														<option value="public">Public</option>
														<option value="doctor">Doctors Only</option>
														<option value="allUsers">All Users</option>
														<option value="onlyMe">Only Me</option>	
												</select>
											</li>	
												
											<li data-template='mTextareaTemp' data-popover='textarea' class='' style='position: relative; left: 0px; top: 0px;' data-original-title='' title='' aria-describedby='popover640397'>
												<select name="categoryName" class ="form-control browser-default custom-select">
														<!--display the categories we have in select-->
														<?php
															
															// this file has the init code of connection with database
															require("../phpIncludes/initConnection.php");
												
															// the query to get categories
															$query = "select * from categories";
													
															// send query to the database
															$data = mysqli_query($conn, $query);

															// check if there is data back
															if(mysqli_num_rows($data) != 0){

																// fetch the array of data back and display them as an option
																while($row = mysqli_fetch_array($data))
																{
																	$categoryName = $row["category_name"];
																	if($categoryName == "All"){
																		continue;
																	}
																	else{
																		echo "
																		<option value='$categoryName'>$categoryName</option>
																	";
																	}
																	
																}

															}

															else{
																echo "No Data Found";
															}
														?>
																						
												</select>
												<br>
											</li>
											<li data-template='dFileInputTemp' data-popover='file' class='ui-sortable-handle' style='position: relative; left: 0px; top: 0px;' data-original-title='' title=''>
											
												<div class='input-group mb-4'>
												
													<div class='custom-file'>
														<input type='file' name='postImage' class=' custom-file-input inline-block' id='fileInput' aria-describedby='fileInput'>
														<label class='custom-file-label txtclr' for='fileInput'>Upload post Img</label>
													</div>
													<div class='col-sm-4 messages'></div>
													
												</div>
											</li>
										</ul>
										<button class='txtclr btn btn-rounded btn-outline-brown btn-lg btn-block z-depth-0 my-4 waves-effect' style='    border-radius: 60px;' type='submit'name='doctorPost'>Post</button>

									</form>
								</div>
						</div>
					<!-- /newpost -->

					<!-- viewposts	 -->
						<div class="managePosts" >
							
							<!--get all posts and show them-->
							<?php
								// get the user id to get his own posts
								$id = $_SESSION["doctorId"];
								$type = $_SESSION["userType"];
							
								if(isset($_GET["category"]) and $_GET["category"] != "All"){
									$category = $_GET["category"];
									$query = "select * from posts where `category_name`='$category' and user_id=$id and user_type='$type' ORDER BY post_id DESC";
								}
								
								else{
									// the query 
									$query = "select * from posts where user_id=$id and user_type='$type' ORDER BY post_id DESC";
								}
								
								
							
								// send the query to database and get the response
								$data = mysqli_query($conn, $query);
								
								// if there are data back we continue
								if(mysqli_num_rows($data) != 0){
									
									// fetch every row in the data array
									while($row = mysqli_fetch_array($data)){
										
										// save all data in variables we can't use them before save them in variables
										$postId = $row["post_id"];
										$postTitle = $row["post_title"];
										$postContent = $row["post_content"];
										$userName = $row["user_name"];
										$userImage = "../".$row["user_image"];
										$postImage = "../".$row["post_image"];
										$postDate = $row["post_date"];
										$categoryName = $row["category_name"];
										
										
										// display data 
										// // front end can play here as they need but never touch variables<div>
														

										echo"
											
											<div class=' container-fluid float-righ'>
												<div class='container mt-5'>
													<!--Section: Content-->
														<section class='dark-grey-text'>

															<img src='$userImage' name'username' class='rounded-right rounded-top sizze-90'   alt='userphoto'>
															<label for='username' class='txtclr' >$userName</label>
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
																<div class='col-lg-7 xxxx'style='background-image:url(img/postbg.png); ' >

																		<!-- Category -->
																		<a href='#' class='green-text'>
																			<h6 class='font-weight-bold mb-3'><i ></i> $categoryName</h6>
																		</a>
																		<!-- Post title -->
																		<h4 class='font-weight-bold mb-3 txtclr'><strong>$postTitle</strong></h4>
																		<!-- Excerpt -->
																		<p   class='reveal-closed roadmap txtclr'  > $postContent </p>
																		<!-- Post data -->
																		<p class='txtclr'>by <a><strong>USER </strong></a>, DATE $postDate</p>
																		<a class='trigger teal lighten-4 deep-blue-gradient' style='background-image: url(img/bggg1.png);'>$categoryName</a>
																		<a class='trigger  lighten-4  badge-dark'><i class='fab fa-gratipay'> X</i></a>
																		<!-- Read more button -->
																		<a class='btn btn-success btn-md btn-rounded mx-0 rounded-pill RM' style='background-image: url(img/bggg22.png);'>Read more</a>
																		<a class='btn btn-danger btn-md btn-rounded mx-0 rounded-pill RM' href='server.php?deleteDoctorPost=$postId' style='background-image: url(img/bggg22.png);'><i class='fas fa-trash'></i></a>

																		
																</div>

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
							?>

						</div>
					<!-- viewposts	 -->
				</div>
			<!-- posts  -->
		</div>
			<!-- footer   -->
				<footer class="page-footer footer font-small rounded-pill hf " style="height: 10% !important;">

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
								<a class=' dropdown-toggle txtclr ' id='navbarDropdownMenuLink-333' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
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
						<div class="footer-copyright text-center py-3 rounded-pill" style="    margin: 0.5%;margin-top: 0; padding: 0 !important;">
							&copy  2020 Copyright:
							<a href="#!"> SmartPlate.com</a>
						</div>
						<audio id="mx" controls loop autoplay style="display: none;">
							<source src="../music/m.mp3" type="audio/mpeg">
						</audio>
					<!-- Copyright -->

				</footer>
			<!--/ footer   -->
		<!-- scripts-->
			<!-- jQuery -->
			<script type='text/javascript' src='../js/jquery.min.js'></script>
			<!-- Bootstrap tooltips -->
			<script type='text/javascript' src='../js/popper.min.js'></script>
			<!-- Bootstrap core JavaScript -->
			<script type='text/javascript' src='../js/bootstrap.min.js'></script>
			<!-- MDB core JavaScript -->
			<script type='text/javascript' src='../js/mdb.min.js'></script>
			<!-- pointer -->
			<script src='../js/kursor.js'></script> 

			<script type='text/javascript'>

				var p =false;
				
				$(window).scroll(function(e){ 
												var isPositionFixed = ($el.css('position') == 'fixed');
												var $el = $('.fixedElement'); 
												if ($(this).scrollTop() > 200 && !isPositionFixed){ 
												$el.css({'position': 'fixed', 'top': '0px'}); 
												}
												if ($(this).scrollTop() < 200 && isPositionFixed){
												$el.css({'position': 'static', 'top': '0px'}); 
												} 
				});


				$('#thediv').click(function() {
				$('#roadmap').toggleClass('reveal-closed').toggleClass('reveal-open');
				});

					new kursor({
						type:1
						
					})
					var tc = document.getElementById("tx");
	tc.addEventListener("input", function() {
		this.style.setProperty('background-color', tc.value , "important");
		var cols = document.getElementsByClassName('txtclr');
		// var ap =document.getElementById("ap");
  		for(i = 0; i < cols.length; i++) {
				cols[i].style.setProperty('color', tc.value , "important"); 
				// ap.style.setProperty('color', tc.value , "important"); 
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
		var styleElement = document.createElement("style");
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
					$('#mute').click(function() {
						if(p==true){
							document.getElementById('mx').play();
							p= false;
						}else{
							document.getElementById('mx').pause();
							p= true;
						}
						$(this).toggleClass('white-text').toggleClass('text-dark');
							
					});
					$(".RM").click(function() {
					$(this).siblings(".roadmap").toggleClass("reveal-closed").toggleClass("reveal-open");
					if($(this).text()=='Read less'){
						$(this).html('Read more');
					}else{
						$(this).html('Read less');
					}
				});


					
			</script>
		<!-- scripts-->
	</body>
</html>