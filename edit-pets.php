<?php

require "config.php";

use App\pets;

$pet_id = $_GET['id'];

$pet = pets::getById($pet_id);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Pet</title>
</head>
<body>
<h1>Edit Pet</h1>

<form action="save-changes.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $pet->getId(); ?>">
	<div>
		<label>Pet Name:</br></label>
		<input type="text" name="name" placeholder="Pet Name" value="<?php echo $pet->getName();?>" />	
	</div>
	<div>
		<label>Pet Gender:</br></label>
		<input type="text" name="gender" placeholder="Pet Gender" value="<?php echo $pet->getGender();?>" />	
	</div>
	<div>
		<label>Pet Birthdate:</br></label>
		<input type="text" name="birthdate" placeholder="Pet Birthdate" value="<?php echo $pet->getBirthdate();?>" />	
	</div>
	<div>
		<label>Pet Owner:</br></label>
		<input type="text" name="owner" placeholder="Pet Owner" value="<?php echo $pet->getOwner();?>" />	
	</div>
	<div>
		<label>Email Address:</br></label>
		<input type="email" name="email" placeholder="email@address.com" value="<?php echo $pet->getEmail();?>" />	
	</div>
	<div>
		<label>Contact Number:</br></label>
		<input type="text" name="contact_number" placeholder="Contact Number" value="<?php echo $pet->getContactNumber();?>" />	
	</div>
	<div>
		<button>
			Save
		</button>
		<a href="index.php">Cancel</a>
	</div>
</form>
</body>
</html>