<?php

require_once("contact.php");

if (isset($_POST['update'])) {
	$id=htmlspecialchars( $_POST['id'], ENT_QUOTES, 'UTF-8');
	$contact = findContact($id);	
	$contact->name = htmlspecialchars( $_POST['name'], ENT_QUOTES, 'UTF-8');
	$contact->lastName = htmlspecialchars($_POST['lastName'], ENT_QUOTES, 'UTF-8');
	$contact->email = htmlspecialchars( $_POST['email'], ENT_QUOTES, 'UTF-8');
	$contact->tel = htmlspecialchars( $_POST['tel'], ENT_QUOTES, 'UTF-8');
	$f = $_FILES['file']['name'];//htmlspecialchars( $_POST['file'], ENT_QUOTES, 'UTF-8');
	if ( $f ) {
		$contact->file = $_FILES['file']['name'];
	}	

	updateContact($contact);
	$target_path =  realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR;		
	$target_path = $target_path.basename( $_FILES['file']['name']);
	if (file_exists($_FILES['file']['tmp_name'])) {		
		if(!move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
			echo "Plik nie został załadowany";
		} 
	}			
		header("Location:index.php");
	}

