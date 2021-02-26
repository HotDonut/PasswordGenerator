<?php

session_start();

if (isset($_POST['IpasswordLength']) && isset($_POST['IpasswordNumber']) && isset($_POST['IalphabetUsed'])) { 
	$pwLength = $_POST['IpasswordLength'];
	$pwNumber = $_POST['IpasswordNumber'];
	$alphabet = $_POST['IalphabetUsed'];

	echo 'true';
	echo $_POST['IpasswordLength'];
}
