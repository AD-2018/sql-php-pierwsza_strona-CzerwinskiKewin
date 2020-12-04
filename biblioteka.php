<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="diw">
    <a class="link" href="https://github.com/AD-2018/sql-php-pierwsza_strona-CzerwinskiKewin">Github</a>
    <a class="link" href="index.php">Strona Główna</a>
    <a class="link" href="funkcjeAgregujace.php">Funkcje Agregujące</a>
    <a class="link" href="dataCzas.php">Data i Czas</a>
</div>
    
<?php
echo("<h1>Kewin Czerwiński</h1>");
echo("<hr/>");
echo("<h1>Biblioteka</h1>");
    
require_once("connect.php");
    
$sql = "SELECT * FROM bibl_autor";
$wynik = mysqli_query($conn, $sql);
    
    echo("<br>");
    echo("Zadanie 1");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>ID autora</th><th>Autor</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['id_autor'].'</td>'.'<td>'.$wiersz['autor'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
  
$sql = "SELECT * FROM bibl_tytul";
$wynik = mysqli_query($conn, $sql);
    
    echo("<br>");
    echo("Zadanie 2");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>ID tytułu</th><th>Tytuł</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['id_tytul'].'</td>'.'<td>'.$wiersz['tytul'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
  
$sql = "SELECT * FROM bibl_book";
$wynik = mysqli_query($conn, $sql);
    
    echo("<br>");
    echo("Zadanie 3");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>ID książki</th><th>ID autora</th><th>ID tytułu</th><th>Wypożyczenie</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['id_book'].'</td>'.'<td>'.$wiersz['id_autor'].'</td>'.'<td>'.$wiersz['id_tytul'].'</td>'.'<td>'.$wiersz['wypoz'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
