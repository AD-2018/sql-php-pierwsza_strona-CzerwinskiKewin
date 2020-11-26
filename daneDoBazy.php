<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width">
  <title>Prosty Formularz</title>
</head>
<body>
	
<h3>Dodawanie pracownika</h3>
<form action="insert.php" method="POST">
	<label>Imię </label><input type="text" name="imie"></br>
	<label>Dział </label><input type="number" name="dzial"></br>
	<label>Zarobki </label><input type="number" name="zarobki"></br>
	<label>Data urodzenia </label><input type="date" name="data_urodzenia"></br>
	<input type="submit" value="Dodaj pracownika">
</form>

<br>

<h3>Usuwanie pracownika</h3>
<form action="delete.php" method="POST">
   <label>ID pracownika </label><input type="number" name="id"></br>
   <input type="submit" value="Usuń pracownika">
</form>

<?php
require_once("connect.php");

$sql = "SELECT * FROM pracownicy";
$wynik = mysqli_query($conn, $sql);

    echo ("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>ID</th><th>Imię</th><th>Dział</th><th>Zarobki</th><th>Data urodzenia</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['id_pracownicy'].'</td>'.'<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['dzial'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>'.'<td>'.$wiersz['data_urodzenia'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
?>

</body>
</html>
