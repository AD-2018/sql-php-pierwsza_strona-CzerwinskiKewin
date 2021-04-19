<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/style.css">
</head>
<body>
    
<div class="diw">
    <a class="link" href="https://github.com/AD-2018/sql-php-pierwsza_strona-CzerwinskiKewin">Github</a>
    <a class="link" href="/pracownicy/pracownicyOrganizacja.php">Pracownicy i Organizacja</a>
    <a class="link" href="/pracownicy/funkcjeAgregujace.php">Funkcje Agregujące</a>
    <a class="link" href="/index.php">Strona Główna</a>
</div>

<div class="strona">
<?php
echo("<h1>Kewin Czerwiński</h1>");
echo("<hr/>");
echo("<h1>Data i Czas</h1>");

include_once("../menu.php");
   
require_once("../connect.php");
    
echo('<div class="zawartosc">');
$sql = "SELECT imie,nazwa_dzial,zarobki,data_urodzenia,year(curdate())-year(data_urodzenia) FROM pracownicy,organizacja where id_org=dzial";
$wynik = mysqli_query($conn, $sql);
    
    echo("<br>");
    echo("Zadanie 1");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Imię</th><th>Nazwa działu</th><th>Wiek</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['nazwa_dzial'].'</td>'.'<td>'.$wiersz['year(curdate())-year(data_urodzenia)'].'</td>');
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
    echo('<th>Imię</th><th>Nazwa działu</th><th>Wiek</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['nazwa_dzial'].'</td>'.'<td>'.$wiersz['year(curdate())-year(data_urodzenia)'].'</td>');
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
    
$sql = "SELECT sum(year(curdate())-year(data_urodzenia)) FROM pracownicy,organizacja where id_org=dzial and nazwa_dzial='handel'";
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
    
$sql = "SELECT *, date_format(data_urodzenia,'%W-%m-%Y') from pracownicy";
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
  
echo("<br>");

$sql1 = "SET lc_time_names = 'pl_PL'";
$sql2 = "SELECT date_format(curdate(),'%W')";
$wynik = mysqli_query($conn, $sql1);
$wynik = mysqli_query($conn, $sql2);
    
    echo("Zadanie formatowanie 2");
    echo("<br>");
    echo($sql2);
    echo('<table border="1">');
    echo("<tr><th>Data</th></tr>");
    
     while($wiersz=mysqli_fetch_assoc($wynik)) 
     {
          echo ('<tr>');
          echo ('<td>'.$wiersz["date_format(curdate(),'%W')"].'</td>');
          echo ('</tr>');
     }
    
    echo ('</table>');
    
echo("<br>");
    
$sql = "SELECT *,date_format(data_urodzenia,'%W-%M-%Y') from pracownicy;";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie formatowanie 3");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Imię</th><th>Data</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz["date_format(data_urodzenia,'%W-%M-%Y')"].'</td>');
        echo('</tr>');
    }

    echo('</table>');
  
echo("<br>");
    
$sql = "SELECT curtime(4)";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie formatowanie 4");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Czas</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['curtime(4)'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
  
echo("<br>");
    
$sql = "SELECT *,date_format(data_urodzenia,'%Y-%M-%W') from pracownicy";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie formatowanie 5");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Imię</th><th>Data</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz["date_format(data_urodzenia,'%Y-%M-%W')"].'</td>');
        echo('</tr>');
    }

    echo('</table>');
  
echo("<br>");
    
$sql = "SELECT imie,datediff(curdate(),data_urodzenia)*24 as godz, datediff(curdate(),data_urodzenia)*24*60 as min FROM pracownicy, organizacja where id_org=dzial";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie formatowanie 6");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Imię</th><th>Godziny życia</th><th>Minuty życia</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz["godz"].'</td>'.'<td>'.$wiersz["min"].'</td>');
        echo('</tr>');
    }

    echo('</table>');
  
echo("<br>");
    
$sql = "SELECT date_format('2002-10-01','%j')";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie formatowanie 7");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Dzień roku</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz["date_format('2002-10-01','%j')"].'</td>');
        echo('</tr>');
    }

    echo('</table>');
  
echo("<br>");
    
$sql = "SELECT imie, DATE_FORMAT(data_urodzenia,'%W') as dzien FROM pracownicy,organizacja where id_org=dzial order by 
     CASE
          
          WHEN dzien = 'Poniedziałek' THEN 1
          WHEN dzien = 'Wtorek' THEN 2
          WHEN dzien = 'Środa' THEN 3
          WHEN dzien = 'Czwartek' THEN 4
          WHEN dzien = 'Piątek' THEN 5
          WHEN dzien = 'Sobota' THEN 6
          WHEN dzien = 'Niedziela' THEN 7
     END ASC";
    
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie formatowanie 8");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Imię</th><th>Dzień</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz["dzien"].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
    
$sql = "SELECT count(date_format(data_urodzenia, '%W')) from pracownicy,organizacja where id_org=dzial and (date_format(data_urodzenia,'%W')='Poniedziałek')";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie formatowanie 9");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Urodzeni w poniedziałek</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz["count(date_format(data_urodzenia, '%W'))"].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    

  
echo("<br>");
    
$sql = "SELECT date_format(data_urodzenia,'%W') as dzien, count(date_format(data_urodzenia,'%W')) as ilosc FROM pracownicy,organizacja where id_org=dzial group by dzien order by 
     CASE
          
          WHEN dzien = 'Poniedziałek' THEN 1
          WHEN dzien = 'Wtorek' THEN 2
          WHEN dzien = 'Środa' THEN 3
          WHEN dzien = 'Czwartek' THEN 4
          WHEN dzien = 'Piątek' THEN 5
          WHEN dzien = 'Sobota' THEN 6
          WHEN dzien = 'Niedziela' THEN 7
     END ASC";
    
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie formatowanie 10");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Dzień</th><th>Liczba dni</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['dzien'].'</td>'.'<td>'.$wiersz['ilosc'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
    

echo('</div>');
?>

</div>

</body>
</html>
