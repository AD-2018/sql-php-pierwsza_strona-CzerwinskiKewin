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
echo("<h1>Biblioteka</h1>");
    
require_once("../connect.php");
  
$sql = "SELECT * FROM bibl_autor";
$wynik = mysqli_query($conn, $sql);
    
echo('<label for="Autor">Autor:</label>');
echo('<select name="Autor">');
    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo'<option value="'.$wiersz['id_autor'].'">';
        echo($wiersz['autor']);
        echo"</option>"; 
    }
echo('</select>');
    
echo("<br>");
    
$sql = "SELECT * FROM bibl_tytul";
$wynik = mysqli_query($conn, $sql);
    
echo('<label for="Ksiazka">Książka:</label>');
echo('<select name="Ksiazka">');
    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo'<option value="'.$wiersz['id_tytul'].'">';
        echo($wiersz['tytul']);
        echo"</option>"; 
    }
echo('</select>');
    
echo("<br>");
   
    
$sql = "SELECT * FROM bibl_autor";
$wynik = mysqli_query($conn, $sql);
    
    echo("<br>");
    echo("Autorzy");
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
    echo("Ksiązki");
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
    echo("Tabele");
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
    
$sql = "SELECT id_book, autor, tytul, wypoz FROM bibl_book, bibl_tytul, bibl_autor WHERE bibl_tytul.id_tytul = bibl_book.id_tytul AND bibl_autor.id_autor = bibl_book.id_autor";
$wynik = mysqli_query($conn, $sql);
    
    echo("<br>");
    echo("Książki i Autorzy");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>ID książki</th><th>Autor</th><th>Tytuł</th><th>Wypożyczenie</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['id_book'].'</td>'.'<td>'.$wiersz['autor'].'</td>'.'<td>'.$wiersz['tytul'].'</td>'.'<td>'.$wiersz['wypoz'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
    
?>
    
</body>
</html>
