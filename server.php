<?php

session_start();
error_reporting(0);
if (isset($_POST['passwordLength']) && isset($_POST['passwordNumber']) && isset($_POST['alphabet'])) { 
	$pwLength = $_POST['passwordLength'];
	$pwNumber = $_POST['passwordNumber'];
	$alphabet = $_POST['alphabet'];

	$upperBound = strlen($alphabet);

	$returnArray['pwLength'] = $pwLength;
	$returnArray['pwNumber'] = $pwNumber;
	
	for ($x = 0; $x <= $pwNumber; $x++){
		$returnArray[$x] = $alphabet[rand(0, $upperBound)];
		for ($y = 1; $y < $pwLength; $y++){
			$randomNumber = rand(0, $upperBound);
			$returnArray[$x] = $returnArray[$x] . $alphabet[$randomNumber];
		}
	}

	$returnArray = json_encode($returnArray);
	echo $returnArray;
}
