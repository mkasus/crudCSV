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
	$contact->file = htmlspecialchars( $_POST['file'], ENT_QUOTES, 'UTF-8');

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

		// Show link to the previous page
	//	echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {
		addContact($contact);


		header("Location:index.php");
	}
}
?>
</body>
</html>
