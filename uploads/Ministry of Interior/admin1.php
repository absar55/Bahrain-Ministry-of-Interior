<?php
$change_username = filter_input(INPUT_POST, 'name');
$change_password = filter_input(INPUT_POST, 'password');
session_start();


$var = explode(",", $_GET["var"]);
$user1=$var[0];



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
  
  

		if (($change_username!=NULL) && (($change_password!=NULL)))
		{

			$sql = "UPDATE accounts SET password='$change_password' WHERE username='$user1'";
			$run_sql = mysqli_query($conn, $sql);

			$sql = "UPDATE accounts SET username='$change_username' WHERE username='$user1'";
			$run_sql = mysqli_query($conn, $sql);

			$user1=$change_username;




		}


		if (isset($var[1]))
		{
					if ($var[1]=="Delete")
					{
						$sql = "DELETE FROM accounts WHERE username='$user1'";
						$run_sql = mysqli_query($conn, $sql);
						header('location:admin.php');
					}



	}




$query = "SELECT * FROM accounts WHERE username = '$username1'";
$run_query = mysqli_query($conn, $query);

  $row = mysqli_fetch_assoc($run_query);


  $username2=$row["username"];

  $role=$row["role"];


if ($role=="Customer")
{
header('location:menu.php');

}



$query = "SELECT * FROM accounts WHERE username = '$user1'";
$run_query = mysqli_query($conn, $query);

  $row = mysqli_fetch_assoc($run_query);


  $name=$row["username"];
  $password=$row["password"];
  $department=$row["department_name"];
  $designation=$row["designation"];



}



?>
 








<!DOCTYPE html>
<html>
<style>
/* Global Styles */
/* Global Styles */

* {
	box-sizing: border-box;
}

body {
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
}

h1 {
	font-size: 36px;
	font-weight: bold;
	margin-bottom: 20px;
}

h2 {
	font-size: 24px;
	font-weight: bold;
	margin-bottom: 10px;
}

p {
	font-size: 16px;
	line-height: 1.5;
	margin-bottom: 20px;
}

button {
	background-color: #4CAF50;
	color: #fff;
	border: none;
	padding: 10px 20px;
	border-radius: 5px;
	cursor: pointer;
}

button:hover {
	background-color: #3e8e41;
}

input[type=text], input[type=email], input[type=tel], textarea {
	width: 100%;
	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 4px;
	resize: vertical;
}

label {
	display: block;
	font-weight: bold;
	margin-bottom: 5px;
}

table {
	border-collapse: collapse;
	width: 100%;
	margin-bottom: 20px;
}

th, td {
	text-align: left;
	padding: 12px;
}

th {
	background-color: #4CAF50;
	color: #fff;
}

tr:nth-child(even) {
	background-color: #f2f2f2;
}
/* Layout Styles */

.container {
	display: flex;
	flex-wrap: wrap;
}

.dashboard {
	flex: 3;
	padding: 20px;
}

.sidebar {
	flex: 1;
	background-color: #f2f2f2;
	padding: 20px;
}

#transaction-history {
	margin-bottom: 40px;
}

#edit-profile {
	max-width: 600px;
	margin: 0 auto;
}
/* Login Page Styles */

.login-page {
	height: 100vh;
	display: flex;
	align-items: center;
	justify-content: center;
}

.login-form {
	background-color: #f2f2f2;
	padding: 20px;
	border-radius: 5px;
	box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
	max-width: 500px;
	margin: 0 auto;
}

.login-form h2 {
	text-align: center;
	margin-bottom: 20px;
}

.login-form label {
	display: block;
	margin-bottom: 5px;
}

.login-form input[type=text], .login-form input[type=password] {
	width: 100%;
	padding: 10px;
	margin-bottom: 10px;
	border: none;
	border-radius: 5px;
	background-color: #fff;
	box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
.login-form button {
	background-color: #4CAF50;
	color: #fff;
	border: none;
	padding: 10px 20px;
	border-radius: 5px;
	cursor: pointer;
	width: 100%;
}

.login-form button:hover {
	background-color: #3e8e41;
}

/* Account Details Styles */

.account-details {
	max-width: 600px;
	margin: 0 auto;
	background-color: #f2f2f2;
	padding: 20px;
	border-radius: 5px;
	box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
}

.account-details h2 {
	margin-bottom: 20px;
}

.account-details label {
	display: block;
	font-weight: bold;
	margin-bottom: 5px;
}

.account-details p {
	margin-bottom: 10px;
}

.account-details input[type=text], .account-details input[type=email], .account-details input[type=tel], .account-details textarea {
	margin-bottom: 20px;
}

.account-details button {
	background-color: #4CAF50;
	color: #fff;
	border: none;
	padding: 10px 20px;
	border-radius: 5px;
	cursor: pointer;
}

.account-details button:hover {
	background-color: #3e8e41;
}

/* Transaction History Styles */

.transaction-history-table {
	max-width: 800px;
	margin: 0 auto;
}

.transaction-history-table th:first-child, .transaction-history-table td:first-child {
	width: 30%;
}

.transaction-history-table th:nth-child(2), .transaction-history-table td:nth-child(2) {
	width: 20%;
}

.transaction-history-table th:nth-child(3), .transaction-history-table td:nth-child(3) {
	width: 25%;
}

.transaction-history-table th:last-child, .transaction-history-table td:last-child {
	width: 25%;
}

.transaction-history-table button {
	background-color: #4CAF50;
	color: #fff;
	border: none;
	padding: 5px 10px;
	border-radius: 5px;
	cursor: pointer;
}

.transaction-history-table button:hover {
	background-color: #3e8e41;
}
form {
   margin: 50px auto;
   width: 90%;
   background-color: #DFF2FF;
   box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
   padding: 20px;
  }
  

	</style>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="Styles/style.css">
</head>
<body style="  background-color: lightblue;">
	<header>
	
                       
                       
                    
		<h1>Admin Dashboard</h1>

	</header>
	<nav>
		<ul >

			<li><a href="logout.php" style="color:black;">Log Out</a></li>

		</ul>
	</nav>







	<div class="container">
	<div class="dashboard">
		<div id="account-summary">
			<h2>Account Summary</h2>
			<table>
				<tr>
					<th>Name</th>
					<td><?php  echo $name;?></td>
				</tr>
				<tr>
					<th>Department Name</th>
					<td><?php  echo $department;?></td>
				</tr>
				<tr>
					<th>Designation</th>
					<td><?php  echo $designation;?></td>
				</tr>
				<tr>
					<th>Account Status</th>
					<td>Active
					

<button onclick="location.href='admin1.php?var=<?php echo $name;?>,<?php echo 'Delete';?>';">Delete Account</button>
</td>

				</tr>
			</table>
		</div>






		





<form action="admin1.php?var=<?php echo $name;?>" method="post">
  <h2 style="text-align: center;">Edit Profile</h2>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" value="<?php echo $name;?>">
  <label for="password">Password:</label>
  <input type="text" id="password" name="password" value="<?php echo $password;?>">

  <div style="text-align: center;">

  <button type="submit">Save Changes</button>
</div>
 </form>






	<footer>
		<p style="text-align: center; padding-top:10%;">&copy; 2023 Bank Dashboard</p>
	</footer>
	<script src="JavaScript/function1.js"></script>
</body>
</html>
