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
                        <li><a href="login.php">Login</a></li>
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
                           <form method="post"  enctype="multipart/form-data" action="connector.php" class="login-form">


                           <div class="form-group" style="background-color: #2c486d;">
                              <input type="text" name="username"  class="form-control rounded-left" placeholder="Username" required>
                           </div>
                        <div class="form-group d-flex"  style="background-color: #2c486d;">
                          <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>
                        </div>
                        <div class="form-group d-flex"  style="background-color: #2c486d;">
                          <input type="password" name="confirm_password" class="form-control rounded-left" placeholder="Confirm Password" required>
                        </div>                       


                        <div>

                        <select required style="padding-left:3vh; color: gray; border-color: #f1f1f1;" name="d_name" id="inputState" class="form-control" style="outline: none;" placeholder="Department Name" 
                        autocomplete="d_name">
                        <option value="" disabled selected hidden>Department Name</option>

                        <option value="Assistant_Undersecretary" >Assistant Undersecretary</option>
                        <option value="Officers_Affairs" >Officers Affairs</option>
                        <option value="Personal_Affairs" >Personal Affairs</option>
                        <option value="Civilian_Affairs" >Civilian Affairs</option>

                        </select>
                        </div>



                        <div style="padding-top:2vh;">

                           <select required style="padding-left:3vh; color: gray; border-color: #f1f1f1;" name="d_no" id="inputState" class="form-control" style="outline: none;" placeholder="Department No." 
                           autocomplete="d_no">
                           <option value="" disabled selected hidden>Department No.</option>

                           <option value="1" >Department 1</option>
                           <option value="2" >Department 2</option>


                           </select>
                        </div>

                        <div style="padding-top:2vh;">

                           <select required style="padding-left:3vh; color: gray; border-color: #f1f1f1;" name="section" id="inputState" class="form-control" style="outline: none;" placeholder="Section" 
                           autocomplete="section">
                           <option value="" disabled selected hidden>Section</option>

                           <option value="S1" >Section 1</option>
                           <option value="S2" >Section 2</option>
                           <option value="S3" >Section 3</option>
                           <option value="O1" >Office 1</option>
                           <option value="O2" >Office 2</option>


                           </select>
                        </div >                        

                        <div class="form-group" style="padding-top:2vh;">
                              <input type="text" name="designation"  class="form-control rounded-left" placeholder="Designation" required>
                           </div>




                           <h6 class="card-subtitle mb-2">Type=<code>&nbsp;PNG / JPG / JPEG / GIF</code><br>Max Size=<code>&nbsp; 1 MB</code></h6>
                           <div class=" mb-0">
                           <input type="hidden" name="MAX_FILE_SIZE" value="1024010" />
                           <input type="file" name="file">

                           </div>





                        <div class="form-group d-md-flex">


                        </div>
                        <div class="form-group">
                           <button type="submit" name="submit" class="btn btn-primary rounded submit p-3 px-5">SIGNUP</button>
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