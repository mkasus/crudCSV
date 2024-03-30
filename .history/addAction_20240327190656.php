<html>
<head>
	<title>Dodaj kontakt</title>
</head>

<body>
<?php

require_once("contact.php");

if (isset($_POST['submit'])) {
	$contact=new Contact();
	$contact->id = lastID() + 1;
	$contact->name = htmlspecialchars( $_POST['name'], ENT_QUOTES, 'UTF-8');
	$contact->lastName = htmlspecialchars( $_POST['lastName'], ENT_QUOTES, 'UTF-8');
	$contact->email = htmlspecialchars( $_POST['email'], ENT_QUOTES, 'UTF-8');
	$contact->tel = htmlspecialchars( $_POST['tel'], ENT_QUOTES, 'UTF-8');
	$contact->file =  $_FILES['file']['name'];//htmlspecialchars( $_POST['file'], ENT_QUOTES, 'UTF-8');
	$target_path = "/var/www/html/adressBook/";
	$target_path = $target_path.basename( $_FILES['file']['name']);

	if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {
		echo "File uploaded successfully!";
	} else{
		echo "Sorry, file not uploaded, please try again!";
	}

	// Check for empty fields
	if (empty($contact->name) || empty($contact->lastName) || empty($contact->email)) {
		if (empty($contact->name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if (empty($contact->lastName)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}

		if (empty($contact->email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
	} else {
		addContact($contact);
		header("Location:index.php");
	}
}
?>
</body>
</html>
