<?php

                      require('db.php');
                      session_start();
                
                      // If form submitted, insert values into the database.
                      if (isset($_POST['username'])){
                              // removes backslashes
                      $username1 = stripslashes($_REQUEST['username']);
                              //escapes special characters in a string
                      $username1 = mysqli_real_escape_string($connect,$username1);
                      $password1 = stripslashes($_REQUEST['password']);
                      $password1 = mysqli_real_escape_string($connect,$password1);
                      
                      //Checking is user existing in the database or not
                      $query2 = "SELECT * FROM `users` WHERE username='$username1'
                      and password='".md5($password1)."' ";
                      $result = mysqli_query($connect,$query2) or die(mysql_error());
                      $rows = mysqli_num_rows($result);
                      if($rows==1){
                      $_SESSION['username'] = $username1;
                      $_SESSION['email'] = $email1;
                          
                          
                                  // Redirect user to index.php
                          header("Location: home.php");
                              }else{
                               
                          $name_error1 =  "Username or Password is incorrect";
                          echo "<script type='text/javascript'> onload = function(){alert('$name_error1');
                          }</script>";
                         
                          
                         
                      }
                          }
                          
                      ?><!--login end-->


<!DOCTYPE html>
<html>
<title>Keep notes</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 

<!-- Webpage Icon -->
<link rel="shortcut icon" type="image/x-icon" href="img/logo.PNG" /> 



  
<style>

body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
body {
    background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(img/Contact3.jpg);
    background-size: cover;
}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
.input--style-3 {
    font-size: 16px;
    color: #ccc;
    background: transparent;
}
input {
    outline: none;
    margin: 0;
    border: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    width: 100%;
    font-size: 14px;
    font-family: inherit;
}
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
border: 12px solid #f3f3f3; 
            border-radius: 50%; 
            border-top: 12px solid #444444; 
            width: 70px; 
            height: 70px; 
            animation: spin 1s linear infinite; 
        } 
          
        @keyframes spin { 
            100% { 
                transform: rotate(360deg); 
            } 
        } 
          
        .center { 
            position: absolute; 
            top: 0; 
            bottom: 0; 
            left: 0; 
            right: 0; 
            margin: auto; 
        } 



</style>
<body class="">
<div id="loader" class="center"></div> 
<script> 
        document.onreadystatechange = function() { 
            if (document.readyState !== "complete") { 
                document.querySelector( 
                  "body").style.visibility = "hidden"; 
                document.querySelector( 
                  "#loader").style.visibility = "visible"; 
            } else { 
                document.querySelector( 
                  "#loader").style.display = "none"; 
                document.querySelector( 
                  "body").style.visibility = "visible"; 
            } 
        }; 
    </script> 


<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <!-- Avatar image in top left corner -->
    <div class="p-3">
    <img src="img/logo.PNG" style="width:100%">
    <div class="text-white h4 text-center text-danger"   style="font-family: 'Sigmar One', cursive;">Keep Notes</div>
    </div>

    <a href="#login1" class="w3-bar-item w3-button w3-padding-large w3-hover-black text-white h4">
      <i class="fa fa-sign-in  w3-xxlarge"></i>
      <p class="py-3">Login/<br>Signup</p>
    </a>
    <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black text-white h4" >
      <i style="font-size:24px" class="fa fa-user w3-xxlarge"></i>
      <p class="py-3">About</p>
    </a>
   
    
  </nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->

<ul class="nav nav-tabs  w3-hide-medium w3-hide-large  sticky-top px-3 " id="myNavbar">
  <li class="nav-item p-3"> 
   <img src="img/logo.PNG" style="width:25px" disable></li>
  <li class="nav-item">
     <a href="#login1" class="w3-bar-item w3-button w3-padding-large w3-hover-black text-white">
      <p><i class="fa fa-sign-in w3-large"></i>Login/Signup</p>
     </a>
  </li>
  <li class="nav-item ">
     <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black text-white ">
      <p class=""><i class="fa fa-user w3-large"></i>About</p>
     </a>
  </li>
  
  
</ul>

<!-- Page Content -->


