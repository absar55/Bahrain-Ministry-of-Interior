<?php

  session_start(); 

    
  if(!isset($_SESSION['color'])){
    header('location:login.php');
  }

  

   $username1= $_SESSION['username'];
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


      $query = "SELECT * FROM accounts WHERE username = '$username1'";
      $run_query = mysqli_query($conn, $query);
      
        $row = mysqli_fetch_assoc($run_query);
   

        $username2=$row["username"];
        $caller_name=$row["callee_name"];
        $call_link=$row["callee_link"];
        $any_call=$row["upcomming_call"];


        $role=$row["role"];


        if ($role=="Admin")
        {
          header('location:admin.php');
      
        }





    }




  
   

?>













<!DOCTYPE html>
<html lang="en">
   <head>
   <meta http-equiv="refresh" content="900;url=logout.php" />

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
      <style>
    .popup {
      position: fixed;
      top: 40px;
      left: 50%;
      transform: translate(-50%, 0);
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ccc;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      text-align: center;
      z-index: 9999;
      border-radius: 20px;
    }
    
    .popup h3 {
      margin-top: 0;
    }
    
    .btn-answer, .btn-reject {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 50px;
      margin: 10px;
      cursor: pointer;
    }
    
    .btn-answer:hover{
      background-color: #00008B;
    }

        
    .btn-reject:hover {
      background-color: #8b0000;
    }

    .btn-reject {
      background-color: #dc3545;
    }

    .close-btn {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 24px;
      font-weight: bold;
      color: #ccc;
      cursor: pointer;
    }

    .close-btn:hover {
      color: #000;
    }
  </style>
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
                     <li><a href="#"><?php echo "Welcome, $username1"  ?></a></li>
                     </ul>
                     <ul>
                     <li><a href="logout.php">Log Out </a></li>
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
           
            
              <div class="order_section">
                        <div class="order_taital_main1" >
                           <h3 class="order_taital1" style="text-align: center;">Assistant Undersecretary of 
Human Resources</h3>
                          
                        </div>
                     </div>
              <!-- order section start -->
                     <div class="order_section">
                        <div class="order_taital_main">
                           <div class="order_bt1"><a href="#">Department 1</a></div>
                            <div class="order_bt1"><a href="#">Department 2</a></div>
                          
                        </div>
                     </div>
              <!-- order section end -->
                       <!-- order section start -->
                     <div class="order_section">
                        <div class="order_taital_main">
                           <div class="order_bt"><a href="structure.php?variable=Assistant_Undersecretary,1,S1">Section 1</a></div>
                            <div class="order_bt"><a href="structure.php?variable=Assistant_Undersecretary,2,S1">Section 1</a></div>
                          
                        </div>
                     </div>
              <!-- order section end -->
               <!-- order section start -->
                     <div class="order_section">
                        <div class="order_taital_main">
                           <div class="order_bt"><a href="structure.php?variable=Assistant_Undersecretary,1,S2">Section 2</a></div>
                            <div class="order_bt"><a href="structure.php?variable=Assistant_Undersecretary,2,S2">Section 2</a></div>
                          
                        </div>
                     </div>

               <!-- order section end -->
               <!-- order section start -->
               <div class="order_section">
                  <div class="order_taital_main">
                     <div class="order_bt"><a href="structure.php?variable=Assistant_Undersecretary,1,S3">Section 3</a></div>
                      <div class="order_bt"><a href="structure.php?variable=Assistant_Undersecretary,2,S3">Section 3</a></div>
                    
                  </div>
               </div>


              <!-- order section end -->
               <!-- order section start -->
                     <div class="order_section">
                        <div class="order_taital_main">
                           <div class="order_bt"><a href="structure.php?variable=Assistant_Undersecretary,1,O1">Office 1</a></div>
                            <div class="order_bt"><a href="structure.php?variable=Assistant_Undersecretary,2,O1">Office 1</a></div>
                          
                        </div>
                     </div>
              <!-- order section end -->
               <!-- order section start -->
                     <div class="order_section">
                        <div class="order_taital_main">
                           <div class="order_bt"><a href="structure.php?variable=Assistant_Undersecretary,1,O2">Office 2</a></div>
                            <div class="order_bt"><a href="structure.php?variable=Assistant_Undersecretary,2,O2">Office 2</a></div>
                          
                        </div>
                     </div>
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


<?php
if ($any_call==1)
{
?>
<script>
  window.addEventListener('load', function() {
    var popup = document.createElement('div');
    popup.className = 'popup';
    popup.innerHTML = '<span class="close-btn">&times;</span><h3>Incoming Call</h3><p><?php echo $caller_name ?> is calling...</p><button class="btn-answer">Answer</button><button class="btn-reject">Reject</button>';
    document.body.appendChild(popup);

    function showPopup() {
      popup.style.display = 'block';
    }

    function hidePopup() {
      popup.style.display = 'none';
    }

    document.querySelector('.btn-answer').addEventListener('click', function() {
      window.location.href = 'receive.php';
      hidePopup();
    });

    document.querySelector('.btn-reject').addEventListener('click', function() {
      hidePopup();
    });

    document.querySelector('.close-btn').addEventListener('click', function() {
      hidePopup();
    });

    showPopup();
  });
</script>

<?php

}
?>


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
   </body>
</html>