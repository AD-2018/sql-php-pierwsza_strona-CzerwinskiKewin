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
        $sql = "SELECT * FROM sys_osoba";
        $wynik = mysqli_query($conn, $sql);
            
            echo("<br>");
            echo("Osoby");
            echo("<br>");
            echo($sql);
            echo('<table border="1">');
            echo('<th>ID osoby</th><th>Osoba</th>');

            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                echo('<tr>');
                echo('<td>'.$wiersz['id_osoba'].'</td>'.'<td>'.$wiersz['osoba'].'</td>');
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
        $sql = "SELECT * FROM sys_rola";
        $wynik = mysqli_query($conn, $sql);
            
            echo("<br>");
            echo("Role");
            echo("<br>");
            echo($sql);
            echo('<table border="1">');
            echo('<th>ID roli</th><th>Rola</th>');

            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                echo('<tr>');
                echo('<td>'.$wiersz['id_rola'].'</td>'.'<td>'.$wiersz['rola'].'</td>');
                echo('</tr>');
            }

            echo('</table>');
            
        echo("<br>");
      ?>
      </main>
      <aside>
        5
      </aside>
      <footer>
      <?php
        require_once("../../connect.php");
        $sql = "SELECT id_system, osoba, rola FROM sys_system, sys_osoba, sys_rola WHERE sys_osoba.id_osoba = sys_system.id_osoba AND sys_rola.id_rola = sys_system.id_rola order by id_system ASC";
        $wynik = mysqli_query($conn, $sql);
            
            echo("<br>");
            echo("System informatyczny");
            echo("<br>");
            echo($sql);
            echo('<table border="1">');
            echo('<th>ID</th><th>Osoba</th><th>Rola</th>');

            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                echo('<tr>');
                echo('<td>'.$wiersz['id_system'].'</td>'.'<td>'.$wiersz['osoba'].'</td>'.'<td>'.$wiersz['rola'].'</td>');
                echo('</tr>');
            }

            echo('</table>');
            
        echo("<br>");
      ?>
      </footer>
    </div>
  </body>
</html>