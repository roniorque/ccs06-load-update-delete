<?php

require "config.php";

use App\pets;

// Save the Student information, and automatically redirect to index

try {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$birthdate = $_POST['birthdate'];
	$owner = $_POST['owner'];
	$email = $_POST['email'];
	$contact_number = $_POST['contact_number'];
	$result = pets::update($id, $name, $gender, $birthdate, $owner, $email, $contact_number);

	if ($result) {
		header('Location: index.php');
	}

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

