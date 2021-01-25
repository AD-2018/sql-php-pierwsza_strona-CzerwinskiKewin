<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width">
  <title>Prosty Formularz</title>
</head>
<body>
	
<div class="diw">
    <a class="link" href="https://github.com/AD-2018/sql-php-pierwsza_strona-CzerwinskiKewin">Github</a>
    <a class="link" href="pracownicyOrganizacja.php">Pracownicy i Organizacja</a>
    <a class="link" href="funkcjeAgregujace.php">Funkcje Agregujące</a>
    <a class="link" href="dataCzas.php">Data i Czas</a>
    <a class="link" href="formularz.html">Formularz</a>
    <a class="link" href="index.php">Strona Główna</a>
</div>
	
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
echo("<br>");
echo("<h3>Tabela pracowników</h3>");
$sql = "SELECT * FROM pracownicy";
$wynik = mysqli_query($conn, $sql);

    echo ("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>ID</th><th>Imię</th><th>Dział</th><th>Zarobki</th><th>Data urodzenia</th><th>Usuwanie pracowników</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['id_pracownicy'].'</td>'.'<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['dzial'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>'.'<td>'.$wiersz['data_urodzenia'].'</td>'.
	     
	     '<td>
	    
	     <form action="delete.php" method="POST">
  		<input type="text" name="id" value="'.$wiersz['id_pracownicy'].'" hidden>
   		<input type="submit" value="Usuń pracownika">
	     </form>
	     
	     </td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
?>

</body>
</html>