<div class="p-5" id="main" >

  <div class="container-fluid " id="login1"  >
  
    <div class="text-white p-5 h1 text-center"  style="font-family: 'Sigmar One', cursive;">NEW USER? - REGISTER</div>

    <div class="row">
    <div class=" col-sm-0 col-md-3">
    </div>
    <div class="col border p-5 rounded-pill border-primary">
      <ul class="nav nav-tabs justify-content-center">
        <li class="nav-item">
          <a class="nav-link active " href="#register" data-toggle="tab">REGISTER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#login" data-toggle="tab">LOGIN</a>
        </li>
  
      </ul>


        <div class="container-fluid text-white">
          <div class="row">
              <div class="col">
                <div class="tab-content active">


          <!---Register start--->
                              
          <?php
                    include ("db.php");
                    error_reporting(0);
                    if (isset($_POST["fullname"]))
                    {
                        $name = $_POST['fullname'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $gender = $_POST['gender'];
                        $email = $_POST['email'];
                        $phone = $_POST['phoneno'];
                        $sql_u = "SELECT * FROM users WHERE username='$username'";
                        $sql_e = "SELECT * FROM users WHERE email='$email'";
                        $res_u = mysqli_query($connect, $sql_u);
                        $res_e = mysqli_query($connect, $sql_e);

                        if (mysqli_num_rows($res_u) > 0) {
                            $name_error = "Sorry... username already taken";
                            echo "<script type='text/javascript'> onload = function(){alert('$name_error');
                            }</script>";
                                    
                        }else if(mysqli_num_rows($res_e) > 0){
                            $email_error = "Sorry... email already taken"; 	
                            echo "<script type='text/javascript'> onload = function(){alert('$email_error');
                            }</script>";  	
                        }else
                        {
                            $query="INSERT INTO users (fullname,gender,email,username,password,phoneno) VALUES ('$name','$gender','$email','$username','".md5($password)."','$phone')";
                            $query1="CREATE TABLE `$username` (`id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, `title` varchar(100) NOT NULL,`description` varchar(1000) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1; ";
                            mysqli_query($connect,$query1);
                            $data= mysqli_query($connect,$query);
                            if($data)
                            {
                                $sucess_error = "Success";
                                echo "<script type='text/javascript'> onload = function(){alert('$sucess_error');
                                }</script>";
                            }
                        
                        }
                    }
                ?><!--register end--->

                  <div class="tab-pane active " id="register">
                  <br>
                  <form action="" autocomplete="on" method="POST" ><br>
                        <div class="input-group border-bottom">
                            <input class="input--style-3" type="text" placeholder="Fullname" name="fullname" value="<?php if (isset($fullname)){ echo $fullname; }?>"  required>
                        </div><br>
                        <div class="input-group border-bottom">
                            
                                <input class="input--style-3" type="email" placeholder="Email" name="email" value="<?php if (isset($email)){ echo $email; } ?>" autocomplete="off" required>
                                
                            
                        </div><br>
                        <div class="input-group border-bottom">
                            <div class="form_error" >
                                <input class="input--style-3" type="text" placeholder="Username" name="username" value="<?php if (isset($username)){ echo $username; }?>" autocomplete="off" required>
                               
                            </div>                
                        </div><br>
                        <div class="input-group border-bottom">
                            <input class="input--style-3" type="password" placeholder="Password" name="password" required>
                        </div><br>
                        <div class="input-group">
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadio1" name="gender" class="custom-control-input" value="male" required>
                            <label class="custom-control-label text-white-50" for="customRadio1">Male</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadio2" name="gender" class="custom-control-input" value="female">
                            <label class="custom-control-label text-white-50" for="customRadio2">Female</label>
                            </div> 
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadio3" name="gender" class="custom-control-input" value="other">
                            <label class="custom-control-label text-white-50" for="customRadio3">Other</label>
                            </div> 
                        </div>  <br>                
                       
                        
                        <div class="input-group border-bottom">
                            <input class="input--style-3" type="tel" pattern="[0-9]{10}" id="phoneno" placeholder="Phone" name="phoneno" required>
                        </div><br>
                      
                        
                        <div class="p-t-10 text-center" >
                            <button class="btn btn-outline-primary rounded-pill btn-lg font-weight-bolder " type="submit" >Register</button>
                        </div>
                       
                    </form>
                  </div>
          <!---Register end--->
          
          <!---Login start--->
                  <div class="tab-pane" id="login">
                    <br>
                                          
                      
                    <form action="" method="POST">
                        <div class="form-group">
                          <label for="exampleInputEmail1"></label>
                          <input type="text" placeholder="Username" name="username" required class=" input--style-3 border-bottom" >
                        </div>
                        <div class="form-group ">
                          <label for="exampleInputPassword1"></label>
                          <input type="password" placeholder="Password" name="password" required class=" input--style-3 border-bottom"  id="exampleInputPassword1">
                        </div>
                        <div class="form_error" <?php if (isset($name_error1)): ?> <?php endif ?> >
                          <span> <?php echo " <span class=\"text-danger\"> $name_error1 </span>" ; ?></span>
                        </div>
                        <br>
                        
                        <div class="text-center">
                        <button  type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                  </div>
          <!---Login end---> 
                </div>
              </div>
          </div>
        </div><!--container end-->


      <!-- contained end-->
    </div>
    <div class=" col-sm-0 col-md-3">
    </div>
    </div>
  </div>

