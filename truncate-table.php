<?php

require "config.php";

use App\pets;

try {
	pets::clearTable();
	
	echo "<div>
			<a href=\"register.php\">REGISTER PET</a>
		  </div>";
	
} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

