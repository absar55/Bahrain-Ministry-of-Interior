
<?php

  session_start(); 
  
  $variable = explode(",", $_GET["variable"]);


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
          <!-- Bootstrap CSS -->

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
      <!-- my css file-->
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
      <!-- header section end -->
      <!-- layout main section start -->

      <div class="container-fluid">
         <div class="layout_main">
            <!-- banner section start -->

            <!-- banner section end -->
           
          
              <!-- order section start -->
   
              <!-- order section end -->
                       <!-- order section start -->
      <div class="row" style="padding-top:34px">

      <?php
      $sql = "SELECT * FROM accounts WHERE department_name = '$variable[0]' AND department_no = '$variable[1]' AND section = '$variable[2]'";
      $results = mysqli_query($conn, $sql);
      $width=100;
      $divider=1;
      $counter=1;
      $box_complete=0;
      $sum=0;
      $height=20;

      while ($row = mysqli_fetch_assoc($results))
      {
         $width=100/$divider;
         ?>
            <div class="column" style="width:<?php echo $width?>%; padding-top:<?php echo $height?>px;">


               <div style="color:white; text-align: center;">


<?php
$tree_member=$row["username"];
$pic_uploaded=$row["profile_pic"];

if ($pic_uploaded==1)
{
$queryy = "SELECT * FROM accounts WHERE username = '$tree_member'";
$run_queryy = mysqli_query($conn, $queryy);
$roww = mysqli_fetch_assoc($run_queryy);
$imageURL = 'uploads/'.$roww["file_name"];
}

else 
{

   $imageURL = "images/image.png";

}






?>






                     <img class="img12" src="<?php echo $imageURL; ?>" width="100; text-align:center;" style="border-radius: 50%;" height="100" alt="Your Image">
                     
                     <span style="font-size: 11px; font-family: Arial;"><br>ONLINE<br></span><span style="font-size: 17px;">
                        
                     <b><?php echo  $tree_member?></b></span><span style="font-size: 12px; font-family: Arial;"><br><?php echo $row["designation"] ?><br></span>       
                     <button class="btn-sm" type="button" onclick="window.location.href='Call.php?receiver=<?php echo $tree_member?>';"><b>Call</b></button>

                     
               
                     
               </div>
  
         
            </div>


            <?php
         //$sum=$sum+$width;
         //if ($box_complete==$sum)
         //{
           // $divider++;
            //$sum=0;
         //}

            if ($counter==1)
            {
               $divider+=2;
               $height+=35;
            }
            else if (($counter==4) || ($counter==8) || ($counter==13))
            {
               $divider++;
               $height+=25;

            }
            $counter++;

         
      }
      
      ?>







                        
    
            


   





      </div>
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
        "roomName": "<?php echo $username1;?>",
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