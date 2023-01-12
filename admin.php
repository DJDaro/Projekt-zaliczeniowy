<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style1.css">
	<title>Zamówienia</title>
</head>
<body>

<div id="logowanie" >
Login:<input type="text" name="log" id="lgg"><br><br>
Hasło:<input type="password" name="pass" id="passs"><br><br>
<input type="submit" value="zaloguj" id="przycisk" onclick="logowanie1();">
</div>
<script src="script1.js"></script>



<?php
$polaczenie = mysqli_connect("localhost", "s13810", "stdDG12345", "s13810") or die("Błąd połączenia z bazą");
$zapytanie = "SELECT * FROM zgloszenia";
$wynik = mysqli_query($polaczenie, $zapytanie) or die("Błąd wykonywania zapytania");

echo("<div id='tabela'>");
echo("<table border='2'>");
echo("<tr>
<td>Nr</td><td>Typ urządzenia</td><td>Imię i nazwisko</td><td>Miejscowość</td><td>Ulica</td><td>Numer domu</td><td>Kod pocztowy</td><td>e-mail</td><td>Telefon</td><td>Opis</td>
</tr>");
while($wiersz = mysqli_fetch_row($wynik)){
	echo("<tr>");
	for($i = 0;  $i < count($wiersz); $i++){
		echo("<td>");
		echo($wiersz[$i]." ");
		echo("</td>");
	}
	echo("<br>");
	echo("</tr>");
}
echo("</table>");
echo("</div>");
mysqli_close($polaczenie);
?>

</body>
</html>

