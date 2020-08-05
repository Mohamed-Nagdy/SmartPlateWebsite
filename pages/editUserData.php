<?php
	session_start();
?>
<!doctype html>
<html>
  <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta http-equiv='x-ua-compatible' content='ie=edge'>
    <title>Smartplate</title>
    
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
    <!-- Your custom styles (optional) -->
    <link rel='stylesheet' href='../css/style.css'>
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
			.clrbx{
				width : 50px;
				height: 50px;
				border-radius:30%;
				background-color:gray;
				margin-left:30%;
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
        cursor:none;
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
        background-attachment: fixed;
      }
      .hf{
					background-color: #9be140;
					color: #29263F;
				}
        .ziad{
				
				border-radius: 30%;
				max-height: 100%;
				width: 100%;
				object-fit: contain;
        margin-bottom:50%
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
    </style>
  </head>

  <body class='bg'>
    
    <!--Navbar -->
      <nav class='mb-1 navbar navbar-expand-lg navbar-dark rounded-pill hf txtclr' style='font-weight: 600;' id='home' data-target='#home'>
          <div class='view overlay zoom navbar-brand'>
            <a class='navbar-brand' href='#'><img src='../img/lllloooooooooogpoooooooooooo.png' alt='logo' style='height: 50px; padding-left: 10px;'></a>
            <div class='mask flex-center rgba-green-slight rounded-pill'></div>
          </div>
          <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent-333' aria-controls='navbarSupportedContent-333' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'><i class="fas fa-align-justify"></i></span>
          </button>
        <div class='collapse navbar-collapse' id='navbarSupportedContent-333'>
          <ul class='navbar-nav mr-auto align-items-center'>
            <li class='nav-item '>
              <a class='nav-link txtclr' href='../index.html'>Home
              </a>
            </li>
            <li class='nav-item '>
              <a class='nav-link txtclr' href='doctorPage.php'>back to profile</a>
            </li>
            <li class='nav-item dropdown'>
              <a class='nav-link dropdown-toggle txtclr' id='navbarDropdownMenuLink-333' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                <i class='fas fa-user'></i>
              </a>
              <div class='dropdown-menu dropdown-menu-right dropdown-default'aria-labelledby='navbarDropdownMenuLink-333'>
                <a class='dropdown-item txtclr' href='doctorPage.php'>profile</a>
                <a class='dropdown-item txtclr' href='logout.php'>sign out</a>
                <a class='dropdown-item txtclr' href='#'> <i class='fas fa-bug'></i> report bug</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    <!--/Navbar -->
    <!-- allbody -->
      <div class="container-fluid" >
        <?php
            if(isset($_GET["editedUserId"])){
              
              require("../phpIncludes/initConnection.php");
              
              $_SESSION["editedUserId1"] = $_GET["editedUserId"];
              $id = $_GET["editedUserId"];
              
              $query = "select * from users where user_id=$id";

              $data = mysqli_query($conn, $query);

              if(mysqli_num_rows($data) != 0){

                $row = mysqli_fetch_array($data);

                $userGender = $row["user_gender"];
                $userAge = $row["user_age"];
                $doctorNotes = $row["doctor_notes"];
                $BMI =(int) $row['body_mass_index'];
                $BMR =(int) $row['basal_metabolic_rate'];
                $BFP =(int) $row['body_fat_persentage'];
                $LBM =(int) $row['lean_body_mass'];
                $protien =(int) $row['protien_in_grams'];
                $carbs =(int) $row['carbs_in_grams'];
                $fats =(int) $row['fat_in_grams'];
                $userImage = $row['user_image'];
                $userName = $row['user_name'];
                $userHeight = $row['user_height'];

              }
              
              $query = "select * from user_daily_state where user_id=$id";

              $data = mysqli_query($conn, $query);

              if(mysqli_num_rows($data) != 0){

                $row = mysqli_fetch_array($data);

                $userDailyMeal = $row["daily_meal"];
                $userDailyCalories = $row["daily_calories"];
                $userDailyWeight = $row["daily_weight"];
                
              }          
              echo "
              
                  <!--.person panel -->
                    <div id='paneel' class='cc card border-primary mb-3  sticky sticky-content fixedElement '  style='width: 25%; overflow:scroll; height:50% !important; '>
                      <div class='card-header view overlay justify-content-center ' >
                        <img src='../$userImage' class=' ziad rounded-right rounded-top sizze-90 img-fluid '   alt='userphoto' >
                        <div class='mask rgba-stylish-light rounded-right rounded-top  ' style='border-radius: 30%;'>
                        </div>
                      </div>
                      <div class='card-body text-primary ' style='font-family: Comic Sans MS, Comic Sans, cursive !important;'>
                        <h5 class='card-title text-center txtclr' style='font-weight: 600;'><a class='txtclr' href='#'>$userName</a></h5>
                        <p class='card-text txtclr'><i class='txtclr  fas fa-calendar-alt'></i>Age:$userAge</p>
                        <p class='card-text txtclr'><i class='txtclr  fas fa-transgender'></i>User Gender : $userGender</p>
                        <p class='card-text txtclr'><i class='txtclr  fas fa-ruler-vertical'></i>height : $userHeight</p>
                        <p class='card-text txtclr'><i class='txtclr  fas fa-weight'></i>weight : $userDailyWeight</p>
                        <p class='card-text txtclr'><i class='txtclr  fas fa-file-medical-alt'></i>User BMI : $BMI</p>
                        <p class='card-text txtclr'><i class='txtclr  fas fa-calculator'></i>User BMR : $BMR</p>
                        <p class='card-text txtclr'><i class='txtclr  fas fa-percent'></i>User BFP : $BFP %</p>
                        <p class='card-text txtclr'><i class='txtclr  fas fa-filter'></i>User LBM : $LBM</p>
                      </div>
                    </div>
                  <!--/.person panel -->
                  <h2 class='txtclr text-center font-weight-bold mb-4 pb-2'><i class='fas fa-user-circle'></i>Edit UserProfile</h2>
                  <!-- post -->
                  <div class='containeer mt-5 container'  style='margin-bottom: 200px !important; width: 75%;'>
                    <div class='cc card'>

                      <h5 class='card-header txtclr white-text text-center py-4'>
                        <i class='fas fa-user-edit'></i>
                          <strong class='txtclr'> Edit User Profile</strong>
                      </h5>

                      <div class='card-body px-lg-5 pt-0'>

              ";		
              echo "
                
                            <form class='md-form' style='color: #757575;' action='server.php' method='post' enctype='multipart/form-data'>              
                              <ul id='sortable-form' class='droptrue drop-list ui-sortable'>
                                  
                                  <li data-template='mTextInputTemp' data-popover='input' class='' style='position: relative; left: 0px; top: 0px;' data-original-title='' title=''>
                                    <label class='txtclr' for='input1'><i class='fas fa-transgender'></i>User Gender</label>
                                  <input type='text' id='input1' class='form-control txtclr' placeholder='' name='gender' value='$userGender'>
                                  </li>
                                  <li data-template='mTextInputTemp' data-popover='input' class='' style='position: relative; left: 0px; top: 0px;' data-original-title='' title=''>
                                    <label class='txtclr' for='input2'><i class='fas fa-file-medical-alt'></i>User BMI  </label>
                                    <input type='text' id='input2' class='form-control txtclr' placeholder='' name='BMI' value='$BMI'>
                                  </li>
                                  <li data-template='mTextInputTemp' data-popover='input' class='' style='position: relative; left: 0px; top: 0px;' data-original-title='' title=''>
                                    <label class='txtclr' for='input3'><i class='fas fa-calculator'></i>User BMR</label>
                                    <input type='text' id='input3' class='form-control txtclr' placeholder='' name='BMR' value='$BMR'>
                                  </li>
                                  <li data-template='mTextInputTemp' data-popover='input' class='' style='position: relative; left: 0px; top: 0px;' data-original-title='' title=''>
                                    <label class='txtclr' for='input4'><i class='fas fa-percent'></i>User BFP</label>
                                    <input type='text' id='input4' class='form-control txtclr' placeholder='' name='BFP' value='$BFP'>
                                  </li>                    
                                  <li data-template='mTextInputTemp' data-popover='input' class='' style='position: relative; left: 0px; top: 0px;' data-original-title='' title=''>
                                    <label class='txtclr' for='input5'> <i class='fas fa-filter'></i>User LBM</label>
                                    <input type='text' id='input5' class='form-control txtclr' placeholder='' name='LBM' value='$LBM'>
                                  </li>                    
                                  <li data-template='mTextInputTemp' data-popover='input' class='' style='position: relative; left: 0px; top: 0px;' data-original-title='' title=''>
                                    <label class='txtclr' for='input6'> <i class='fas fa-fish'></i>User Protien</label>
                                    <input type='text' id='input6' class='form-control txtclr' placeholder='' name='protien' value='$protien'>
                                  </li>
                                  <li data-template='mTextInputTemp' data-popover='input' class='' style='position: relative; left: 0px; top: 0px;' data-original-title='' title=''>
                                    <label class='txtclr' for='input7'> <i class='fas fa-bread-slice'></i>User Carbs</label>
                                    <input type='text' id='input7' class='form-control txtclr' placeholder='' name='carbs' value='$carbs'>
                                  </li>                  
                                  <li data-template='mTextInputTemp' data-popover='input' class='' style='position: relative; left: 0px; top: 0px;' data-original-title='' title=''>
                                    <label class='txtclr' for='input8'><i class='fas fa-tint'></i>User Fats</label>
                                    <input type='text' id='input8' class='form-control txtclr' placeholder='' name='fats' value='$fats'>
                                  </li>
                                  <li data-template='mTextInputTemp' data-popover='input' class='' style='position: relative; left: 0px; top: 0px;' data-original-title='' title=''>
                                    <label class='txtclr' for='input9'><i class='fas fa-fire-alt'></i>User Daily Caloires</label>
                                    <input type='text' id='input9' class='form-control txtclr' placeholder='' name='dailyCalories' value='$userDailyCalories'>
                                  </li>
                                  <li data-template='mTextInputTemp' data-popover='input' class='' style='position: relative; left: 0px; top: 0px;' data-original-title='' title=''>
                                    <label class='txtclr' for='input10'><i class='fas fa-weight'></i>User Daily Weight </label>
                                    <input type='text' id='input10' class='form-control txtclr' placeholder='' name='dailyWeight' value='$userDailyWeight'>
                                  </li>                                     
                                  <li data-template='mTextareaTemp' data-popover='textarea' class='' style='position: relative; left: 0px; top: 0px;' data-original-title='' title='' aria-describedby='popover640397'>
                                    <div class='md-form'>
                                      <i class='txtclr far fa-clipboard prefix'></i>
                                      <textarea name='dailyMeal' id='form10' class='md-textarea form-control txtclr' rows='3'>$userDailyMeal</textarea>
                                      <label class='txtclr' for='form10'>Doctor Notes</label>
                                    </div>
                                  </li>
                                  <li data-template='mTextareaTemp' data-popover='textarea' class='' style='position: relative; left: 0px; top: 0px;' data-original-title='' title='' aria-describedby='popover640397'>
                                    
                                    <div class='md-form'>
                                      <i class='txtclr fas fa-utensils prefix'></i>
                                      <textarea name='doctorNotes' id='form10' class='md-textarea form-control txtclr' rows='3'>$doctorNotes</textarea>
                                      <label class='txtclr' for='form10'>User Daily Meals</label>
                                    </div>
                                  </li>
                                
                              </ul>
                                  <button class='btn btn-rounded btn-outline-brown btn-lg btn-block z-depth-0 my-4 waves-effect' style='    border-radius: 60px;' type='submit' name='editUserData'><i class='fas fa-edit'></i>Edit</button>
                            </form>
                          </div>
                        </div>
                  </div>
                <!-- /post -->
                  
              ";
            }
        ?>
      </div>
    <!-- /allbody -->
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
    <!-- jss -->
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
        <!-- mine chart-->
      <script src='https://cdn.jsdelivr.net/npm/chart.js@2.8.0'></script>
      <script type='text/javascript' src='../js/chart.js'></script>
      <script type='text/javascript' src='../js/chart1.js'></script>
      <script type='text/javascript' src='../js/chart.min.js'></script>
      <script type='text/javascript' src='../js/chart.bundle.js'></script>
      <script type='text/javascript' src='../js/Chart.bundle.min.js'></script>
      <script type='text/javascript' src='../js/loader.js'></script>
      <!-- /mine  -->
      
      <script type="text/javascript">
        var p =false;

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
      </script>
    <!-- jss -->

  </body>

</html>

