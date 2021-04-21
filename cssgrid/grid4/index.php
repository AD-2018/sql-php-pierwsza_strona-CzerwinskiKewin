<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CSS Grid</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
        <?php
          include_once("menugrid.php");
        ?>
      <header>
      <?php
        require_once("../../connect.php");
        $sql = "SELECT * FROM fir_pracownik";
        $wynik = mysqli_query($conn, $sql);
            
            echo("<br>");
            echo("Pracownicy");
            echo("<br>");
            echo($sql);
            echo('<table border="1">');
            echo('<th>ID pracownika</th><th>Pracownik</th><th>Usun</th>');

            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                echo('<tr>');
                echo('<td>'.$wiersz['id_pracownik'].'</td>'.'<td>'.$wiersz['pracownik'].'</td>'.'<td>
	    
                <form action="delpracownik.php" method="POST">
                  <input type="text" name="id" value="'.$wiersz['id_pracownik'].'" hidden>
                  <input type="submit" value="X">
                </form>
                
                </td>');
                echo('</tr>');
            }

            echo('</table>');
            
        echo("<br>");
      ?>
      </header>
      <nav>
        2
      </nav>

      <main>
      <?php
        require_once("../../connect.php");
        $sql = "SELECT * FROM fir_projekt";
        $wynik = mysqli_query($conn, $sql);
            
            echo("<br>");
            echo("Projekty");
            echo("<br>");
            echo($sql);
            echo('<table border="1">');
            echo('<th>ID projektu</th><th>Projekt</th><th>Usun</th>');

            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                echo('<tr>');
                echo('<td>'.$wiersz['id_projekt'].'</td>'.'<td>'.$wiersz['projekt'].'</td>'.'<td>
	    
                <form action="delprojekt.php" method="POST">
                  <input type="text" name="id" value="'.$wiersz['id_projekt'].'" hidden>
                  <input type="submit" value="X">
                </form>
                
                </td>');
                echo('</tr>');
            }

            echo('</table>');
            
        echo("<br>");
      ?>
      </main>
      <aside>
      <?php
        require_once("../../connect.php");
        $sql = "SELECT id_firma, pracownik, projekt FROM fir_firma, fir_pracownik, fir_projekt WHERE fir_pracownik.id_pracownik = fir_firma.id_pracownik AND fir_projekt.id_projekt = fir_firma.id_projekt order by id_firma ASC";
        $wynik = mysqli_query($conn, $sql);
            
            echo("<br>");
            echo("Firma");
            echo("<br>");
            echo($sql);
            echo('<table border="1">');
            echo('<th>ID</th><th>Pracownik</th><th>Projekt</th><th>Usun</th>');

            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                echo('<tr>');
                echo('<td>'.$wiersz['id_firma'].'</td>'.'<td>'.$wiersz['pracownik'].'</td>'.'<td>'.$wiersz['projekt'].'</td>'.'<td>
	    
                <form action="delfirma.php" method="POST">
                  <input type="text" name="id" value="'.$wiersz['id_firma'].'" hidden>
                  <input type="submit" value="X">
                </form>
                
                </td>');
                echo('</tr>');
            }

            echo('</table>');
            
        echo("<br>");
      ?>
      </aside>
      <footer>
        <?php
          include_once("delsubmit.php");
        ?>
      </footer>
    </div>
  </body>
</html>