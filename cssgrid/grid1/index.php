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
        require_once("../connect.php");
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
        3
      </main>
      <aside>
        5
 </aside>
      <footer>
        4
      </footer>
    </div>
  </body>
</html>