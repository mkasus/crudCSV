<?php

require_once("contact.php");

$id = $_GET['id'];

$contact=findContact($id);
updateContact($contact);

?>
<html>
<head>	
	<title>Edycja</title>
</head>

<body>
    <h2>Edycja</h2>
    <p>
	    <a href="index.php">Strona główna</a>
    </p>
	
	<form name="edit" method="post" action="editAction.php">
		<table border="0">
			<tr> 
				<td>Imię</td>
				<td><input type="text" name="name" value="<?php echo $contact->name; ?>"></td>
			</tr>
			<tr> 
				<td>Nazwisko</td>
				<td><input type="text" name="lastName" value="<?php echo $contact->lastName; ?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $contact->email; ?>"></td>
			</tr>
			<tr> 
				<td>Tel</td>
				<td><input type="text" name="tel" value="<?php echo $contact->tel; ?>"></td>
			</tr>
			<tr> 								
				<td><label for="myfile"> Wybierz plik:</label></td>
				<td>	<input type="file" id="myfile" name="file"></td>
			</tr>						
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $contact->id; ?>></td>
				<td><input type="submit" name="update" value="Zapisz"></td>
			</tr>
		</table>
	</form>
</body>
</html>
