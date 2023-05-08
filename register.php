<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pet Registration</title>
</head>
<form action="save_register.php" method="POST" >
	<div>
		<label>Pet Name: </br></label>
		<input type="text" name="name" required/>	
	</div>
	<div>
		<label>Pet Gender:</br></label>
        <input type="radio" name="gender" value="Male" >Male
        <input type="radio" name="gender" value="Female">Female
	</div>
	<div>
		<label>Birthdate: </br></label>
		<input type="date" name="birthdate" />	
	</div>
	<div>
		<label>Pet Owner : </br></label>
        <input type="text" name="owner" required/>	
	</div>
    <div>
		<label>Email: </br></label>
		<input type="email" name="email" />	
	</div>
	<div>
		<label>Address: </br></label>
		<input type="text" name="address" />	
	</div>
	<div>
		<label>Contact Number: </br></label>
		<input type="tel" name="contact_number" />	
	</div>
	
	<input type="submit" value="Submit">
</form>

</html>

