<?php

require "config.php";

use App\pets;

try {
	pets::register('Andrei', 'Male', '2008-7-04', 'Ronio', 'roniojericsdao@gmail.com', 'CSFP', '09129983674');
	echo "<li>Added 1 pet";

	$pets = [
	
	];
	pets::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

