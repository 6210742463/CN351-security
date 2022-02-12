<?php 

	$db = mysqli_connect("localhost", "root", "", "cn351");

    if(!$db) {
        die("Connection Failed" . mysqli_connect_error());
    }
	
?>