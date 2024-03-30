<?php
const CSV_FILE = 'adressBook.csv';
const CID=0;
const CNAME=1;
const CLASTNAME=2;
const CEMAIL=3;
const CTEL=4;
const CFILE=5;

class Contact {
    public $id;
    public $name;
    public $lastName;
    public $email;
    public $tel;
    public $file;
}
function lastID(){
    $last=0;
    $content= file(CSV_FILE);
    foreach ($content as $line) {
        $row = str_getcsv($line);
        $last = $row[CID];
    }    
    return $last;
}
function findContact($id) {
    $content= file(CSV_FILE);
    foreach ($content as $line) {
        $row= str_getcsv($line);
        if ($id == $row[0]) {
            $contact = new Contact();
            $contact->id=$row[CID];
            $contact->name=$row[CNAME];
            $contact->lastName=$row[CLASTNAME];
            $contact->email=$row[CEMAIL];
            $contact->tel=$row[CTEL];
            $contact->file=$row[CFILE];
            return $contact;
        }
    }
}
function addContact(Contact $contact) {
    $row=array();
    $row[]=$contact->id;
    $row[]=$contact->name;
    $row[]=$contact->lastName;
    $row[]=$contact->email;
    $row[]=$contact->tel;
    $row[]=$contact->file;
    $fp = fopen(CSV_FILE, 'a');
    if(! $fp){        
        printf('Nie udało się otworzyć pliku %s.', CSV_FILE);       
        exit;
  }    
    fputcsv($fp, $row);
    fclose($fp);
}
function updateContact(Contact $contact){
    $content= file(CSV_FILE);
    foreach ($content as $line) {
        $row=str_getcsv($line);
        if ($contact->id == $row[CID] ) {
            $row[CNAME]=$contact->name;
            $row[CLASTNAME]=$contact->lastName;
            $row[CEMAIL]=$contact->email;
            $row[CTEL]=$contact->tel;
            $row[CFILE]=$contact->file;
        }
        $lines[] = $row;
    }
    $fp = fopen(CSV_FILE, 'w');
    if(! $fp){        
      printf('Nie udało się otworzyć pliku %s. Prosimy spróbować później', CSV_FILE);       
      exit;
    }
    if ($fp) {
    foreach ($lines as $row) {
        fputcsv($fp, $row);
    }
        fclose($fp);
    }
}

function deleteContact(Contact $contact){
    $content= file(CSV_FILE);
    foreach ($content as $line) {
        $row=str_getcsv($line);
        if ($contact->id != $row[CID] ) {
            $lines[] = $row;
        }
    }      
    $fp = fopen(CSV_FILE, 'w');
    foreach ($lines as $row) {
        fputcsv($fp, $row);
    }
    fclose($fp);
    $f= $contact->file;
    if ($f != '') {
        if (!unlink($f)) {
          echo "Błąd usuwania pliku:" . $f;
        }
    }
}

?>
