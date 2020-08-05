<!doctype html>

<html>
  <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>Login</title>
    <!-- links -->
        <!-- kursor css -->
        <link rel='stylesheet' href='../css/kursor.css'>
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
    <!-- /links -->
    <style>
      .txtclr{
        background-color: #9be140;
        color: #29263F;
      }
      body{
        background-color: #f8f5ead0;
        color: #29263F;
        background-image: url(../img/bg2.png);
        background-attachment: fixed;
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
     
      .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 100px !important;
        background-color: #9be140 !important;
        
      }
    </style>
  </head>
	
  <body>
  
    <!-- signinbody   -->
      <div>
        <h1 class='text-center font-weight-bold mb-4 pb-2'><i class='fas fa-sign-in-alt'></i> Sign in</h1>
        
        <!-- signin -->
          <div class=' mt-5 container'  style='margin-bottom: 200px !important;'>

              <div class='card'>

                  <h5 class='card-header txtclr white-text text-center py-4'>
                      <strong><i class='fas fa-sign-in-alt'></i> Sign in</strong>
                  </h5>
              
                  <div class='card-body  pt-0'>
                      <form id='main' class='form-horizontal p-5'  method="post" action="server.php" >
                          <div class='form-group row mb-0'>
                              <div class='col-sm-8 md-form px-0'>
                                  
                                  <input id='email' class='form-control' type='email' name='email'>
                                  <label for='email' class='control-label'><i class='fas fa-id-card'></i>Email</label>
                              </div>
                              <div class='col-sm-4 messages'></div>
                          </div>
                          <div class='form-group row mb-0'>
                              <div class='col-sm-8 md-form px-0'>
                                <input id='password' class='form-control' type='password' name='password'>
                                <label for='password' class='control-label'><i class='fas fa-fingerprint'></i>Pasword</label>
                              </div>
                              <div class='col-sm-4 messages'></div>
                          </div>
                          <div class='form-group row mb-0'>
                              <div class='col-sm-8 px-0'>
                                <label for='userType'>(<i class='fas fa-user-md'></i>/<i class='fas fa-user-tie'></i>)Type</label>
                                <select id='userType' class='mdb-select md-form' name='userType'>
                                    <option value='U'>User</option>
                                    <option value='D'>Doctor</option>
                                </select>
                              </div>
                              <div class='col-sm-4 messages'></div>
                          </div>
                          <div class='form-group'>
                              <div class='text-center pt-3'>
                                <button type='submit' class='btn btn-rounded btn-outline-brown btn-lg btn-block z-depth-0 my-4 waves-effect' style='    border-radius: 60px;' name="login">login</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
        <!-- /signin -->

      </div>
    <!-- signinbody   -->

    <!-- footer   -->
      <footer class='page-footer footer font-small rounded-pill '>

        <!-- Footer Elements -->
        <div class='container'>
        
          <!-- Grid row-->
          <div class='row'>
        
          <!-- Grid column -->
          <div class='col-md-12  '>
            <div class='mb-4 flex-center'>
            <a href='../index.html'><i class='fas fa-home white-text mr-md-5 mr-3 fa-2x'></i></a>
            <!-- Facebook -->
            <a class='fb-ic'>
              <i class='fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x'> </i>
            </a>
            <!-- Twitter -->
            <a class='tw-ic'>
              <i class='fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x'> </i>
            </a>
            <!-- Google +-->
            <a class='gplus-ic'>
              <i class='fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x'> </i>
            </a>
            <!--Linkedin -->
            <a class='li-ic'>
              <i class='fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x'> </i>
            </a>
            <!--Instagram-->
            <a class='ins-ic'>
              <i class='fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x'> </i>
            </a>
            
            <!--Pinterest-->
            <a class='pin-ic'>
              <i class='fab fa-pinterest fa-lg white-text fa-2x mr-md-5 mr-3'> </i>
            </a>
        
            <a class='ins-ic mute' id='mute'>
              <i class='fab fas fa-volume-mute  fa-lg  fa-2x' > </i>
            </a>
            </div>
          </div>
          <!-- Grid column -->
        
          </div>
          <!-- Grid row-->
        
        </div>
        <!-- Footer Elements -->
        
        <!-- Copyright -->
          <div class='footer-copyright text-center py-3'>© 2020 Copyright:
            <a href='#!'> SmartPlate.com</a>
          </div>
          <audio id='mx' controls loop  autoplay>
            <source src='../music/m.mp3' type='audio/mpeg'>
          </audio>
        <!-- Copyright -->
        
      </footer>
    <!-- footer   -->

    <!-- scripts -->
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

          new kursor({
              type:1
              
          })   

                    
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
      
      
      </script>
    <!-- scripts -->

  </body>

</html>