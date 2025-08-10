<?php
$username1 = filter_input(INPUT_POST, 'username1');
$password1 = filter_input(INPUT_POST, 'password1');
$send=$username1;


session_start();
if(isset($_SESSION['color'])){
  header('location:menu.php');
}


if ((!empty($username1)) && (!empty($password1)))
{
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "ministry";
    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error())
        {
          die('Connect Error ('. mysqli_connect_errno() .') '
         . mysqli_connect_error());
        }
        else
        {



          $sql = "SELECT id FROM accounts WHERE username = '$username1' and password = '$password1'";
          $result = mysqli_query($conn,$sql);
          $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
          
          $count = mysqli_num_rows($result);
          
        
          if($count == 1) {
         
             session_start();
             $_SESSION['username'] = "$send";
             $_SESSION["color"]= "blue";


             header("Location: menu.php");

          }else 
          {
             $error = "";
             ?>












<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Minsitory of Interior</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
     <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
  
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     
     <link rel="stylesheet" href="absiba/css/style.css">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/logo.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <!-- header section start -->
      <div class="container-fluid">
         <div class="header_section">
            <div class="container">
               <nav class="navbar navbar-light bg-light justify-content-between">

                  <form class="form-inline ">
                     <a class="logo" href="index.html"><img style="text-align: left" src="images/1234-removebg-preview.png"></a>
                     <div class="login_text" style="padding-top: 40px; padding-left: 10px"><h3 style="text-align: center">Kingdom of Bahrian</h3><h1>Ministry of Interior</h1><h6 style="text-align: center; padding-bottom: 1px">Human Resource</h6>></div>
                  </form>
                  <div class="login_menu" style="text-align: right; text-align: top;">
                     <ul>
                        <li><a href="signup.php">Signup</a></li>
                        <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
                  <div id="mySidenav" class="sidenav">
                     
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="index.html">Home</a>
                     <a href="service.html">Services</a>
                     <a href="about.html">About MOI</a>
                     <a href="blog.html">E-Services</a>
                     <a href="shop.html">Social Media</a>
                     <a href="contacts.html">Contact us</a>
                  </div>
                  <span class="toggle" onclick="openNav()"><i class="fa fa-bars"></i></span>
               </nav>
            </div>
         </div>
      </div>


      
    <div class="row justify-content-center">

<div class="text-center">
<div class="alert text-white bg-danger d-flex align-items-center" role="alert">
<div class="alert-icon me-2">
<i class="ti-alert"></i>
</div>
<div class="alert-text" style="text-align: center;"> <b>WRONG CREDENTIALS </b><br> Try Using Correct Username & Password</div>
</div>

          </div>

          </div>

      <!-- header section end -->
      <!-- layout main section start -->
      <div class="container-fluid">
         <div class="layout_main">
            <!-- banner section start -->

            <!-- banner section end -->
            <section class="ftco-section">
               <div class="container">
                  <div class="row justify-content-center">
         
                  </div>
                  <div class="row justify-content-center">
                     <div class="col-md-6 col-lg-5">
                        <div class="login-wrap p-4">
                        <div class="icon d-flex align-items-center justify-content-center">
                           <span class="fa fa-user-o"></span>
                        </div>
                           <form method="post" action="login.php" class="login-form">
                           <div class="form-group" style="background-color: #2c486d;">
                              <input type="text" name="username1"  class="form-control rounded-left" placeholder="Username" required>
                           </div>
                        <div class="form-group d-flex"  style="background-color: #2c486d;">
                          <input type="password" name="password1" class="form-control rounded-left" placeholder="Password" required>
                        </div>
                        <div class="form-group d-md-flex">
                           <div class="w-50">
                              <label class="checkbox-wrap checkbox-primary">Remember Me
                                      <input type="checkbox" checked>
                                      <span class="checkmark"></span>
                                    </label>
                                 </div>
                                 <div class="w-50 text-md-right">
                                    <a href="#">Forgot Password</a>
                                 </div>
                        </div>
                        <div class="form-group">
                           <button type="submit" class="btn btn-primary rounded submit p-3 px-5">LOGIN</button>
                        </div>
                      </form>
                    </div>
                     </div>
                  </div>
               </div>
            </section>    
          
              <!-- order section start -->
   
              <!-- order section end -->
                       <!-- order section start -->
      
              <!-- order section end -->
               <!-- order section start -->
        
              <!-- order section end -->
               <!-- order section start -->
          
              <!-- order section end -->
               <!-- order section start -->
           
              <!-- order section end -->
              
             <!-- footer section start -->

             <hr class="new4">

<div style="display:inline;">
   <div style="float: center;">
      
      </div>
      <div style="float: right;">
      <img src="images/2030.png"  
      width="80" 
      height="80">

   </div>
 
</div>
<p class="copyright_text" style="padding-left:100px">Designed & developed by Azher Bakhsh.</p>



      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "100%";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script> 

<script src="absiba/js/jquery.min.js"></script>
<script src="absiba/js/popper.js"></script>
<script src="absiba/js/bootstrap.min.js"></script>
<script src="absiba/js/main.js"></script>
   </body>
</html>






<?php




          }


        $conn->close();

            }
        
}


