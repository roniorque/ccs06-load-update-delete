<?php

require "config.php";

use App\pets;

$pets = pets::list();

?>

<h1>Pets</h1>

<table border="1" cellpadding="5">
<tr>
	<th>ID</th>
	<th>PET NAME</th>
	<th>PET GENDER</th>
	<th>PET BIRTHDATE</th>
	<th>PET OWNER</th>
	<th>EMAIL ADDRESS</th>
	<th>HOME ADDRESS</th>
	<th>CONTACT NUMBER</th>
	<th colspan= "4"> EDIT INFO</th>
</tr>
<?php foreach ($pets as $pets): ?>
<tr>
<td><?php echo $pets->getId(); ?></td>
<td><?php echo $pets->getName(); ?></td>
<td><?php echo $pets->getGender(); ?></td>
<td><?php echo $pets->getBirthdate(); ?></td>
<td><?php echo $pets->getOwner(); ?></td>
<td><?php echo $pets->getEmail(); ?></td>
<td><?php echo $pets->getAddress(); ?></td>
<td><?php echo $pets->getContactNumber(); ?></td>
<td>
	<a href="register.php">REGISTER PET</a>
</td>
<td>
	<a href="edit-pets.php?id=<?php echo $pets->getId(); ?>">EDIT</a>
</td>
<td>
	<a href="delete-pets.php?id=<?php echo $pets->getId(); ?>">DELETE</a>
</td>
<td>
	<a href="truncate-table.php?id=<?php echo $pets->getId(); ?>">TRUNCATE TABLE</a>
</td>
</tr>
<?php endforeach ?>
</table>
	