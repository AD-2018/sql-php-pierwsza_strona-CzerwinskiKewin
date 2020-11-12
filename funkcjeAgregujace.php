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

    echo("Zadanie 2");
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
    
$sql = "SELECT sum(zarobki),nazwa_dzial FROM pracownicy,organizacja where id_org=dzial group by dzial having sum(zarobki)<28";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie having 1");
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
    
$sql = "SELECT avg(zarobki),nazwa_dzial FROM pracownicy,organizacja where id_org=dzial and imie not like '%a' group by dzial having avg(zarobki)>30";
$wynik = mysqli_query($conn, $sql);

    echo("Zadanie having 2");
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
