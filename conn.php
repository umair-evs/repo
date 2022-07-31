<?php
	$conn = new mysqli("db", "root", "root", "webtask");
	
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
?>