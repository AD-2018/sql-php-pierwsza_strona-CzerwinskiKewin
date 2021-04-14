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
        $sql = "SELECT * FROM sys_osoba";
        $wynik = mysqli_query($conn, $sql);
            
            echo("<br>");
            echo("<h1>Osoby</h1>");
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
            echo("<h1>Role</h1>");
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
            echo("<h1>System informatyczny</h1>");
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