<html>
<link rel="icon" href="img/plane.png" />
<head>
</head>
<body>
<?php
session_start();
$error="";
if(isset($_POST['submit'])){
	//Variable to Store error message;
	if(empty($_POST['user']) || empty($_POST['pass'])){
		$error = "Username or Password is Invalid";
	}else{
		//Establishing Connection with server by passing server_name, user_id and pass as a patameter
		$lidhja = mysqli_connect("localhost:3306", "root", "root","administratori");
		//Define $user and $pass
		$user=mysqli_real_escape_string($lidhja,test_input($_POST['user']));//Security function of PHP
		$pass=mysqli_real_escape_string($lidhja,test_input($_POST['pass']));//Security function of PHP
		$_SESSION['user']=$user;
		//Selecting Database
		$db = mysqli_select_db($lidhja,"administratori");
		//sql query to fetch information of registerd user and finds user match.
		$query = mysqli_query($lidhja, "SELECT * FROM admini WHERE password='$pass' AND username='$user'");
		$rows = mysqli_num_rows($query);
		if($rows == 1){
			echo '<script>window.location.href = "admin.php";</script>'; // Redirecting to other page
		}else{
			$error = "Username of Password is Invalid";
		}
	mysqli_close($lidhja); // Closing connection
	}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
</body>
</html>