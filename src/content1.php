<?php
session_start();

// check to see if we are in session	
if(isset($_SESSION['id'])) {
	$uId = $_SESSION['id'];
	$uName = $_SESSION['username'];
	$_SESSION['counter'] += 1;
	$theCount = $_SESSION['counter'] - 1;
	$result = "Hello " .$uName. " you have visited this page " .$theCount. " times before.<br/></br/>Click <a href=\"content2.php\">here</a> for something special :D<br/><br/>Click <a href=\"logout.php\">here</a> to log out";
}
else {
	$result = "A username must be entered. Click <a href=\"login.php\">here</a> to return to the login screen.";
}
?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>content1</title>
	</head>
	
	<body>
		<?php
		echo $result;
		?>
	</body>
	
</html>