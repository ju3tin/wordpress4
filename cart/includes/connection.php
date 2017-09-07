<?php

	$server="localhost";
	$user="root";
	$pass="";
	$db="tutorials";
	
	// connect to mysql
	
	$dude=mysqli_connect($server, $user, $pass) or die("Sorry, can't connect to the mysql.");
	
	// select the db
	
	mysqli_select_db($dude,$db) or die("Sorry, can't select the database.");

?>