<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="diw">
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-CzerwinskiKewin">Github</a>
    <a href="pracownicyOrganizacja.php">Pracownicy i Organizacja</a>
    <a href="index.php">Strona Główna</a>
</div>

<?php
  
require_once("connect.php");
    
$sql = "SELECT sum(zarobki) FROM pracownicy,organizacja where id_org=dzial";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie 1");
    echo('<table border="1">');
    echo('<th>Suma zarobków</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['sum(zarobki)'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
   
    
$sql = "SELECT sum(zarobki) FROM pracownicy,organizacja where id_org=dzial and imie like '%a'";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie 1");
    echo('<table border="1">');
    echo('<th>Suma zarobków</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['sum(zarobki)'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");


$sql = "SELECT sum(zarobki) FROM pracownicy,organizacja where id_org=dzial and imie not like '%a' and (dzial=2 or dzial=3)";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie 1");
    echo('<table border="1">');
    echo('<th>Suma zarobków</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['sum(zarobki)'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");


$sql = "SELECT avg(zarobki) FROM pracownicy,organizacja where id_org=dzial and imie not like '%a'";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie 1");
    echo('<table border="1">');
    echo('<th>Średnia zarobków</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['avg(zarobki)'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");


$sql = "SELECT avg(zarobki) FROM pracownicy,organizacja where id_org=dzial and dzial=4";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie 1");
    echo('<table border="1">');
    echo('<th>Średnia zarobków</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['avg(zarobki)'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");


$sql = "SELECT avg(zarobki) FROM pracownicy,organizacja where id_org=dzial and imie not like '%a' and (dzial=1 or dzial=2)";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie 1");
    echo('<table border="1">');
    echo('<th>Średnia zarobków</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['avg(zarobki)'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");


$sql = "SELECT count(imie) FROM pracownicy,organizacja where id_org=dzial";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie 1");
    echo('<table border="1">');
    echo('<th>Liczba pracowników</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['count(imie)'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");


$sql = "SELECT count(imie) FROM pracownicy,organizacja where id_org=dzial and imie like '%a' and (dzial=1 or dzial=3)";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie 1");
    echo('<table border="1">');
    echo('<th>Liczba pracowników</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['count(imie)'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");


$sql = "SELECT * FROM pracownicy,organizacja WHERE id_org=dzial and imie not like '%a' order by nazwa_dzial asc, zarobki asc"; //zarobki asc
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie sortowanie 5");
    echo('<table border="1">');
    echo('<th>Imie</th><th>nazwa_dzial</th><th>zarobki</th><th>data_urodzenia</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['nazwa_dzial'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>'.'<td>'.$wiersz['data_urodzenia'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
  
?>
  
</body>
</html>
