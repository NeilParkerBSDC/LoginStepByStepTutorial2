<?php

session_start();


$password=$_POST["password"];
$user=$_POST["user"];


if ($password=="Password1") {
	header( 'Location: ServerSide2.php' ) ;
	$_SESSION["verified"] = "Yes";
    }
else {
	header( 'Location: ServerSide1.php' ) ;	
	$_SESSION["verified"] = "No";
	}


?>
