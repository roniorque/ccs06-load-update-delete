<?php

require "config.php";

use App\pets;

// Save the Student information, and automatically redirect to index

try {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$owner = $_POST['owner'];
	$email = $_POST['email'];
	$result = pets::update($id, $name, $owner, $email);

	if ($result) {
		header('Location: index.php');
	}

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

