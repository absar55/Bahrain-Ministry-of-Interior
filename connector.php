<?php
$username1 = filter_input(INPUT_POST, 'username');
$password1 = filter_input(INPUT_POST, 'password');
$confirm_password1 = filter_input(INPUT_POST, 'confirm_password');
$department_name = filter_input(INPUT_POST, 'd_name');
$department_no = filter_input(INPUT_POST, 'd_no');
$section = filter_input(INPUT_POST, 'section');
$designation = filter_input(INPUT_POST, 'designation');


if ((!empty($username1)) && (!empty($password1)) && (!empty($department_name)) && (!empty($department_no)) && (!empty($section)) && (!empty($designation)))
{
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




            $sql = "SELECT * FROM accounts WHERE username='$username1'";
            $results = mysqli_query($conn, $sql);
            if (mysqli_num_rows($results) > 0) 
            {
              echo "Username already exists";
            }





            else 
            {


              $sql = "INSERT INTO accounts (username, password,department_name,department_no,section,designation)
              values ('$username1','$password1','$department_name','$department_no','$section','$designation')";
              $conn->query($sql);



              $targetDir = 'uploads/'.$username1;

              $fileName = basename($_FILES["file"]["name"]);
              $targetFilePath = $targetDir . $fileName;
              $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
              $statusMsg = '';




              if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
                // Allow certain file formats
                $allowTypes = array('jpg','png','jpeg','gif');
                if(in_array($fileType, $allowTypes)){
                    // Upload file to server
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                        // Insert image file name into database
                        $insert = $conn->query("UPDATE accounts SET file_name='".$username1.$fileName."' WHERE username='$username1'");
                        if($insert){
                            //$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                            $sql = "UPDATE accounts SET profile_pic='1' WHERE username='$username1'";
                            $run_sql = mysqli_query($conn, $sql);


                          }
                        
                          else{
                              $statusMsg = "File upload failed, please try again.";
                          } 
                      }else{
                          $statusMsg = "Sorry, there was an error uploading your file.";
                      }
                  }else{
                      $statusMsg = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.';
                  }
              }else{
                  $statusMsg = 'Please select a file to upload.';
              }

              echo $statusMsg;




              $key=1;

              if ($key == 1)
              {
                header("Location: login.php");
              }

              else
              {

                echo "Contact to Admin";
              }



            }

            
        }
}


else
{
    echo "Missing Information....Please Fill all the Information again.";
    die();
}
?>





