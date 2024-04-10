<?php 
session_start();
 
require ('config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM `user` WHERE username = '$email' AND password = '$password'";
$result_query = mysqli_query($con, $query);
$row = mysqli_fetch_array($result_query);
$count_query = mysqli_num_rows($result_query);

if ($count_query != 0) 
	{

	$sessionemail = $row['email'];
	$_SESSION['login_user']= $sessionemail;
    header("Location: ops/insert.php");
	exit();
	} 
else {
		    echo '<script>alert("Incorrect Credentials Entered"); location.replace(document.referrer);</script>';
	}
?>