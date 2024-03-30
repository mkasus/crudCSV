<html>
<head>
	<title>Dodaj kontakt</title>
</head>

<body>
	<h2>Dodaj kontakt</h2>
	<p>
		<a href="index.php">Home</a>
	</p>

	<form action="addAction.php" method="post" name="add" enctype="multipart/form-data">
		<table width="25%" border="0">
			<tr>
				<td>Imię</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Nazwisko</td>
				<td><input type="text" name="lastName"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Tel</td>
				<td><input type="text" name="tel"></td>
			</tr>
			<tr>
			<td>
				<label for="myfile"> Wybierz plik:</label></td>
				<input type="file" name="file"></td>
			<td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Dodaj"></td>
			</tr>
		</table>
	</form>
</body>
</html>
