<?php
session_start();

if($_POST['username']) {
	$visitCounter = 0;
	$usrName = strip_tags($_POST["username"]);
	$usrPass = strip_tags($_POST["password"]);
	$usrId = "12345";
	$visitCount = 0;
	
	if(usrName != null && usrName != "") {
		// setting session
		$_SESSION['username'] = $usrName;
		$_SESSION['id'] = $usrId;	
		$_SESSION['counter'] = $visitCount;
		// direct user to correct page
		header("Location: content1.php");
	}
	else {
		header("Location: content1.php");
	}
}

?>


<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Assignment 4 Login</title>
	<style type="text/css">
		h1 {
			text-align: center;
		}
		#onlyBody {
			position: absolute;
			width: 100%;
			top: 30%;
			margin-top: -50px;
		}
		#loginForm {
			margin: auto;
			width: 200px;
			height: 100px;
		}
	</style>
	</head>
	
	<body>
	<div id = "onlyBody">
		<h1>Welcome to See-Kool</h1>
		<form id="loginForm" action="login.php" method="post" enctype="multipart/form-data">
			Username: <input type="text" name="username" /> <br />
			Password: <input type="password" name="password" /> <br />
			<input type="submit" value="Login" name="uLogIn" />
		</form>
	</body>
	
</html>