<?php
session_start();

// check to see if we are in session	
if(isset($_SESSION['id'])) {
	$uId = $_SESSION['id'];
	$uName = $_SESSION['username'];
	$result = $uName. "!! Shhh... This is the secret page you have stumbled upon! Don't tell anyone...<br/><br/> Click <a href=\"content1.php\">here</a> to go back";
}
else {
	$result = "You can't see this super duper secret page if you are not logged in. Click <a href=\"login.php\">here</a> to log in.";
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