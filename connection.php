<?php 
	$servername = "localhost";
	$username  = "root";
	$password = "";
	$conx = "test";

	$conx=mysqli_connect("localhost","root","","test");

	if (!$conx) {
		die("Connection Failed". mysqli_connect_error());
	}
 ?>