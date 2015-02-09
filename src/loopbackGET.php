<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Assignment 4 GET</title>
	</head>
	
	<body>
		<form id="getJson" action="loopbackGET.php" method="GET" enctype="multipart/form-data">
			Input Your Json Source URL <br/>
			Json Source URL: <input type="text" name="jsonSource" /> <br/>
			<input type="submit" value="Submit" name="Jsubmit"/>
		</form>
		<p><?php echo $result; ?></p>
	</body>
	
</html>

<?php

function jsonGet($jsource) {
	$json = file_get_contents($jsource);
	$obj = json_decode($json);
	$result = "Type: GET, parameters: ";
	if($obj.count == 0) {
		$result = "Type: GET, parameters: null";
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
}
	
?>