else
{


?>



<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Minsitory of Interior</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
     <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
  
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     
     <link rel="stylesheet" href="absiba/css/style.css">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/logo.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <!-- header section start -->
      <div class="container-fluid">
         <div class="header_section">
            <div class="container">
               <nav class="navbar navbar-light bg-light justify-content-between">

                  <form class="form-inline ">
                     <a class="logo" href="index.html"><img style="text-align: left" src="images/1234-removebg-preview.png"></a>
                     <div class="login_text" style="padding-top: 40px; padding-left: 10px"><h3 style="text-align: center">Kingdom of Bahrian</h3><h1>Ministry of Interior</h1><h6 style="text-align: center; padding-bottom: 1px">Human Resource</h6>></div>
                  </form>
                  <div class="login_menu" style="text-align: right; text-align: top;">
                     <ul>
                        <li><a href="signup.php">Signup</a></li>
                        <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
                  <div id="mySidenav" class="sidenav">
                     
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="index.html">Home</a>
                     <a href="service.html">Services</a>
                     <a href="about.html">About MOI</a>
                     <a href="blog.html">E-Services</a>
                     <a href="shop.html">Social Media</a>
                     <a href="contacts.html">Contact us</a>
                  </div>
                  <span class="toggle" onclick="openNav()"><i class="fa fa-bars"></i></span>
               </nav>
            </div>
         </div>
      </div>
      <!-- header section end -->
      <!-- layout main section start -->
      <div class="container-fluid">
         <div class="layout_main">
            <!-- banner section start -->

            <!-- banner section end -->
            <section class="ftco-section">
               <div class="container">
                  <div class="row justify-content-center">
         
                  </div>
                  <div class="row justify-content-center">
                     <div class="col-md-6 col-lg-5">
                        <div class="login-wrap p-4">
                        <div class="icon d-flex align-items-center justify-content-center">
                           <span class="fa fa-user-o"></span>
                        </div>
                           <form method="post" action="login.php" class="login-form">
                           <div class="form-group" style="background-color: #2c486d;">
                              <input type="text" name="username1"  class="form-control rounded-left" placeholder="Username" required>
                           </div>
                        <div class="form-group d-flex"  style="background-color: #2c486d;">
                          <input type="password" name="password1" class="form-control rounded-left" placeholder="Password" required>
                        </div>
                        <div class="form-group d-md-flex">
                           <div class="w-50">
                              <label class="checkbox-wrap checkbox-primary">Remember Me
                                      <input type="checkbox" checked>
                                      <span class="checkmark"></span>
                                    </label>
                                 </div>
                                 <div class="w-50 text-md-right">
                                    <a href="#">Forgot Password</a>
                                 </div>
                        </div>
                        <div class="form-group">
                           <button type="submit" class="btn btn-primary rounded submit p-3 px-5">LOGIN</button>
                        </div>
                      </form>
                    </div>
                     </div>
                  </div>
               </div>
            </section>    
          
              <!-- order section start -->
   
              <!-- order section end -->
                       <!-- order section start -->
      
              <!-- order section end -->
               <!-- order section start -->
        
              <!-- order section end -->
               <!-- order section start -->
          
              <!-- order section end -->
               <!-- order section start -->
           
              <!-- order section end -->
              
             <!-- footer section start -->

             <hr class="new4">

<div style="display:inline;">
   <div style="float: center;">
      
      </div>
      <div style="float: right;">
      <img src="images/2030.png"  
      width="80" 
      height="80">

   </div>
 
</div>
<p class="copyright_text" style="padding-left:100px">Designed & developed by Azher Bakhsh.</p>



      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "100%";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script> 

<script src="absiba/js/jquery.min.js"></script>
<script src="absiba/js/popper.js"></script>
<script src="absiba/js/bootstrap.min.js"></script>
<script src="absiba/js/main.js"></script>
   </body>
</html>







<?php
    die();
}
?>


