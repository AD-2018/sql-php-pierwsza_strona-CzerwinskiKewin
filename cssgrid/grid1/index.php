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
      <header>
      <?php
        require_once("../../connect.php");
        $sql = "SELECT * FROM skl_producent";
        $wynik = mysqli_query($conn, $sql);
            
            echo("<br>");
            echo("Producenci");
            echo("<br>");
            echo($sql);
            echo('<table border="1">');
            echo('<th>ID producenta</th><th>Producent</th>');

            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                echo('<tr>');
                echo('<td>'.$wiersz['id_producent'].'</td>'.'<td>'.$wiersz['producent'].'</td>');
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
        $sql = "SELECT * FROM skl_artykul";
        $wynik = mysqli_query($conn, $sql);
            
            echo("<br>");
            echo("Artykuly");
            echo("<br>");
            echo($sql);
            echo('<table border="1">');
            echo('<th>ID artykulu</th><th>Artykul</th>');

            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                echo('<tr>');
                echo('<td>'.$wiersz['id_artykul'].'</td>'.'<td>'.$wiersz['artykul'].'</td>');
                echo('</tr>');
            }

            echo('</table>');
            
        echo("<br>");
      ?>
      </main>
      <aside>
      <?php
        require_once("../../connect.php");
        $sql = "SELECT id_sklep, producent, artykul FROM skl_sklep, skl_producent, skl_artykul WHERE skl_producent.id_producent = skl_sklep.id_producent AND skl_artykul.id_artykul = skl_sklep.id_artykul";
        $wynik = mysqli_query($conn, $sql);
            
            echo("<br>");
            echo("Sklep");
            echo("<br>");
            echo($sql);
            echo('<table border="1">');
            echo('<th>ID</th><th>Producent</th><th>Artykul</th>');

            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                echo('<tr>');
                echo('<td>'.$wiersz['id_sklep'].'</td><td>'.$wiersz['producent'].'</td><td>'.$wiersz['artykul'].'</td>');
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