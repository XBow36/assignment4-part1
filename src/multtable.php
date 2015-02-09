<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Assignment 4 timesTable</title>
	</head>
	
	<body>
		<p><?php echo $result ?></p>
	</body>
</html>


<?php
	$missingList = array();
	$missing = false;
	$result = "";
	$minAnd = $_GET["min-multiplicand"];
	$maxAnd = $_GET["max-multiplicand"];
	$minEr = $_GET["min-multiplier"];
	$maxER = $_GET["max-multiplier"];
	//check for missing parameters
	if($_GET["min-multiplicand"] == null || $_GET["min-multiplicand"] == ""){
		array_push($missing, "min-multiplicand");
		$missing = true;
	}
	if($_GET["max-multiplicand"] == null || $_GET["max-multiplicand"] == ""){
		array_push($missing, "max-multiplicand");
		$missing = true;
	}
	if($_GET["min-multiplier"] == null || $_GET["min-multiplier"] == ""){
		array_push($missing, "min-multiplier");
		$missing = true;
	}
	if($_GET["max-multiplier"] == null || $_GET["max-multiplier"] == ""){
		array_push($missing, "max-multiplier");
		$missing = true;	
	}
	//if there are mising parameters, we have to display whats missing
	if($missing == true) {
		for($x = 0; $x < count($missing); $x++) {
			$result .= "Missing parameter " .$missing[x]. "\r\n";
		}
	}
	else if($missing == false) {
		//make sure they are all integers
		if(is_int($_GET["min-multiplicand"]) == false) {
			$result .= "\r\n min-multiplicand must be an integer";
		}
		if(is_int($_GET["max-multiplicand"]) == false) {
			$result .= "\r\n max-multiplicand must be an integer";
		}
		if(is_int($_GET["min-multiplier"]) == false) {
			$result .= "\r\n min-multiplier must be an integer";			
		}
		if(is_int($_GET["max-multiplier"]) == false) {
			$result .= "\r\n max-multiplier must be an integer";
		}
		//make sure the min is smaller than max
		if($minAnd >= $maxAnd) {
			$result .= "\r\n Minimum multiplicand is larger than maximum.";
		}
		if($minEr >= $maxER) {
			$result .= "\r\n Minimum multiplier is larger than maximum.";
		}
		//if we actually made it through without any error
		if($result == "") {
			$tall = $_GET["max-multiplicand"] - $_GET["min-multiplicand"];
			$tall += 2;
			$wide = $_GET["max-multiplier"] - $_GET["min-multiplier"];
			$wide += 3;
			//making the table
			for(int $i = 0; $i < $tall; $i++) {
				//add row
				$result .= "<tr>".PHP_EOL;
				//add data
				foreach(int $k = 0; $k < $wide; $k++) {
					//first row
					if($i == 0) {
						if($k == 0) {
							$result .= "<td>""</td>".PHP_EOL;
						}
						else if ($k != 0) {
							$result .= "<td>"$minEr"</td>".PHP_EOL;
						}
					}
					//next rows
					else if($1 != 0) {
						//first column
						if($k == 0) {
							$result .= "<td>"$minAnd"</td>".PHP_EOL;
						}
						//rest of the columns
						else if($k != 0) {
							$result .= "<td>"$minAnd * $minEr"</td>".PHP_EOL;
						}
					}
				//increase every but needs to be reset at evey new row
				$minEr++;
				}
				//finished current row
				$result .= "</tr>".PHP_EOL;
				$minEr = $_GET["min-multiplier"];
				$minAnd++;
			}
		}
	}
?>