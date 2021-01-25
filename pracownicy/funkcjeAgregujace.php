<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/style.css">
</head>
<body>
    
<div class="diw">
    <a class="link" href="https://github.com/AD-2018/sql-php-pierwsza_strona-CzerwinskiKewin">Github</a>
    <a class="link" href="/pracownicy/pracownicyOrganizacja.php">Pracownicy i Organizacja</a>
    <a class="link" href="index.php">Strona Główna</a>
    <a class="link" href="/pracownicy/dataCzas.php">Data i Czas</a>
</div>

<?php
echo("<h1>Kewin Czerwiński</h1>");
echo("<hr/>");
echo("<h1>Funkcje Agregujące</h1>");
    
require_once("../connect.php");
    
$sql = "SELECT sum(zarobki) FROM pracownicy,organizacja where id_org=dzial";
$wynik = mysqli_query($conn, $sql);
    
    echo("<br>");
    echo("Zadanie 1");
    echo("<br>");
    echo($sql);
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

    echo("Zadanie 2");
    echo("<br>");
    echo($sql);
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

    echo("Zadanie 3");
    echo("<br>");
    echo($sql);
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

    echo("Zadanie 4");
    echo("<br>");
    echo($sql);
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

    echo("Zadanie 5");
    echo("<br>");
    echo($sql);
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

    echo("Zadanie 6");
    echo("<br>");
    echo($sql);
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

    echo("Zadanie 7");
    echo("<br>");
    echo($sql);
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

    echo("Zadanie 8");
    echo("<br>");
    echo($sql);
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
echo("<br>");
echo("<h1>Group by</h1>");
    
$sql = "SELECT sum(zarobki),nazwa_dzial FROM pracownicy,organizacja where id_org=dzial group by dzial";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie group by 1");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Suma zarobków</th><th>Dział</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['sum(zarobki)'].'</td>'.'<td>'.$wiersz['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
      
echo("<br>");
    
$sql = "SELECT count(imie),nazwa_dzial FROM pracownicy,organizacja where id_org=dzial group by dzial";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie group by 2");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Liczba pracowników</th><th>Dział</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['count(imie)'].'</td>'.'<td>'.$wiersz['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
      
echo("<br>");
    
$sql = "SELECT avg(zarobki),nazwa_dzial FROM pracownicy,organizacja where id_org=dzial group by dzial";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie group by 3");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Średnia zarobków</th><th>Dział</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['avg(zarobki)'].'</td>'.'<td>'.$wiersz['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
      
echo("<br>");
    
$sql = "SELECT sum(zarobki),nazwa_dzial,if((imie LIKE '%a'), 'Kobiety','Mężczyźni') as 'km' FROM pracownicy,organizacja where id_org=dzial group by km";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie group by 4");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Suma zarobków</th><th>Płeć</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['sum(zarobki)'].'</td>'.'<td>'.$wiersz['km'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
      
echo("<br>");
    
$sql = "SELECT avg(zarobki),nazwa_dzial,if((imie LIKE '%a'), 'Kobiety','Mężczyźni') as 'km' FROM pracownicy,organizacja where id_org=dzial group by km";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie group by 5");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Średnia zarobków</th><th>Płeć</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['avg(zarobki)'].'</td>'.'<td>'.$wiersz['km'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
      
echo("<br>");
echo("<br>");
echo("<h1>Having</h1>");
    
$sql = "SELECT avg(zarobki),nazwa_dzial FROM pracownicy,organizacja where id_org=dzial group by dzial having avg(zarobki)<28";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie having 1");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Suma zarobków</th><th>Dział</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['avg(zarobki)'].'</td>'.'<td>'.$wiersz['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
      
echo("<br>");
    
$sql = "SELECT avg(zarobki),nazwa_dzial FROM pracownicy,organizacja where id_org=dzial and imie not like '%a' group by dzial having avg(zarobki)>30";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie having 2");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Średnia zarobków</th><th>Dział</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['avg(zarobki)'].'</td>'.'<td>'.$wiersz['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
      
echo("<br>");
    
$sql = "SELECT count(imie),nazwa_dzial FROM pracownicy,organizacja where id_org=dzial group by dzial having count(imie)>3";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie having 3");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>Liczba pracowników</th><th>Dział</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['count(imie)'].'</td>'.'<td>'.$wiersz['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
      
echo("<br>");
    

  
?>
  
</body>
</html>
