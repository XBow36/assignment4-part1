<?php
	$json = file_get_contents($_POST[jsonSource]);
	$obj = json_decode($json);
	$result = "Type: POST, parameters: ";
	if($obj.count == 0) {
		$result = "Type: POST, parameters: null";
	}
	else {
		foreach($obj[key] as theKey){
			if(theKey == null) {
				$result .= ", " .theKey. " : UNDEFINED";
			}
			else {
				$result .= ", " .theKey. " : " .$obj['key']; 
			}
		}
	}
?>


<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Assignment 4 POST</title>
	</head>
	
	<body>
		<p>Input Your Json Source URL</p> <br />
		<form id="postJson" action="loopbackPOST.php" method="post" enctype="multipart/form-data">
			Json Source URL: <input type="text" name="jsonSource" /> <br />
			<input type="submit" value="Submit" name="Jsubmit"/>
		</form>
		<p><?php echo $result; ?></p>
	</body>
	
</html>