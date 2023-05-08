<?php

require "config.php";

use App\pets;

$pets = pets::list();

?>

<h1>Pets</h1>

<table border="1" cellpadding="5">
<?php foreach ($pets as $pets): ?>
<tr>
<td><?php echo $pets->getId(); ?></td>
<td><?php echo $pets->getName(); ?></td>
<td><?php echo $pets->getGender(); ?></td>
<td><?php echo $pets->getBirthdate(); ?></td>
<td><?php echo $pets->getOwner(); ?></td>
<td><?php echo $pets->getEmail(); ?></td>
<td><?php echo $pets->getContactNumber(); ?></td>
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