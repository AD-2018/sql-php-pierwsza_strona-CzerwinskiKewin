<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/style.css">
  <meta name="viewport" content="width=device-width">
  <title>Prosty Formularz</title>
</head>
<body>

<div class="strona">

<div class="tytul">
    <br>
    <a class="link" href="https://github.com/AD-2018/sql-php-pierwsza_strona-CzerwinskiKewin">Github</a>
    <h1>Kewin Czerwiński</h1>
    <hr/>
    <h1>Dane do Bazy</h1>
</div>

<?php

include_once("../menu.php");

require_once("../connect.php");

echo('<div class="zawartosc">');

    echo("<h3>Dodawanie pracownika</h3>");
    echo("<form action="/insert.php" method="POST">");
    echo("<label>Imię </label><input type="text" name="imie"></br>");
    echo("<label>Dział </label><input type="number" name="dzial"></br>");
    echo("<label>Zarobki </label><input type="number" name="zarobki"></br>");
    echo("<label>Data urodzenia </label><input type="date" name="data_urodzenia"></br>");
    echo("<input type="submit" value="Dodaj pracownika">");
    echo("</form>");

    echo("<br>");

    echo("<h3>Usuwanie pracownika</h3>");
    echo("<form action="/pracownicy/delete.php" method="POST">");
    echo("<label>ID pracownika </label><input type="number" name="id"></br>");
    echo("<input type="submit" value="Usuń pracownika">");
    echo("</form>");

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
echo('</div>');
?>

</div>

</body>
</html>
