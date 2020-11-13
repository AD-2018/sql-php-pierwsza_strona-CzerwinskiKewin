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
    
$sql = "SELECT imie,nazwa_dzial,zarobki,data_urodzenia,year(curdate())-year(data_urodzenia) FROM pracownicy,organizacja where id_org=dzial";
$wynik = mysqli_query($conn, $sql);
    
    echo("<br>");
    echo("Zadanie 1");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Imie</th><th>nazwa_dzial</th><th>zarobki</th><th>Wiek</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['nazwa_dzial'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>'.'<td>'.$wiersz['year(curdate())-year(data_urodzenia)'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
    
$sql = "SELECT imie,nazwa_dzial,zarobki,data_urodzenia,year(curdate())-year(data_urodzenia) FROM pracownicy,organizacja where id_org=dzial and nazwa_dzial='serwis'";
$wynik = mysqli_query($conn, $sql);
    
    echo("Zadanie 2");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Imie</th><th>nazwa_dzial</th><th>zarobki</th><th>Wiek</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['nazwa_dzial'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>'.'<td>'.$wiersz['year(curdate())-year(data_urodzenia)'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
    
$sql = "SELECT sum(year(curdate())-year(data_urodzenia)) FROM pracownicy,organizacja where id_org=dzial";
$wynik = mysqli_query($conn, $sql);
    
    echo("Zadanie 3");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Suma lat</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['sum(year(curdate())-year(data_urodzenia))'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
    
$sql = "SELECT sum(year(curdate())-year(data_urodzenia)) FROM pracownicy,organizacja where id_org=dzial and nazwa_dzial=handel";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie 4");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Suma lat</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['sum(year(curdate())-year(data_urodzenia))'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
    
$sql = "SELECT sum(year(curdate())-year(data_urodzenia)) FROM pracownicy,organizacja where id_org=dzial and imie like '%a'";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie 5");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Suma lat</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['sum(year(curdate())-year(data_urodzenia))'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
    
$sql = "SELECT sum(year(curdate())-year(data_urodzenia)) FROM pracownicy,organizacja where id_org=dzial and imie not like '%a'";
$wynik = mysqli_query($conn, $sql);
    
    echo("Zadanie 6");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Suma lat</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['sum(year(curdate())-year(data_urodzenia))'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
    
$sql = "SELECT avg(year(curdate())-year(data_urodzenia)),nazwa_dzial FROM pracownicy,organizacja where id_org=dzial group by dzial";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie 7");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Średnia lat</th><th>Dział</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['avg(year(curdate())-year(data_urodzenia))'].'</td>'.'<td>'.$wiersz['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
    
$sql = "SELECT sum(year(curdate())-year(data_urodzenia)),nazwa_dzial FROM pracownicy,organizacja where id_org=dzial group by dzial";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie 8");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Suma lat</th><th>Dział</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['sum(year(curdate())-year(data_urodzenia))'].'</td>'.'<td>'.$wiersz['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
    
$sql = "SELECT max(year(curdate())-year(data_urodzenia)),nazwa_dzial FROM pracownicy,organizacja where id_org=dzial group by dzial";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie 9");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Najstarszy</th><th>Dział</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['max(year(curdate())-year(data_urodzenia))'].'</td>'.'<td>'.$wiersz['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
    
$sql = "SELECT min(year(curdate())-year(data_urodzenia)),nazwa_dzial FROM pracownicy,organizacja where id_org=dzial and (nazwa_dzial='handel' or nazwa_dzial='serwis') group by dzial";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie 10");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Najmłodszy</th><th>Dział</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['min(year(curdate())-year(data_urodzenia))'].'</td>'.'<td>'.$wiersz['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
    
$sql = "SELECT imie,min(year(curdate())-year(data_urodzenia)),nazwa_dzial FROM pracownicy,organizacja where id_org=dzial and (nazwa_dzial='handel' or nazwa_dzial='serwis') group by dzial";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie 11");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Imię</th><th>Wiek</th><th>Dział</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['min(year(curdate())-year(data_urodzenia))'].'</td>'.'<td>'.$wiersz['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
    
$sql = "SELECT imie,datediff(curdate(),data_urodzenia) FROM pracownicy,organizacja where id_org=dzial";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie 12");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Imię</th><th>Wiek(dni)</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['datediff(curdate(),data_urodzenia)'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
    
$sql = "SELECT imie,year(curdate())-year(data_urodzenia) FROM pracownicy,organizacja where id_org=dzial and imie not like '%a' order by data_urodzenia asc limit 1";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie 13");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Imię</th><th>Wiek</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['year(curdate())-year(data_urodzenia)'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
echo("<br>");
echo("<h1>Formatowanie dat</h1>");
    
$sql = "SELECT *, date_format(data_urodzenia,'%W-%m-%Y') from pracownicy;";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie formatowanie 1");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Imię</th><th>Wiek</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz["date_format(data_urodzenia,'%W-%m-%Y')"].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    
$sql2 = "SET lc_time_names = 'pl_PL'";   
$sql = "SELECT date_format(curdate(),'%W') from pracownicy;";
$wynik = mysqli_query($conn, $sql);
$wynik = mysqli_query($conn, $sql2);

    echo("Zadanie formatowanie 2");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Imię</th><th>Wiek</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz["date_format(curdate(),'%W')"].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");



    




?>

</body>
</html>
