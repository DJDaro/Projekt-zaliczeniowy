<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Informacja o formularzu</title>
</head>
<body id="body">
<?php 
$polacz = mysqli_connect("localhost", "s13810", "stdDG12345", "s13810") or die("Brak połączenia");
if ((empty($_POST['typ'])) || (empty($_POST['imie'])) || (empty($_POST['miejscowosc'])) || (empty($_POST['ulica'])) || (empty($_POST['nrdomu'])) || (empty($_POST['kod'])) || (empty($_POST['email'])) || (empty($_POST['tel'])) || (empty($_POST['opis']))){
  echo("<div id='komunikat'><p id='komkom'>Wypełnij puste pola!</p><a href='index.php'><div id='przyckom'>Zrozumiano</div></a></div>");

}else{
   $tp = $_POST['typ'];
   $im = $_POST['imie'];
   $miejs = $_POST['miejscowosc'];
   $ul = $_POST['ulica'];
   $nrd = $_POST['nrdomu'];
   $kd = $_POST['kod'];
   $ema = $_POST['email'];
   $tl = $_POST['tel'];
   $opi = $_POST['opis'];

   
   echo("<div id='formgz4'><div id='ffff'><span id='forr4'>Formularz zgłoszeniowy został przesłany! Przygotuj urządzenie do odbioru przez kuriera. Czas oczekiwania na kuriera to 3 dni robocze.</span></div>");
   echo("<p id='forr5'>Pozdrawiamy!</p>");
   echo("<p id='forr6'>Horniczak & Gał</p>");

   echo("<a href='index.php' target='_self'><div id='przycpow'><p id='cnp'>Powrót</p></div>");

$zapytanie = "INSERT INTO zgloszenia (typurz, imienaz, miejsc, ulica, nrdomu, kodpocz, email, tel, opis) VALUES('$tp', '$im', '$miejs', '$ul', '$nrd', '$kd', '$ema', '$tl', '$opi')";
mysqli_query($polacz, $zapytanie) or die("Błąd wykonywania zapytania");
mysqli_close($polacz);
}
?>

</body>
</html>





