<?php

require_once("contact.php");

$id = $_GET['id'];

$contact=findContact($id);
if (!is_null($contact)) {
    deleteContact($contact);
    header("Location:index.php");
} else {
    echo "Brak id";
}    


