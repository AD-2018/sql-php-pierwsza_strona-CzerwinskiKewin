<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/style.css">
</head>
<body>
    
<div class="diw">
    <a class="link" href="https://github.com/AD-2018/sql-php-pierwsza_strona-CzerwinskiKewin">Github</a>
    <a class="link" href="/index.php">Strona Główna</a>
    <a class="link" href="/pracownicy/funkcjeAgregujace.php">Funkcje Agregujące</a>
    <a class="link" href="/pracownicy/dataCzas.php">Data i Czas</a>
</div>
    
<?php
echo("<h1>Kewin Czerwiński</h1>");
echo("<hr/>");
echo("<h1>Pracownicy i Organizacja</h1>");

include_once("../menu.php");
    
require_once("../connect.php");
    
$sql = "SELECT imie,nazwa_dzial,zarobki,data_urodzenia FROM pracownicy,organizacja where id_org=dzial";
$wynik = mysqli_query($conn, $sql);
    
    echo("<br>");
    echo("Zadanie 1");
    echo("<br>");
    echo($sql);
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
   
    
$sql = "SELECT imie,nazwa_dzial,zarobki,data_urodzenia FROM pracownicy,organizacja where id_org=dzial and (dzial=1 or dzial=4)";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie 2");
    echo("<br>");
    echo($sql);
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


$sql = "SELECT imie,nazwa_dzial,zarobki,data_urodzenia FROM pracownicy,organizacja where id_org=dzial and imie like '%a'";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie 3");
    echo("<br>");
    echo($sql);
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


$sql = "SELECT imie,nazwa_dzial,zarobki,data_urodzenia FROM pracownicy,organizacja where id_org=dzial and imie not like '%a'";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie 4");
    echo("<br>");
    echo($sql);
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
echo("<br>");
echo("<h1>Sortowanie</h1>");


$sql = "SELECT imie,nazwa_dzial,zarobki,data_urodzenia FROM pracownicy,organizacja where id_org=dzial order by imie desc";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie sortowanie 1");
    echo("<br>");
    echo($sql);
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


$sql = "SELECT imie,nazwa_dzial,zarobki,data_urodzenia FROM pracownicy,organizacja where id_org=dzial and dzial=3 order by imie asc";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie sortowanie 2");
    echo("<br>");
    echo($sql);
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


$sql = "SELECT imie,nazwa_dzial,zarobki,data_urodzenia FROM pracownicy,organizacja where id_org=dzial and imie like '%a' order by imie asc";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie sortowanie 3");
    echo("<br>");
    echo($sql);
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


$sql = "SELECT imie,nazwa_dzial,zarobki,data_urodzenia FROM pracownicy,organizacja where id_org=dzial and imie like '%a' and (dzial=1 or dzial=3) order by zarobki asc";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie sortowanie 4");
    echo("<br>");
    echo($sql);
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


$sql = "SELECT * FROM pracownicy,organizacja WHERE id_org=dzial and imie not like '%a' order by nazwa_dzial asc, zarobki asc"; //zarobki asc
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie sortowanie 5");
    echo("<br>");
    echo($sql);
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
echo("<br>");
echo("<h1>Limit</h1>");
    
$sql = "SELECT * FROM pracownicy,organizacja WHERE id_org=dzial and dzial=4 order by zarobki desc limit 2";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie limit 1");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Imie</th><th>nazwa_dzial</th><th>zarobki</th><th>data_urodzenia</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['nazwa_dzial'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>'.'<td>'.$wiersz['data_urodzenia'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
$sql = "SELECT * FROM pracownicy,organizacja WHERE id_org=dzial and (dzial=2 or dzial=4) and imie like '%a' order by zarobki desc limit 3"; //zarobki asc
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie limit 2");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Imie</th><th>nazwa_dzial</th><th>zarobki</th><th>data_urodzenia</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['nazwa_dzial'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>'.'<td>'.$wiersz['data_urodzenia'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
$sql = "SELECT * FROM pracownicy,organizacja WHERE id_org=dzial order by data_urodzenia asc limit 1";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie limit 3");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Imie</th><th>nazwa_dzial</th><th>zarobki</th><th>data_urodzenia</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['nazwa_dzial'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>'.'<td>'.$wiersz['data_urodzenia'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    

?>

</body>
</html>
