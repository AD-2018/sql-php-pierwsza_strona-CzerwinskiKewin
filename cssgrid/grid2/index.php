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
        <?php
          include_once("menugrid.php");
        ?>
      <header>
      <?php
        require_once("../../connect.php");
        $sql = "SELECT * FROM kan_prawnik";
        $wynik = mysqli_query($conn, $sql);
            
            echo("<br>");
            echo("Prawnicy");
            echo("<br>");
            echo($sql);
            echo('<table border="1">');
            echo('<th>ID prawnika</th><th>Prawnik</th><th>Usun</th>');

            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                echo('<tr>');
                echo('<td>'.$wiersz['id_prawnik'].'</td>'.'<td>'.$wiersz['prawnik'].'</td>'.'<td>
	    
                <form action="delprawnik.php" method="POST">
                  <input type="text" name="id" value="'.$wiersz['id_prawnik'].'" hidden>
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
        <?php
          include_once("delsubmit.php");
        ?>
      </nav>

      <main>
      <?php
        require_once("../../connect.php");
        $sql = "SELECT * FROM kan_sprawa";
        $wynik = mysqli_query($conn, $sql);
            
            echo("<br>");
            echo("Sprawy sadowe");
            echo("<br>");
            echo($sql);
            echo('<table border="1">');
            echo('<th>ID sprawy</th><th>Sprawa sadowa</th><th>Usun</th>');

            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                echo('<tr>');
                echo('<td>'.$wiersz['id_sprawa'].'</td>'.'<td>'.$wiersz['sprawa'].'</td>'.'<td>
	    
                <form action="delsprawa.php" method="POST">
                  <input type="text" name="id" value="'.$wiersz['id_sprawa'].'" hidden>
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
        $sql = "SELECT id_kancelaria, prawnik, sprawa FROM kan_kancelaria, kan_prawnik, kan_sprawa WHERE kan_prawnik.id_prawnik = kan_kancelaria.id_prawnik AND kan_sprawa.id_sprawa = kan_kancelaria.id_sprawa order by id_kancelaria ASC";
        $wynik = mysqli_query($conn, $sql);
            
            echo("<br>");
            echo("Kancelaria prawna");
            echo("<br>");
            echo($sql);
            echo('<table border="1">');
            echo('<th>ID</th><th>Prawnik</th><th>Sprawa sadowa</th><th>Usun</th>');

            while($wiersz=mysqli_fetch_assoc($wynik))
            {
                echo('<tr>');
                echo('<td>'.$wiersz['id_kancelaria'].'</td>'.'<td>'.$wiersz['prawnik'].'</td>'.'<td>'.$wiersz['sprawa'].'</td>'.'<td>
	    
                <form action="delkancelaria.php" method="POST">
                  <input type="text" name="id" value="'.$wiersz['id_kancelaria'].'" hidden>
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
        4
      </footer>
      <div class="pole">
         5
      </div>
    </div>
  </body>
</html>