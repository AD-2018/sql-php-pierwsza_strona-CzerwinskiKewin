<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="strona">
    
<?php

echo('<div class="tytul">');
    echo("<h1>Kewin Czerwiński</h1>");
    echo("<hr/>");
    echo("<h1>Pracownicy</h1>");
echo('</div>');
    
echo('<div class="linki">'); 
    echo('<div class="diw">');
        echo('<a class="link" href="https://github.com/AD-2018/sql-php-pierwsza_strona-CzerwinskiKewin">Github</a><br><br>');
        echo('<a class="link" href="pracownicyOrganizacja.php">Pracownicy i Organizacja</a><br><br>');
        echo("<br>");
        echo("<br>");
        echo("<br>");
        echo('<a class="link" href="funkcjeAgregujace.php">Funkcje Agregujące</a><br><br>');
        echo('<a class="link" href="dataCzas.php">Data i Czas</a><br><br>');
        echo('<a class="link" href="formularz.html">Formularz</a>');
        echo('<a class="link" href="daneDoBazy.php">Dane do Bazy</a>');
        echo('<a class="link" href="biblioteka.php">Biblioteka</a>');
    echo('</div>');
echo('</div>');
      
require_once("connect.php");
    
echo('<div class="zawartosc">');
$sql = "SELECT * FROM pracownicy where dzial=2";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie 1");
    echo ("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Imię</th><th>Dział</th><th>Zarobki</th><th>Data urodzenia</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['dzial'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>'.'<td>'.$wiersz['data_urodzenia'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
    
require_once("connect.php");

$sql = "SELECT * FROM pracownicy where (dzial=2 or dzial=3)";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie 2");
    echo ("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Imię</th><th>Dział</th><th>Zarobki</th><th>Data urodzenia</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['dzial'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>'.'<td>'.$wiersz['data_urodzenia'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
    
require_once("connect.php");

$sql = "SELECT * FROM pracownicy where zarobki<30";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie 3");
    echo ("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Imię</th><th>Dział</th><th>Zarobki</th><th>Data urodzenia</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['dzial'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>'.'<td>'.$wiersz['data_urodzenia'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
    
echo('</div>');
?>
    
</div> 
    
</body>
</html>
