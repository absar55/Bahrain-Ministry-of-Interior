
<?php

  session_start(); 
  $receiver = explode(",", $_GET["receiver"]);
    
  if(!isset($_SESSION['color'])){
    header('location:login.php');
  }

  

$username1= $_SESSION['username'];
$host = "localhost";
$dbusername = "u562249304_ministry";
$dbpassword = "SDVUw#2Q";
$dbname = "u562249304_ministry";
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
        $role=$row["role"];


        if ($role=="Admin")
        {
          header('location:admin.php');
      
        }



        $call_link = 'https://meet.jit.si/'.$username1;

        $sql = "UPDATE accounts SET callee_name='$username1', callee_link='$call_link', upcomming_call='1' WHERE username='$receiver[0]'";
        $run_sql = mysqli_query($conn, $sql);



  





    }




  
   

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
      <script src='https://meet.jit.si/external_api.js'></script>
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


      <div class="container align-items-center " >
<div class="transbox text-center"><br><br>


<button id="start" class="btn btn-light btn-lg" type="button"><b>Connect With <?php echo $receiver[0] ?></b></button>
<div id="jitsi-container" style="padding-top:35px" class="container align-items-center">



</div>
</div>
</div>



      <!-- header section end -->
      <!-- layout main section start -->
      <div class="container-fluid">
         <div class="layout_main">
            <!-- banner section start -->

            <!-- banner section end -->
           
          
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

      <script>
var button = document.querySelector('#start');
var container = document.querySelector('#jitsi-container');
var api = null;

button.addEventListener('click', () => {
    var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var stringLength = 30;

    function pickRandom() {
    return possible[Math.floor(Math.random() * possible.length)];
    }

var randomString = Array.apply(null, Array(stringLength)).map(pickRandom).join('');

    var domain = "meet.jit.si";
    var options = {
        "roomName": '<?php echo $username1 ?>',
        "parentNode": container,
        "width": 600,
        "height": 600,
    };
    api = new JitsiMeetExternalAPI(domain, options);
});

</script>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>