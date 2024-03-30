<?php
// Include the database connection file
require_once("contact.php");
echo realpath(dirname(__FILE__));

// Fetch data in descending order (lastest entry first)
//$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");


?>

<html>
<head>
	<title>Książka adresowa</title>
</head>

<body>
	<h2>Książka adresowa</h2>
	<p>
		<a href="add.php">Dodaj kontakt</a>
	</p>
	<table width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
			<td><strong>Imię</strong></td>
			<td><strong>Nazwisko</strong></td>
			<td><strong>Email</strong></td>
			<td><strong>Telefon</strong></td>
			<td><strong>Plik</strong></td>
			<td><strong></strong></td>
		</tr>
		<?php
		$content= file(CSV_FILE);
		foreach ($content as $line) {
			$row= str_getcsv($line);
			echo "<tr>";
			echo "<td>".$row[CNAME]."</td>";
			echo "<td>".$row[CLASTNAME]."</td>";
			echo "<td>".$row[CEMAIL]."</td>";
			echo "<td>".$row[CTEL]."</td>";
			echo "<td>".$row[CFILE]."</td>";
			echo "<td><a href=\"edit.php?id=$row[0]\">Edycja</a> |
			<a href=\"delete.php?id=$row[0]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}
		?>
	</table>
</body>
</html>
