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
        $sql = "SELECT * FROM skl_producent";
        $wynik = mysqli_query($conn, $sql);
            
            echo("<br>");
            echo("Producenci");
            echo("<br>");
            echo($sql);
            echo('<table border="1">');
            echo('<th>ID producenta</th><th>Producent</th><th>Usun</th>');

            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                echo('<tr>');
                echo('<td>'.$wiersz['id_producent'].'</td>'.'<td>'.$wiersz['producent'].'</td>'.'<td>
	    
                <form action="delproducent.php" method="POST">
                  <input type="text" name="id" value="'.$wiersz['id_producent'].'" hidden>
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
        $sql = "SELECT * FROM skl_artykul";
        $wynik = mysqli_query($conn, $sql);
            
            echo("<br>");
            echo("Artykuly");
            echo("<br>");
            echo($sql);
            echo('<table border="1">');
            echo('<th>ID artykulu</th><th>Artykul</th><th>Usun</th>');

            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                echo('<tr>');
                echo('<td>'.$wiersz['id_artykul'].'</td>'.'<td>'.$wiersz['artykul'].'</td>'.'<td>
	    
                <form action="delartykul.php" method="POST">
                  <input type="text" name="id" value="'.$wiersz['id_artykul'].'" hidden>
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
        $sql = "SELECT id_sklep, producent, artykul FROM skl_sklep, skl_producent, skl_artykul WHERE skl_producent.id_producent = skl_sklep.id_producent AND skl_artykul.id_artykul = skl_sklep.id_artykul order by id_sklep ASC";
        $wynik = mysqli_query($conn, $sql);
            
            echo("<br>");
            echo("Sklep");
            echo("<br>");
            echo($sql);
            echo('<table border="1">');
            echo('<th>ID</th><th>Producent</th><th>Artykul</th><th>Usun</th>');

            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                echo('<tr>');
                echo('<td>'.$wiersz['id_sklep'].'</td>'.'<td>'.$wiersz['producent'].'</td>'.'<td>'.$wiersz['artykul'].'</td>'.'<td>
	    
                <form action="delsklep.php" method="POST">
                  <input type="text" name="id" value="'.$wiersz['id_sklep'].'" hidden>
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
          echo('<h3>Usun producenta</h3>');
          echo('<form action="delproducent.php" method="POST">');
          echo('<label>ID producenta</label><input type="number" name="id"></br>');
          echo('<input type="submit" value="Usuń">');
          echo('</form>');

          echo('<h3>Usun artykul</h3>');
          echo('<form action="delartykul.php" method="POST">');
          echo('<label>ID artykulu</label><input type="number" name="id"></br>');
          echo('<input type="submit" value="Usuń">');
          echo('</form>');

          echo('<h3>Usun sklep</h3>');
          echo('<form action="delsklep.php" method="POST">');
          echo('<label>ID sklep</label><input type="number" name="id"></br>');
          echo('<input type="submit" value="Usuń">');
          echo('</form>');
        ?>
      </footer>
    </div>
  </body>
</html>