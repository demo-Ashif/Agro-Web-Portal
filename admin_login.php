<!DOCTYPE html>
<html xmlns:xlink="http://www.w3.org/1999/xlink" xml:lang="en">
  <head>
    <meta charset="utf-8">

    <title>Admin Login</title>
    

  </head>
  <body>
  			

<?php

	header('Content-type: text/html; charset=utf-8');
    include("connect.php");

    session_start();

	if (isset($_POST['submit']))
  	{
  		$username = mysql_real_escape_string($_POST['username']);
  		$password = mysql_real_escape_string($_POST['password']);
  	}

	$sql=$con->query("select * from users where username = '$username' and password = '$password'");
	$row = $sql->fetch_array();

	if ($row['username'] == $username) {
    $_SESSION['user'] = $row['username'];
  }
  else {
    $_SESSION['wrong'] = 'Wrong';
  }
  

	header('location:mainpage.php');
?>


  </body>
  </html>