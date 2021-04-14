<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CSS Grid</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="linki">
              <br>
              <br>
              <br>
              <a class="link" href="/index.php">Menu</a><br><br>
              <a class="link" href="/cssgrid/grid1/index.php">Grid 1</a><br><br>
              <a class="link" href="/cssgrid/grid2/index.php">Grid 2</a><br><br>
              <a class="link" href="/cssgrid/grid3/index.php">Grid 3</a><br><br>
              <a class="link" href="/cssgrid/grid4/index.php">Grid 4</a><br><br>
              <a class="link" href="/cssgrid/grid5/index.html">Grid 5</a><br><br>
              <a class="link" href="/cssgrid/grid6/index.html">Grid 6</a><br><br>
              <a class="link" href="/cssgrid/grid7/index.html">Grid 7</a><br><br>
              <a class="link" href="/cssgrid/grid8/index.html">Grid 8</a><br><br>
              <a class="link" href="/cssgrid/grid9/index.html">Grid 9</a><br><br>
              <a class="link" href="/cssgrid/grid10/index.html">Grid 10</a><br><br>
              <a class="link" href="/cssgrid/grid11/index.html">Grid 11</a><br><br>
              <a class="link" href="/cssgrid/grid12/index.html">Grid 12</a><br><br>
        </div>
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
            echo('<th>ID pracownika</th><th>Pracownik</th>');

            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                echo('<tr>');
                echo('<td>'.$wiersz['id_pracownik'].'</td>'.'<td>'.$wiersz['pracownik'].'</td>');
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
            echo('<th>ID projektu</th><th>Projekt</th>');

            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                echo('<tr>');
                echo('<td>'.$wiersz['id_projekt'].'</td>'.'<td>'.$wiersz['projekt'].'</td>');
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
            echo('<th>ID</th><th>Pracownik</th><th>Projekt</th>');

            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                echo('<tr>');
                echo('<td>'.$wiersz['id_firma'].'</td>'.'<td>'.$wiersz['pracownik'].'</td>'.'<td>'.$wiersz['projekt'].'</td>');
                echo('</tr>');
            }

            echo('</table>');
            
        echo("<br>");
      ?>
      </aside>
      <footer>
        4
      </footer>
    </div>
  </body>
</html>