</div>

<div >
<hr style="width:100%" class="w3-opacity">
</div>
<div id="main" >
    
    <div class="container" id="about">
    
        <div class="row">
          
          <div class=" col text-white-50 h4 text-center ">
            <div class="text-white p-5 h1 text-center" id="about style="font-family: 'Sigmar One', cursive;">About</div>
                <img src="img/logo.PNG" style="width:100px" disable><br><br>
                <p><span class="text-white">Keep note</span> is created by <span class="text-white">Ashishkumar Vishwakarma.</span> <br> It is a note site. Here, you can make a note of anything or everything which can access whenever you want. </p>
                <div class="w3-padding-large text-center">
                  <div class="w3-content w3-text-grey w3-xlarge">
                    <i class="fa fa-facebook-official w3-hover-opacity"></i>
                    <i class="fa fa-instagram w3-hover-opacity"></i>
                    <i class="fa fa-snapchat w3-hover-opacity"></i>
                    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                    <i class="fa fa-twitter w3-hover-opacity"></i>
                    <i class="fa fa-linkedin w3-hover-opacity"></i>
                    <p class="w3-medium">Powered by <a href="#" target="_blank" class="w3-hover-text-green">technotaught</a></p>
                  <!-- End footer -->
                  </div>
                </div>                
            </div>
            <div class=" col">
              <header class="  w3-text-grey" id="contact">
                <div class="text-white p-5 h1 text-center" id="about style="font-family: 'Sigmar One', cursive;">Contact us</div>
      
              </header>
              <div class="w3-section text-white text-center">
                <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Mumbai, India</p>
                <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: 91 8424847449</p>
                <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: technotaughts@gmail.com</p>
              </div><br>
     
            
                <div class=" col text-white-50 h4 text-center">
                  <p>Lets get in touch. Send me a message:</p>
                  <form action=""  name="contact1" method="POST" onsubmit="return validatecontactForm()" required >
                    <p><input class="w3-input w3-padding-16 input--style-3 " type="text" placeholder="Name"  name="fullname2"></p>
                    <p><input class="w3-input w3-padding-16 input--style-3"  type="email" placeholder="Email"  name="email2"></p>
                    <p><input class="w3-input w3-padding-16 input--style-3" type="message" placeholder="Message" name="message2" ></p>
                    <p>
                      <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                        <i class="fa fa-paper-plane"></i> SEND MESSAGE
                      </button>
                  </form>

                <!-- End Contact Section -->
                        <?php
                              include('db.php');
                             
                              $query="SELECT * FROM users";
                              $sql=mysqli_query($connect,$query);
                              $row=mysqli_fetch_array($sql);
                              if (isset($_POST['fullname2'])){
                              $fullname2=$_POST['fullname2'];
                              $email2= $_POST['email2'];
                              $message2 = $_POST['message2'];
                              $trn_date2 = date("y-m-d H:i:s");
                              $sql1="INSERT INTO contact(fullname,email,message,trn_date) VALUES ('$fullname2','$email2','$message2','$trn_date2')";
                              $data2=mysqli_query($connect,$sql1);
                              }
                        ?>
                        <script>
                          function validatecontactForm()
                          {
                            var x = document.forms["contact1"]["fullname2"].value;
                            var y = document.forms["contact1"]["email2"].value;
                            var z = document.forms["contact1"]["message2"].value;
                            if (x == "" || x == null) {
                              alert(" Please insert Fullname");
                              return false;
                            }
                            else if (y == "" || y == null) {
                              alert("Please insert Email");
                              return false;
                            }
                            else if (z == "" || z == null) {
                              alert(" Please insert Message");
                              return false;
                            }
                            else { 
                              alert("The form was submitted");
                            }
                            
                          }                        
                        </script>
                </div>
              </div>
          </div>
        </div>

  </div>


 
   
 

  
    <!-- Footer -->
    <div class="w3-padding-large text-center">
  <footer class="w3-content w3-text-grey w3-xlarge">
     <a href="https://www.facebook.com/imvishwaashish" target="_blank" >
    <i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="https://www.instagram.com/im_ashish_vishwakarma/" target="_blank" ><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="https://twitter.com/im_vishwaashish" target="_blank" ><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://www.linkedin.com/in/ashishkumar-vishwakarma-9992a516b/" target="_blank" ><i class="fa fa-linkedin w3-hover-opacity"></i></a>
    <p class="w3-medium">Powered by <a href="https://github.com/vishwaashish" target="_blank" class="w3-hover-text-green">Ashishkumar Vishwakarma</a></p>
  <!-- End footer -->
  </footer>
 </div> 
  

<!-- END PAGE CONTENT -->
<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>
</html>

 
 