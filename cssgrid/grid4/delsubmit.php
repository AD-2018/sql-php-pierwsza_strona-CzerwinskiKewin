<?php
    echo('<h3>Usun pracownika</h3>');
        echo('<form action="delpracownik.php" method="POST">');
            echo('<label>ID pracownika</label><input type="number" name="id"></br>');
            echo('<input type="submit" value="Usuń">');
        echo('</form>');

    echo('<h3>Usun projekt</h3>');
        echo('<form action="delprojekt.php" method="POST">');
            echo('<label>ID projektu</label><input type="number" name="id"></br>');
            echo('<input type="submit" value="Usuń">');
        echo('</form>');

    echo('<h3>Usun firme</h3>');
        echo('<form action="delfirma.php" method="POST">');
            echo('<label>ID firmy</label><input type="number" name="id"></br>');
            echo('<input type="submit" value="Usuń">');
        echo('</form>');
?>