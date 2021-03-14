<?php

	$host='sql212.epizy.com';
	$user='epiz_27795194';
	$pass='CQ5tIC6iM8TImzx';
	$dbname='epiz_27795194_photolio';


	$conn = mysqli_connect($host, $user,$pass ,$dbname);

	if($conn->connect_error){

		die("connection failed:". $conn->connect_error);

	}

?>
