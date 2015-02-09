<?php
session_start();
session_destroy();
if(isset($_SESSION['username'])) {
	$msg = "You are now logged out";
}
else {
	$msg = "<h1>I can't log you out when you are not logged in :D</h1>";
}
?>

<!DOCTYPE="html">
<html>
	<body>
	<?php echo $msg; ?><br />
		<p>Click <a href="login.php">here</a> to Log in</p>
	</body>
</html>