<!--Your Start is from here-->
<!doctype html>
<html>
  <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta http-equiv='x-ua-compatible' content='ie=edge'>
    <title>Sign Up</title>
    <link rel='stylesheet' href='../css/kursor.css'>
    <!-- css -->
      <!-- liks -->
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
      <!-- /liks -->

      <style>
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
              background-color: #9be140;
              color: #29263F;
          }

          body{
              background-color: #f8f5ead0;
              color: #29263F;
              background-image: url(../img/bg2.png);
              background-attachment: fixed;
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
      </style>
    <!-- /css -->
  </head>

  <body>	


    <!-- signup body -->
      <div>
        <h2 class='text-center font-weight-bold mb-4 pb-2'><i class='fas fa-file-signature'></i>Sign up</h2>
        <!-- signup -->
          <div class=' mt-5 container'  style='margin-bottom: 200px !important;'>
              <div class='card'>
                  <h5 class='card-header txtclr white-text text-center py-4'>
                      <strong><i class='fas fa-file-signature'></i>Sign up</strong>
                  </h5>
              
                  <div class='card-body  pt-0'>
                    <form id='main' class='form-horizontal p-5' action="server.php" method="post" enctype="multipart/form-data" novalidate>
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
                          <div class='col-sm-8 md-form px-0'>
                            <input id='confirm-password' class='form-control' type='password' name='confirmPassword'>
                            <label class='control-label' for='confirm-password'><i class='fas fa-redo'></i>Confirm password</label>
                          </div>
                          <div class='col-sm-4 messages'></div>
                      </div>
                      <div class='form-group row mb-0'>
                          <div class='col-sm-8 md-form px-0'>
                            <input id='userName' class='form-control' type='text' name="userName">
                            <label class='control-label' for='userName'><i class='fas fa-id-card'></i>Username</label>
                          </div>
                          <div class='col-sm-4 messages'>
                          </div>
                      </div>
                      <div class='form-group row mb-0'>
                          <div class='col-sm-8 md-form px-0'>
                            <input id='birthdate' class='form-control' type='date' placeholder='YYYY-MM-DD' name='birthdate'>
                            <label class='control-label' for='birthdate'><i class='fas fa-calendar-alt'></i>Birthdate</label>
                          </div>
                          <div class='col-sm-4 messages'></div>
                      </div>
                      <div class='form-group row mb-0'>
                          <div class='col-sm-8 px-0'>
                              <label for='gender'><i class='fas fa-venus-mars'></i>Choose your gender</label>
                              <select id='gender' class='mdb-select md-form' name='gender'>
                                <option value=''>gender</option>
                                <option value='M'><i class='fas fa-mars'></i>male</option>
                                <option value='F'><i class='fas fa-venus'></i>female</option>

                              </select>
                          </div>
                          <div class='col-sm-4 messages'></div>
                      </div>
                      <div class='form-group row mb-0'>
                          <div class='col-sm-8 px-0'>
                            <label for='activity'><i class='fas fa-biking'></i>week activity</label>
                            <select id='activity' class='mdb-select md-form' name='activity'>
                                <option value=''>Activity </option>
                                <option value='1.2'>little (no exercize)</option>
                                <option value='1.375'>Moderate( 1-3dayes per week)</option>
                                <option value='1.725'>Heavy (3-5 days per week)</option>
                                <option value='1.9'>Very heavy (twice a day every day)</option>
                            </select>
                          </div>
                          <div class='col-sm-4 messages'></div>
                      </div>
                      <div class='form-group row mb-0'>
                          <div class='col-sm-8 px-0'>
                            <label for='goal'><i class='fas fa-medal'></i>Choose your goal</label>
                            <select id='goal' class='mdb-select md-form' name='goal'>
                    
                                <option value=''>your Goal </option>
                                <option value='loss'>Loss Weight</option>
                                <option value='gain'>Gain Weight</option>
                                <option value='maintain'>Maintain</option>
                            </select>
                          </div>
                          <div class='col-sm-4 messages'></div>
                      </div>  
                      <div class='form-group row mb-0'>
                          <div class='col-sm-8 px-0'>
                            <label for='select'><i class='fas fa-user-md'></i>Choose your Doctor</label>
                            <select id='doctorName' class='mdb-select md-form' name='doctorName'>
                                <option value=''>doctor</option>
                                <?php
                                  // here we get the file from php inclueds directory
                                  // which this file contain the initialization of database connection
                                  require("../phpIncludes/initConnection.php");

                                  // this is the query for the data base to get the elements from the table
                                  $query = "select * from doctors";

                                  // here we send the query to the database
                                  $data = mysqli_query($conn, $query);

                                  // check if there is a data back from the database
                                  if($data){

                                    // go throught every element in the data array and get the id and name 
                                    // after get them we display it in the nav bar
                                    while($row = mysqli_fetch_array($data))
                                    {
                                      $doctorID = $row["doctor_id"];
                                      $doctorName = $row["doctor_name"];
                                      echo "
                                        <option value='$doctorID'>$doctorName</option>
                                      ";
                                    }

                                  }
                                  // if the data array is empty it display for us there is no data
                                  else{
                                    echo "No Data Found";
                                  }
                                ?>

                            </select>
                          </div>
                          <div class='col-sm-4 messages'></div>
                      </div>        
                      <div class='form-group row mb-0'>
                          <div class='col-sm-8 md-form px-0'>
                            <input id='age' class='form-control' type='number' name='age'>
                            <label class='control-label' for='age'>Age</label>
                          </div>
                          <div class='col-sm-4 messages'></div>
                      </div>
                      <div class='form-group row mb-0'>
                          <div class='col-sm-8 md-form px-0'>
                            <input id='weight' class='form-control' type='number' name='weight'>
                            <label class='control-label' for='weight'><i class='fas fa-weight'></i>Weight in Kg</label>
                          </div>
                          <div class='col-sm-4 messages'></div>
                      </div>
                      <div class='form-group row mb-0'>
                          <div class='col-sm-8 md-form px-0'>
                            <input id='height' class='form-control' type='number' name='height'>
                            <label class='control-label' for='height'> <i class='fas fa-ruler-vertical'></i>height in Cm</label>
                          </div>
                          <div class='col-sm-4 messages'></div>
                      </div>
                      <div class='input-group mb-4'>
                          <div class='input-group-prepend'>
                              <span class='input-group-text'><i class='fas fa-image'></i>Upload Profile Img</span>
                          </div>
                          <div class='custom-file'>
                              <input type='file' name="postImage" class='custom-file-input' id='fileInput' aria-describedby='fileInput'>
                              <label class='custom-file-label' for='fileInput'>png,jpg</label>
                          </div>
                          <div class='col-sm-4 messages'></div>
                          
                      </div>
                      <div class='form-group'>
                          <div class='text-center pt-3'>
                          <button type='submit' name='signUp' class='btn btn-rounded btn-outline-brown btn-lg btn-block z-depth-0 my-4 waves-effect' style='    border-radius: 60px;'>Submit</button>
                          </div>
                      </div>
                    </form>
                  </div>
              </div>
          </div>
        <!-- /signup -->
      </div>
    <!-- signup body -->

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
        <!-- Copyright -->
        <audio id='mx' controls loop  autoplay>
          <source src='../music/m.mp3' type='audio/mpeg'>
        </audio>
        
      </footer>
    <!-- /footer   -->

    <!-- scripts -->

      <!-- validation -->
        <script type='text/javascript' src='../js/moment.min.js'></script>
        <script type='text/javascript' src='../js/underscore-min.js'></script> 
        <script type='text/javascript' src='../js/validate.min.js'></script>
        <script type='text/javascript' src='../js/validate.js'></script>
      <!-- /validation -->

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

      
    
      <script type="text/javascript">
            var p =false;

            new kursor({
                type:1
                
            })
            
            $(document).ready(function() {
                    $('.mdb-select').materialSelect();
                  });

                (function() {
                    validate.extend(validate.validators.datetime, {
                      parse: function(value, options) {
                        return +moment.utc(value);
                      },
                      format: function(value, options) {
                        var format = options.dateOnly ? "YYYY-MM-DD" : "YYYY-MM-DD hh:mm:ss";
                        return moment.utc(value).format(format);
                      }
                    });

                    var constraints = {
                      email: {
                        presence: true,
                        email: true
                      },
                      password: {
                        presence: true,
                        length: {
                          minimum: 5
                        }
                      },
                      "confirm-password":{
                        presence: true,
                        equality: {
                          attribute: "password",
                          message: "^The passwords does not match"
                        }
                      },
                      userName: {
                        presence: true,
                        length: {
                          minimum: 3,
                          maximum: 20
                        }
                        ,format: {
                          pattern: "[a-z0-9]+",
                          flags: "i",
                          message: "can only contain a-z and 0-9"
                        }
                      },
                      birthdate: {
                        presence: true,
                        date: {
                          latest: moment().subtract(12, "years"),
                          message: "^You must be at least 12 years old to use this service"
                        }
                      },
                      gender: {
                        presence: true,
                        
                      },
                      fileInput: {
                        presence: true,
                        
                      },
                      activity: {
                        presence: true,
                        
                      },
                      doctor: {
                        presence: true,
                        
                      },
                      doctorName: {
                        presence: true,
                        
                      },goal: {
                        presence: true,
                        
                      },
                      "height": {
                        presence: true,
                        numericality: {
                          onlyInteger: true,
                          greaterThanOrEqualTo: 100
                        }
                      },
                      "weight": {
                        presence: true,
                        numericality: {
                          onlyInteger: true,
                          greaterThanOrEqualTo: 35
                        }
                      },
                      "age": {
                        presence: true,
                        numericality: {
                          onlyInteger: true,
                          greaterThanOrEqualTo: 12
                        }
                      }
                    };
                    var form = document.querySelector("form#main");
                    form.addEventListener("submit", function(ev) {
                      handleFormSubmit(form);
                    });

                   

                    var inputs = document.querySelectorAll("input, textarea, select")
                    for (var i = 0; i < inputs.length; ++i) {
                        inputs.item(i).addEventListener("change", function(ev) {
                          var errors = validate(form, constraints) || {};
                          showErrorsForInput(this, errors[this.name])
                        });
                    }

                    function handleFormSubmit(form, input) {
                      var errors = validate(form, constraints);
                      showErrors(form, errors || {});
                      if (!errors) {
                        showSuccess();
                      }
                    }

                    function showErrors(form, errors) {
                      _.each(form.querySelectorAll("input[name], select[name]"), function(input) {
                        showErrorsForInput(input, errors && errors[input.name]);
                      });
                    }

                    function showErrorsForInput(input, errors) {
                      var formGroup = closestParent(input.parentNode, "form-group")
                        , messages = formGroup.querySelector(".messages");
                      resetFormGroup(formGroup);
                      if (errors) {
                        formGroup.classList.add("has-error");
                        _.each(errors, function(error) {
                          addError(messages, error);
                        });
                      } else {
                        formGroup.classList.add("has-success");
                      }
                    }

                    function closestParent(child, className) {
                      if (!child || child == document) {
                        return null;
                      }
                      if (child.classList.contains(className)) {
                        return child;
                      } else {
                        return closestParent(child.parentNode, className);
                      }
                    }

                    function resetFormGroup(formGroup) {
                      formGroup.classList.remove("has-error");
                      formGroup.classList.remove("has-success");
                      _.each(formGroup.querySelectorAll(".help-block.error"), function(el) {
                        el.parentNode.removeChild(el);
                      });
                    }

                    function addError(messages, error) {
                      var block = document.createElement("p");
                      block.classList.add("help-block");
                      block.classList.add("error");
                      block.classList.add("text-danger");
                      block.innerText = error;
                      messages.appendChild(block);
                    }

                    function showSuccess() {
                      alert("Success!");
                    }
                }
                )()
            ;


          
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
    <!-- scripts -->


  </body>

</html>

