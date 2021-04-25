<?php
if(isset($_post['submit'])) {
$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['username'];
	$password = $_POST['password'];


	$array_data =[
		'first_name' => $first_name,
		'last_name' => $last_name,
		'email' => $username,
		'password' => $password,


	];

	echo $first_name . $last_name . $dob . $email; . $password; exit;