<?php
    echo('<h3>Usun prawnika</h3>');
        echo('<form action="delprawnik.php" method="POST">');
            echo('<label>ID prawnika</label><input type="number" name="id"></br>');
            echo('<input type="submit" value="Usuń">');
        echo('</form>');

    echo('<h3>Usun sprawe</h3>');
        echo('<form action="delsprawa.php" method="POST">');
            echo('<label>ID sprawy</label><input type="number" name="id"></br>');
            echo('<input type="submit" value="Usuń">');
        echo('</form>');

    echo('<h3>Usun kancelarie</h3>');
        echo('<form action="delkancelaria.php" method="POST">');
            echo('<label>ID kancelarii</label><input type="number" name="id"></br>');
            echo('<input type="submit" value="Usuń">');
        echo('</form>');
?>